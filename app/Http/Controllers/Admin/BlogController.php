<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Blog\BlogUpdateRequest;
use App\Http\Requests\Blog\BlogStoreRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogStoreRequest $request){
        $validated = $request->validated();


        if(!Blog::where('title','LIKE','%'.trim($validated['title']).'%')->exists()){
            $update['title'] = $validated['title'];
            $update['slug'] = Controller::createUrlString($validated['title']);
            $update['subline'] = $validated['subline'];
            $update['content'] = $validated['content'];

            if(isset($validated['status']) and $validated['status'] == 'on'){
                $update['status'] = true;
            }else{
                $update['status'] = false;
            }

            if(isset($validated['image']) && !empty($validated['image'])){
                $update['image'] = $validated['image'];
            }
            
            $update['created_at'] = date('Y-m-d H:i:s');
            $query = Blog::query();
            
            
            if($query->insert($update)){
                session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gespeichert.');
                session()->flash('flash.bannerStyle', 'success');
            }else{
                session()->flash('flash.banner', 'Fehler beim Speichern des Eintrags.');
                session()->flash('flash.bannerStyle', 'danger');
            }
            return redirect()->route('dashboard.blog.index');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $content = Blog::find($blog)->first();
        return view('admin.blog.show',compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog){
        $content = Blog::find($blog->id);
        return view('admin.blog.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog){
        
        $validated = $request->validated();

        #print'<pre>';
        #print_r($validated);
        #print'</pre>';

        $update['title'] = $validated['title'];
        $update['slug'] = Controller::createUrlString($validated['slug']);
        $update['subline'] = $validated['subline'];
        $update['content'] = $validated['content'];

        if(isset($validated['status']) and $validated['status'] == 'on'){
            $update['status'] = true;
        }else{
            $update['status'] = false;
        }

        if(isset($validated['image']) && !empty($validated['image'])){
            $update['image'] = $validated['image'];
        }

        $update['updated_at'] = date('Y-m-d H:i:s');
        $query = Blog::query();
        $query->find($blog);
        
        
        if($query->update($update)){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gespeichert.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim Speichern des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }


    
}
