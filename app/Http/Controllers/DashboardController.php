<?php

namespace App\Http\Controllers;


use App\Helpers\ColorThemeHelper;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Hash;
class DashboardController extends Controller
{
    public function index()
    {

        $user = User::where('id', auth()->id())
        ->where('status', 1)
        ->first();

        $color = ColorThemeHelper::colors(auth()->id());


        $proj_name = env('APP_NAME');
        $page_name ='Dashboard';
        $return = [
            'title'=> $page_name.' | '.$proj_name,
            'page_name' =>$page_name,
            'page_path' => $proj_name.' / '.$page_name,
        ];
        return view('pages.dashboard.index', compact('color','user','return'));
    }
}
