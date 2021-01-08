<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Auth;
use Exception;
use App\User;
use App\Tbl_color_theme;
use App\Tbl_logo;
class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        
        // try {
             
            //get the driver and set desired fields
            $driver = Socialite::driver('facebook')
                            ->fields([
                                'name', 
                                'first_name', 
                                'last_name', 
                                'email', 
                                'gender', 
                                'verified'
                            ])->stateless();

            // retrieve the user
            $user = $driver->user();
            $finduser = User::where('facebook_id', $user->id)->first();
                                
            if($finduser){

                User::where('facebook_id', $user->id)->update([
                    'profile_pic' => $user->avatar,
                ]);

                Auth::login($finduser);
                if(auth()->user()->tbl_role_id == 1) {
                    return redirect('/super-admin-dashboard');
                }else if(auth()->user()->tbl_role_id == 2) {
                    return redirect('/admin-dashboard');
                }else {
                    return redirect('/dashboard');
                }

            }else{
                
                $findemail = User::where('email', $user->email)->get();
                
                if(count($findemail) <=0 ){
                    $nrRand = rand(1000, 10000);
                    $newUser = User::create([
                        'first_name'     => $user->user['first_name'],
                        'last_name'      => $user->user['last_name'],
                        'profile_pic'    => $user->avatar,
                        'email'          => $user->email,
                        'email_verified_at'=>date('Y-m-d H:i:s'),
                        'username'       => strtolower($user->user['first_name']).strtolower($user->user['last_name']).$nrRand,
                        'password'       => Hash::make('123456dummy'),
                        'status'         => 1,
                        'facebook_id'    => $user->id,
                        'tbl_role_id'    => 3,
                    ]);
        
                    Auth::login($newUser);

                    
                    Tbl_color_theme::create([
                        'user_id' =>auth()->id(),
                    ]);

                    Tbl_logo::create([
                        'user_id' =>auth()->id(),
                    ]);

                    return redirect('/home');
                }
                else {
                    return redirect('/login')->with(['error'=> 'Your Email is already in our records.']);
                }
                
            }
    
        // } catch (Exception $e) {
        //     $e->getMessage();
        // }
    }
}
