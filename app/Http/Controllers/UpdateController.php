<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function editprofile(blog $blog)
    {
        return view('editprofile', ['blog' => $blog]);
    }
    public function update(blog $blog, Request $request)
    {
        $request->validate([
            'title' =>'required',
            'Location' => 'required',
            'description' => 'required',
        ]);
        $blog->title = $request->title;
        $blog->Location = $request->Location;
        $blog->description = $request->description;
        $blog->save();

        return redirect('/')->with('success', 'records updated successfully');
    }
}
