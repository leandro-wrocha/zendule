<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CalendarPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->data['title'] = 'Calendar';

        return view('private.calendar', $this->data);
    }
}
