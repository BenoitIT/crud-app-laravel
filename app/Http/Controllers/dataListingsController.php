<?php

namespace App\Http\Controllers;

use App\Models\blog;

class dataListingsController extends Controller
{
    public function search()
    {
    $positions = blog::orderBy('id', 'desc')->simplepaginate(5);
      return view('welcome', ['results' => $positions])->with('positions', $positions);
    }
}
