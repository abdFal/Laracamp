<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function dashboard()
    {
        switch (Auth::user()->is_admin) {
            case true:
                # code...
                return redirect(route('admin.dashboard'));
            
            default:
                # code...
                return redirect(route('user.dashboard'));
        }
    }
}
