<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CrudController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data = Post::all();
        return view('crud.index', compact('data'));
    }

    public function crud_create() {
        return view('crud.create');
    }

    public function crud_store(Request $request){

        $data = new Post();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->user_id = Auth::user()->id;

        $data->save();

        return redirect('crud')->with('status', 'crud create successfully');

    }

}
