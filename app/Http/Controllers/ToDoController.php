<?php

namespace App\Http\Controllers;

use App\ToDo;
use App\Designer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ToDoController extends Controller
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
        $insert = new ToDo();
        $insert->project_no = $request->project_no;
        $insert->project_id = $request->project_id;
        $insert->task_name = $request->task_name;
        $insert->task_short_name = $request->task_short_name;
        $insert->begin = $request->start_date;
        $insert->over = $request->dead_line;
        $insert->save();
        Session::flash('message', 'Data insert successfully');
        return redirect('admin/insert_todo_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDo $toDo)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDo $toDo)
    {
        //
    }

    public function admin_command_designer(Request $request)
    {
        $command = $request->command;
        $affected = DB::table('designers')
            ->where('id', 1)
            ->update(['command_admin' => $command]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/designer');
    }

    public function admin_command_frontend(Request $request)
    {
        $command = $request->command;
        $affected = DB::table('frontends')
            ->where('id', 1)
            ->update(['command_admin' => $command]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/frontend');
    }

    public function admin_command_backend(Request $request)
    {
        $command = $request->command;
        $affected = DB::table('backends')
            ->where('id', 1)
            ->update(['command_admin' => $command]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/backend');
    }

    public function admin_command_team_leader(Request $request)
    {
        $command = $request->command;
        $affected = DB::table('tleaders')
            ->where('id', 1)
            ->update(['command_admin' => $command]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/team_leader');
    }

    public function admin_designer_project_form(Request $request)
    {
        $member_no = $request->member_no;
        $project_id = $request->project_id;
        $task_name = $request->task_name;
        $task_short_name = $request->task_short_name;
        $task_description = $request->task_description;
        $affected = DB::table('designers')
            ->where('id', 1)
            ->update(['member_no' => $member_no, 'project_id' => $project_id, 'task_name' => $task_name, 'task_short_name' => $task_short_name, 'task_description' => $task_description]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/designer');
    }

    public function admin_backend_project_form(Request $request)
    {
        $member_no = $request->member_no;
        $project_id = $request->project_id;
        $task_name = $request->task_name;
        $task_short_name = $request->task_short_name;
        $task_description = $request->task_description;
        $affected = DB::table('backends')
            ->where('id', 1)
            ->update(['member_no' => $member_no, 'project_id' => $project_id, 'task_name' => $task_name, 'task_short_name' => $task_short_name, 'task_description' => $task_description]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/backend');
    }

    public function admin_frontend_project_form(Request $request)
    {
        $member_no = $request->member_no;
        $project_id = $request->project_id;
        $task_name = $request->task_name;
        $task_short_name = $request->task_short_name;
        $task_description = $request->task_description;
        $affected = DB::table('frontends')
            ->where('id', 1)
            ->update(['member_no' => $member_no, 'project_id' => $project_id, 'task_name' => $task_name, 'task_short_name' => $task_short_name, 'task_description' => $task_description]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/frontend');
    }

    public function admin_team_leader_project_form(Request $request)
    {
        $member_no = $request->member_no;
        $project_id = $request->project_id;
        $task_name = $request->task_name;
        $task_short_name = $request->task_short_name;
        $task_description = $request->task_description;
        $affected = DB::table('tleaders')
            ->where('id', 1)
            ->update(['member_no' => $member_no, 'project_id' => $project_id, 'task_name' => $task_name, 'task_short_name' => $task_short_name, 'task_description' => $task_description]);
        Session::flash('message', 'Data update successfully');
        return redirect('admin/team_leader');
    }

    public function finished_projects($id)
    {
        $affected = DB::table('to_dos')
            ->where('id', $id)->delete();
        Session::flash('message', 'Data delete successfully');
        return redirect('admin/home');
    }
}
