<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;


class LoginController extends Controller
{
  //
  public function index()
  {
    return view('dashboard.auth.login');
  }

  public function login(AdminLoginRequest $request)
  {

    $remember_me = $request->has('remember_me') ? true : false;
    $credentials = $request->only(['email', 'password']);

    $auth = auth()->guard('admin')->attempt($credentials, $remember_me);
    if ($auth) {            //  notify()->success("تم الدخول بنجاح");
      return redirect()->route('admin.dashboard');
    }

    return redirect()->back()->with(['error' => 'خطأ في بيانات الدخول']);
  }
}
