<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Container\Container;
use Faker\Generator;


class DatabaseSeeder extends Seeder
{
	/**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

	/**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

	/**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $categories = Category::factory(3)->create();
        $users = User::factory(3)->create();
		$tags = Tag::factory(10)->create();
		$posts = [];

		$categories = [
			Category::create([
				'title' => 'Notes',
				'slug' => 'notes',
				'description' => 'Notes storage'
			]),
			Category::create([
				'title' => 'Work',
				'slug' => 'work',
				'description' => 'A place for my projects'
			]),
			Category::create([
				'title' => 'TV Series',
				'slug' => 'tv-series',
				'description' => 'My watchlist'
			]),
		];

		foreach ($categories as $category) {
            for ($i = 1; $i <= 3; $i++) {

                $user = $users->random();

                $post = Post::create([
                    'title' => $this->faker->sentence(),
                    'body' => $this->faker->paragraph(),
                    'category_id' => $category->id,
                    'user_id' => $user->id,
                ]);

				$post->comments()->createMany([
					[
						'body' => 'A new comment.',
						'user_id' => $users->random()->id,
					],
					[
						'body' => 'Another new comment.',
						'user_id' => $users->random()->id,
					],
				]);

				$posts[] = $post;
            }
        }

		$tagIdsCollection = Tag::all()->map(function($tag) {
			return $tag->id;
		});

		foreach ($posts as $post) {
			$post->tags()->sync( $this->faker->randomElements($tagIdsCollection->all(), 5) );
		}
    }
}