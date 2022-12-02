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

        return redirect('/')->with('status', 'crud create successfully');

    }

    public function crud_edit($id) {
        $edit = Post::find($id);
        return view('crud.edit', compact('edit'));
    }

    public function crud_update(Request $request, $id){

        $data = Post::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->update();

        return redirect('/')->with('status', 'updata crud successfully');

    }

    public function crud_delete($id) {

        $delete = Post::find($id);
        $delete->delete();

        return redirect('/')->with('status', 'delete crud successfully');

    }

}
