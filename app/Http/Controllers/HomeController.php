<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        if (Auth::user()->name == "Designer") {
            $designers = DB::select('select * from designers');
            return view('Designer.designer', ['designers' => $designers]);
        } else if (Auth::user()->name == "Frontend") {
            $frontends = DB::select('select * from frontends');
            return view('Frontend.frontend', ['frontends' => $frontends]);
        } else if (Auth::user()->name == "Backend") {
            $backends = DB::select('select * from backends');
            return view('Backend.backend', ['backends' => $backends]);
        } else if (Auth::user()->name == "Team Leader") {
            $tleaders = DB::select('select * from tleaders');
            return view('Leader.leader', ['tleaders' => $tleaders]);
        }
        // $users = DB::select('select * from designers');
        // return view(
        //     'home',
        //     ['users' => $users]
        // );
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()

    {
        $todos = DB::select('select * from to_dos');
        return view('Admin.adminHome', ['todos' => $todos]);
    }

    public function admin_insert_todo_list()

    {

        return view('Admin.insert');
    }

    public function admin_designer()
    {
        $designers = DB::select('select * from designers');
        return view('Admin.designer', ['designers' => $designers]);
    }

    public function admin_frontend()
    {
        $frontends = DB::select('select * from frontends');
        return view('Admin.frontend', ['frontends' => $frontends]);
    }

    public function admin_backend()
    {
        $backends = DB::select('select * from backends');
        return view('Admin.backend', ['backends' => $backends]);
    }

    public function team_leader()
    {
        $tleaders = DB::select('select * from tleaders');
        return view('Admin.team_leader', ['tleaders' => $tleaders]);
    }
}
