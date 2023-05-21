<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
	 * Get the comments associated with the post.
	 */
	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class);
	}

	/**
	 * Get the tags associated with the post.
	 */
	public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}

	public function scopeFilter($query, array $filters): Builder
	{
		if ($filters['category'] ?? false) {
			$query->whereHas('category', function ($query) use ($filters) {
				return $query->where('slug', $filters['category']);
			});
		}

		if ($filters['search'] ?? false) {
			$query->where(function ($query) use ($filters) {
				$query->where('title', 'like', '%' . $filters['search'] . '%')
					->orWhere('body', 'like', '%' . $filters['search'] . '%');
			});
		}

		if ($filters['tags'] ?? false) {
			foreach ($filters['tags'] as $tag) {
				$query->whereHas('tags', function ($query) use ($tag) {
					$query->where('title', $tag);
				});
			}
		}

		$query->orderBy('created_at', 'desc');
		
		return $query;
	}
}
