<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function editShippingMethods($type){
        if($type == 'free'){
            $shipping_method = Setting::where('key', 'free_shipping_label')->first();
        }else if($type == 'inner'){
            $shipping_method = Setting::where('key', 'local_label')->first();
        }else if($type == 'outer'){
            $shipping_method = Setting::where('key', 'outer_label')->first();
        }
       
        return view('dashboard.settings.shippings.edit',compact('shipping_method'));
    }
}
