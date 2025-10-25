<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    /**
     * Data shared with views and other methods.
     *
     * @var array<string, mixed>
     */
    protected array $data = [];

    public function __construct()
    {
        $this->data['user'] = Auth::user();
    }
}
