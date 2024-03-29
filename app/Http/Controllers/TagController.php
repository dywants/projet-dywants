<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('created_at','DESC')->paginate(20);
       return view('admin.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'name' => 'required|unique:tags,name',
        ]);

        $tag = Tag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
        ]);

        Session::flash('success', 'Tag crée avec success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Tag $tag
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Tag $tag)
    {
        // validation
        $this->validate($request, [
            'name' => "required|unique:tags,name,$tag->name",
        ]);

        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name, '-');
        $tag->description = $request->description;
        $tag->save();

        Session::flash('success', 'Tag Modifié avec success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Tag $tag
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Tag $tag)
    {
        if($tag){
            $tag->delete();
            Session::flash('success', 'Tag supprimé avec success');
        }
        return redirect()->back();
    }
}
