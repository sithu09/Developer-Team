<?php

namespace App\Http\Controllers;

use App\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $status = $request->status;
        $affected = DB::table('frontends')
            ->where('id', 1)
            ->update(['task_member_status' => $status]);
        Session::flash('message', 'Data update successfully');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontend $frontend)
    {
        //
    }

    public function backend()
    {
        $backends = DB::select('select * from backends');
        return view('Frontend.backend', ['backends' => $backends]);
    }

    public function designer()
    {
        $designers = DB::select('select * from designers');
        return view('Frontend.designer', ['designers' => $designers]);
    }

    public function team_leader()
    {
        $tleaders = DB::select('select * from tleaders');
        return view('Frontend.team_leader', ['tleaders' => $tleaders]);
    }
}
