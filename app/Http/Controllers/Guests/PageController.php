<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Menuitem;
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

        return $this->render();
    }

    protected function retrieveTrueSection($sectionName, $includeHidden = false)
    {
        return Section::guests($includeHidden)->sectionByName($sectionName)->first();
    }

    protected function retrieveSectionContents()
    {
        $contents = '';
        return $contents;
    }

    protected function &buildMenu()
    {
        $menu_access_group = $this->section->retrieveAccessGroup(true);
        $get_visible_items = true;

        $structure = Menuitem::structure($menu_access_group, !$get_visible_items);
        $structure['_sids_'] = Menuitem::hierarchy($menu_access_group, $get_visible_items, $this->section->id);

        return $structure;
    }

    protected function render()
    {
        if ($this->section != null) {

            /* Menu build operations */
            $menu = $this->buildMenu();
            $menu_tree = $menu['_tree_'];
            $section_ids = $menu['_sids_'];
            unset($menu['_tree_'], $menu['_sids_']);

            $view = $this->section->view;
            $user = $this->user;

            /* Section content retrieving */
            $contents = $this->retrieveSectionContents();

            return view($this->section->entrypoint, compact([
                'view',
                'menu',
                'menu_tree',
                'contents',
                'section_ids',
                'user'
            ]));

        }

        abort(404);
    }
}
