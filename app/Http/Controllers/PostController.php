<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=Post::paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'title'=>'required|max:255',
            'slug'=>'required|alphadash|min:5|max:255',
            'category_id'=>'required|integer',
            'body'=>'required'
        ));

        //store the data into the database
        $post=new Post;
        $post->title=$request->title;
        $post->body=$request->body;
        $post->slug=$request->slug;
         $post->category_id=$request->category_id;

          if ($request->hasFile('featured_img')) {
          $image = $request->file('featured_img');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $post->image = $filename;
        }


        $post->save();

        
        
        Session::flash('success','This blog post is successfuly save');
        
        

        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->withPost($post);
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
        $post=Post::find($id);
         $categories=Category::all();
         $cats=array();
         foreach($categories as $category){
             $cats[$category->id]=$category->name;
         }
        return view('posts.edit')->withPost($post)->withCategories($cats);


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
        $post=Post::find($id);
        if($request->input('slug')==$post->slug){
               $this->validate($request,array(
            'title'=>'required|max:255',
            'body'=>'required'
        ));     
        }
        else{
          $this->validate($request,array(
            'title'=>'required|max:255',
            'slug'=>'required|alphadash|min:5|max:255|unique:posts,slug',
            'body'=>'required'
        ));
}
          $post= Post::find($id);
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->slug=$request->input('slug');
          $post->category_id=$request->input('category_id');
        $post->save();

        
        
        Session::flash('success','This blog post is successfuly save');
        
        

        return redirect()->route('posts.show',$post->id);
      
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
        $post=Post::find($id);
        $post->delete();
          Session::flash('success','This blog post is successfuly delete');
        
        

        return redirect()->route('posts.index');
    }
}