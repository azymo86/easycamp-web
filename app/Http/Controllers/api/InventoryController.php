<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function showInventory ()
    {


      // dd($table);

      return view('general/inventory');
    }
}
