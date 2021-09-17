<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        if(Gate::allows('show-all-post')) {
            $list_posts = Post::all();
            return view('posts.listPost' , compact('list_posts'));
        } else {
            $list_posts = null;
            return view('posts.listPost', compact('list_posts'))->with(['error' => 'You cannot check any post!!!']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('create-edit-delete-post')) {
            $data = $request->all();
        
            array_push($data, $data["created_at"] = now(), $data["updated_at"] = now(), $data['user_id'] = Auth::id());
            Post::create($data);
            return redirect()->route('listPost')->with(['success' => 'Add Success']);
        } else {
            return redirect()->route('listPost')->with(['error' => 'You cannot create post!!!']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('posts.editPost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(Gate::allows('create-edit-delete-post')) {
            $data = $request->except(['_token', '_method']);
            Post::where('id', $id)->update($data);
            return redirect()->route('listPost')->with(['success' => 'Edit Success']);
        } else {
            return redirect()->route('listPost')->with(['error' => 'You cannot edit post!!!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(Gate::allows('create-edit-delete-post')) {
            Post::destroy($id);
            return redirect()->route('listPost')->with(['success' => 'Delete Success']);
        } else {
            return redirect()->route('listPost')->with(['error' => 'You cannot delete post!!!']);
        }
    }
}
