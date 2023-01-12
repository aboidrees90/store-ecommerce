<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  function index()
  {

  }

  public function edit(): Factory|View|Application
  {
    $admin = Admin::find(auth('admin')->user()->getAuthIdentifier());
    return view("dashboard.profile.edit", compact("admin"));
  }

  public function update()
  {
  }

}
