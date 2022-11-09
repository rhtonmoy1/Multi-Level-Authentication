<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // public function index() {
    //     return view('admin.dashboard');
    // }


    public function index()
    {
        $users = DB::table('users')->get();
        return view('admin.dashboard', ['users' => $users]);
    }

    public function status(Request $request, $id)
    {
        $data = User::find($id);
        if($data->status == 0){
             $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();
        return Redirect::to('admin')->with('message', $data->name.' Successfully status changed. ');
    }
}
