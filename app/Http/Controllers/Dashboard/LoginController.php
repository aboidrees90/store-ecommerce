<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller
{
  //
  public function index(): Factory|View|Application
  {
    return view('dashboard.auth.login');
  }

  public function login(AdminLoginRequest $request): RedirectResponse
  {

    $credentials = $request->only(['email', 'password']);

    $auth = auth()->guard('admin')->attempt($credentials, $request->has('remember_me'));

    if ($auth) {
      //  notify()->success("تم الدخول بنجاح");
      return redirect()->route('admin.dashboard');
    }

    return redirect()->back()->with(['error' => 'خطأ في بيانات الدخول']);
  }


  public function logout()
  {
    $guard = $this->getGuard();
    $guard->logout();


    return redirect()->route('admin.login');
  }

  protected function getGuard(): Guard|StatefulGuard|Application|Factory
  {
    return auth('admin');
  }
}
