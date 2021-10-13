<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function login_form()
    {
        return view('admin.login_form');
    }


    public function login(AdminRequest $request)
    {
        $admin = Admin::first();

        if ($admin->email == $request->email && Hash::check($request->password, $admin->password)) {
            // $projects = DB::table('projects')->get();
            session()->put('admin', 'admin');
            return redirect()->route('admin.create');
        }

        return redirect()->route('admin.login_form');
    }

}
