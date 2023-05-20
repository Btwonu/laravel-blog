<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class Post extends Model
{
    use HasFactory;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

	/**
     * Get the category associated with the post.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

	/**
     * Get the author of the post.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

	/**
     * Get the comments for the blog post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

	public function scopeFilter($query, array $filters): Builder
	{
		if ($filters['category'] ?? false) {
			$category = Category::where('slug', $filters['category'])->get()->first();
			$query->where('category_id', $category->id);
		}

		if ($filters['search'] ?? false) {
			$query
				->where('title', 'like', '%' . $filters['search'] . '%')
				->orWhere('body', 'like', '%' . $filters['search'] . '%');
		}

		return $query;
	}
}
