<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request){

        $validated = $request->validated();
        
        $update['name'] = trim($validated['name']);
        $update['email'] = trim($validated['email']);

        if(isset($validated['status']) and $validated['status'] == 'on'){
            $update['status'] = true;
        }else{
            $update['status'] = false;
        }
       
        $update['password'] = Hash::make($validated['password']);

        $update['created_at'] = date('Y-m-d H:i:s');
        $query = User::query();

        if($query->insert($update)){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich gespeichert.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim Speichern des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard.user.index');
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
    public function edit(int $id){
        $content = User::find($id);
        return view('admin.user.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, int $id){

        $validated = $request->validated();

        $update['name'] = trim($validated['name']);
        $update['email'] = trim($validated['email']);

        if(isset($validated['status']) and $validated['status'] == 'on'){
            $update['status'] = true;
        }else{
            $update['status'] = false;
        }

        if(isset($validated['password']) and !empty($validated['password'])){
            $update['password'] = Hash::make($validated['password']);
        }
        $update['updated_at'] = date('Y-m-d H:i:s');
        $query = User::query();
        $query->where('id',$id);

        if($query->update($update)){
            session()->flash('flash.banner', 'Eintrag wurde Erfolgreich aktualisiert.');
            session()->flash('flash.bannerStyle', 'success');
        }else{
            session()->flash('flash.banner', 'Fehler beim aktualisieren des Eintrags.');
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('dashboard.user.index');
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
    }
}
