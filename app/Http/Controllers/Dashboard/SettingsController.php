<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


class SettingsController extends Controller
{
  //

  public function editShippingMethods($type): View
  {
    $title = "free shipping";

    if (in_array($type, ['free', 'local', 'outer'])) {
      $shippingMethod = Setting::where('key', "{$type}_shipping_label")->first();
      $title = "{$type} shipping";
    } else {
      $shippingMethod = Setting::where('key', "free_shipping_label")->first();
    }


    return view('dashboard.settings.shipping.edit', compact('shippingMethod', 'title'));
  }

  public function updateShippingMethods(Request $request, $id)
  {

    return $request;
  }
}
