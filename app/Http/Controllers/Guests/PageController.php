<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $request;
    protected $section;
    protected $user;

    public function getSections(Request $request, $section = 'home')
    {
        return view('default');
    }
}
