<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);

        return View('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
      $this->validate($request, [
        'title' => 'required|unique:posts|max:250',
        'body' => 'required',
        'slug' => 'required|alpha_dash|min:6|max:255']);
          //insert into database
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->slug = $request->slug;

      $post->save();

      Session::flash('success', "Thêm mới bài viết thành công.");

      return redirect()->route('posts.index');

  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return View('posts.show')->withPost($post);
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

        return View('posts.edit')->withPost($post);
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
      $post = Post::find($id);
      
        $this->validate($request, [
        'title' => 'required|max:250',
        'body' => 'required',
        'slug' => ($request->input('slug') != $post->slug)?'required|alpha_dash|min:6|max:255|unique:posts,slug':'']);
     
       

       $post = Post::find($id);
       // case 1: 
       $input = $request->all();
       $post -> fill($input)->save();
       
       //case 2:
       // $post->title = $request->input('title');
       // $post->body = $request->input('body');

       // $post->save();

       Session::flash('success', "Cập nhật bài viết thành công.");

       return redirect()->route('posts.index');
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id',$id);
        $post->delete();

        Session::flash('success', "Xóa bài viết thành công.");

        return redirect()->route('posts.index');

    }
}
