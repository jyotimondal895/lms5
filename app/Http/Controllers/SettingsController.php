<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
   protected $adminId;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->adminId = session('adm');

            return $next($request);
        });
    }
    public function settings()
    {
        $userdata = Admin::find($this->adminId);
       
        return view('admin.settings', compact('userdata'));
    }
    public function edit()
    {
        $userdata = Admin::find($this->adminId);

        if (!$userdata) {
            return redirect('/admin/login')
                ->with('error', 'Admin not found.');
        }

        return view('admin.updates', compact('userdata'));
    }

public function updates(Request $request)
    {
        $admin = Admin::find($this->adminId);
        

        if (!$admin) {
            return redirect('/admin/login')
                ->with('error', 'Admin not found.');
        }
    
     $request->validate([
            'adminid' => 'required|string|max:255',
            'current_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
       
        $admin->adminid=$request->adminid;
        $admin->password=$request->password;
        // Update Admin ID
        

        $admin->save();

        return redirect('/admin/settings')
            ->with('success', 'Settings updated successfully!');
    }
}



