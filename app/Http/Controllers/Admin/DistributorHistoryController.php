<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistributorHistory;
use Illuminate\Http\Request;

class DistributorHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.distributorHistory.index');
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
     * @param  \App\Models\Admin\DistributorHistory  $distributorHistory
     * @return \Illuminate\Http\Response
     */
    public function show(DistributorHistory $distributorHistory){
        $content = DistributorHistory::find($distributorHistory);
        print'<pre>';
        print_r($content);
        print'</pre>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\DistributorHistory  $distributorHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(DistributorHistory $distributorHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\DistributorHistory  $distributorHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DistributorHistory $distributorHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\DistributorHistory  $distributorHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(DistributorHistory $distributorHistory)
    {
        //
    }
}
