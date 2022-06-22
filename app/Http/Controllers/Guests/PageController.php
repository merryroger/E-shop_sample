<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    protected $request;
    protected $section;
    protected $user;

    public function getSections(Request $request, $section = 'home')
    {
        //abort(404);
        return view('default');
    }
}
