<?php

namespace App\Http\Controllers;

use auth;

use App\Models\blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\postSaved;
use Illuminate\Support\Facades\Mail;

class formController extends Controller
{
    public function addnew()
    {
        return view('form');
    }
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|max:75',
            'Location' => 'required',
            'Description' => 'required|max:400'
        ]);
        $new = new blog();
        $new->title = $request->title;
        $new->Location = $request->Location;
        $new->Description = $request->Description;
        $new->user_id = 1;
        $new->save();

        return redirect('/');
    }

    public function destroy(blog $blog, $id)
    {
        $blog = blog::destroy($id);

        return redirect('/');
    }
}
