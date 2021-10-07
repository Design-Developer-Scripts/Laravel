<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorError;
use Illuminate\Http\Request;

class DistributorErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.distributorError.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DistributorError  $distributorError
     * @return \Illuminate\Http\Response
     */
    public function show(DistributorError $distributorError)
    {
        $content = DistributorError::find($distributorError);
        print'<pre>';
        print_r($content);
        print'</pre>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DistributorError  $distributorError
     * @return \Illuminate\Http\Response
     */
    public function edit(DistributorError $distributorError)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DistributorError  $distributorError
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistributorError $distributorError)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DistributorError  $distributorError
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistributorError $distributorError)
    {
        //
    }
}
