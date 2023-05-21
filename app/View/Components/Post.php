<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Post extends Component
{
	public int $id;
	public string $title;
	public Collection $tags;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $tags)
    {
		$this->id = $id;
        $this->title = $title;
		$this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post');
    }
}
