<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\str;

use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('blog.index') ->with('posts',Post:: get())  ;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jepg|max:5048',
        ]);
        $slug = Str::slug($request -> title,'-');
        $newimagename = uniqid() . '-'. $slug . '.' . $request->image -> extension();
        $request -> image-> move(public_path('images') , $newimagename);
       // dd($request);
        Post::create(
            ['title' => $request->input('title'),
            'slug'=> $slug,
            'description'=> $request->input('description'),
            'image_path'=> $newimagename,
            'user_id'=> auth()->user()->id]
        );

        return redirect('/blog');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view ('blog.show')
        ->with('post', Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug',$slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request -> validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpg,png,jepg|max:5048',
        ]);
        $slug = Str::slug($request -> title,'-');
        $newimagename = uniqid() . '-'. $slug . '.' . $request->image -> extension();
        $request -> image-> move(public_path('images') , $newimagename);
    //    // dd($request);
        Post::where('slug',$slug)->update
        (
            ['title' => $request->input('title'),
            'slug'=> $slug,
            'description'=> $request->input('description'),
            'image_path'=> $newimagename,
            'user_id'=> auth()->user()->id]
        );

        return redirect('/blog/' . $slug)->with('message','تم التعديل علي الموضوع');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blog.')->with('message','تم حذف الموضوع بنجاح');
    }
}
