<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\User;
use Alert;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        $data = User::all();
        return view('admin.showuser')->with('val', $data);
    }

    public function suspend($id)
    {
        $user = User::find($id);
        $user->detachRoles($user->roles);
        $user->attachRole(5);
        Alert::success('Sukses!', 'Berhasil suspend akun');
        return redirect()->route('admin/showuser');
    }

    public function activate($id)
    {
        $user = User::find($id);
        $user->detachRoles($user->roles);
        $user->attachRole(3);
        Alert::success('Activation Success!', 'Berhasil aktifkan akun');
        return redirect()->route('admin/showuser');
    }
}
