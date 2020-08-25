<?php

namespace App\Http\Controllers;

use App\Designer;
use App\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frontends = DB::select('select * from frontends');
        return view('Designer.frontend', ['frontends' => $frontends]);
    }

    public function backend()
    {
        $backends = DB::select('select * from backends');
        return view('Designer.backend', ['backends' => $backends]);
    }
    
     public function team_leader()
    {
        $tleaders = DB::select('select * from tleaders');
        return view('Designer.team_leader', ['tleaders' => $tleaders]);
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
        $affected = DB::table('designers')
            ->where('id', 1)
            ->update(['task_member_status' => $status]);
        Session::flash('message', 'Data update successfully');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function show(Designer $designer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function edit(Designer $designer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Designer $designer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designer  $designer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designer $designer)
    {
        //
    }
}
