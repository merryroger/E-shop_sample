<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $request;
    protected $section;
    protected $user;

    public function getSections(Request $request, $section = 'home')
    {
        if ($request->session()->exists('user')) {
            $this->user = $request->session()->get('user');
        } else {
            $this->user = [];
        }

        $this->request = $request->request->all();
        $this->section = $this->retrieveTrueSection($section, true);
dd($this->section);
        return $this->render();
    }

    protected function retrieveTrueSection($sectionName, $includeHidden = false)
    {
        return Section::guests($includeHidden)->sectionByName($sectionName)->first();
    }
}
