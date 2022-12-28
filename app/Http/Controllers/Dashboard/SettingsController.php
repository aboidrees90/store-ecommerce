<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use App\Http\Requests\ShippingRequest;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


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

  public function updateShippingMethods(ShippingRequest $request, $id): RedirectResponse
  {

    try {
      $shippingMethod = Setting::find($id);

      DB::beginTransaction();
      $shippingMethod->update(['plain_value' => $request->input('plain_value')]);

      // Save translation
      $shippingMethod->value = $request->input('value');
      $shippingMethod->save();
      DB::commit();

      return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
    } catch (\Exception $ex) {
      DB::rollBack();
      return redirect()->back()->with(['error' => 'فشل عملية التحديث']);
    }
  }
}
