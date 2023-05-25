<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class Comment extends Component
{
	public string $body;
	public User $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($body, $user)
    {
        $this->body = $body;
		$this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.comment');
    }
}
