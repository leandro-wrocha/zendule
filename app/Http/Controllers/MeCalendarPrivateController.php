<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MeCalendarPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->data['title'] = 'Me Calendar';

        return view('me-calendar', $this->data);
    }
}
