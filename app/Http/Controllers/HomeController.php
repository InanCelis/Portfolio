<?php

namespace App\Http\Controllers;

use App\Helpers\ColorThemeHelper;
use App\Tbl_province;
use App\Tbl_municipality;
use App\Tbl_barangay;
use App\User;
use Illuminate\Http\Request;
use Validator;


class HomeController extends Controller
{
   
    public function index($email)
    {
        
        // $brgy_id = 36436;

        // $address = Tbl_barangay::where('id' , $brgy_id)->get();
        
        // foreach($address as $add) {
        //     $brgy = $add->barangay_description;
        //     $mun  = $add->tbl_municipality->municipality_description;
        //     $prov = $add->tbl_municipality->tbl_province->province_description;

        //     dd($brgy.' '.$mun.', '.$prov);

        // }
        $user = User::where('username', $email)
        ->where('live', 0)
        ->where('status', 1)
        ->first();
        
        if($user) {

            $color = ColorThemeHelper::colors($user->id);

            $return = [
                'title'=> $user->first_name.' '.$user->last_name,
            ];

            return view('pages.home.index', compact('color','user','return'));
        } else {
            abort(404);
        }
        
    }

    public function sindexs()
    {
        $user = User::where('id', auth()->id())
        ->where('status', 1)
        ->first();

        $color = ColorThemeHelper::colors(auth()->id());

        $return = [
            'title'=> 'Home | '.$user->first_name.' '.$user->last_name,
        ];
        return view('pages.home.index', compact('color','user','return'));
    }

    //darkmode and lightmode function
    public function toggletheme(Request $request)
    {
        if($request->ajax()) {
            if (session()->has('darkmode')) {
                session()->put('darkmode', !session('darkmode'));
            }
            else {
                //provide an initial value of isDark
                session()->put('darkmode', true);
            }
            return response()->json(['success' => '']);
        }
        else {
            abort(404);
        }
        
    }

    public function sendmessage()
    {
         return response()->json(['error' => 'Access Denied']);
    }
}
