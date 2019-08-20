<?php

namespace App\Http\Controllers;

use App\Content;

class PagesController extends MainController
{
    public function home()
    {
       self::$data['page_title'] = 'Homepage';
       return view('content.home', self::$data);
    }

    public function content($murl)
    {
       Content::getContent($murl, self::$data);
       return view('content.content', self::$data);
    }

}