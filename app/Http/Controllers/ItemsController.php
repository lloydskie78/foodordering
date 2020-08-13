<?php

namespace App\Http\Controllers;

use DB;
use App\Item;
use App\Categories;
use Illuminate\Http\Request;


class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function findCombo($id)
    {
        $item = Item::find($id);
        return json_encode($item);
    }
}
