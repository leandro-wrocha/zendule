<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * Data shared with views and other methods.
     *
     * @var array<string, mixed>
     */
    protected array $data = [];
}
