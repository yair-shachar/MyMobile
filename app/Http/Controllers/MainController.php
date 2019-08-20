<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Product;
use App\Categorie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public static $data = ['is_admin' => false];

    public function __construct() 
    {
    self::$data['menus'] = Menu::all()->toArray();
    }

}