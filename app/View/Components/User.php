<?php

namespace App\View\Components;

use Illuminate\View\Component;

class User extends Component
{
	public int $id;
	public string $username;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $username)
    {
        $this->id = $id;
		$this->username = $username;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user');
    }
}
