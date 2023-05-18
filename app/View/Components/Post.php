<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
	public int $id;
	public string $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title)
    {
		$this->id = $id;
        $this->title = $title;
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
