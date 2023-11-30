<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use App\Models\Cartitem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
  
class GoogleController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToGoogle()
    {
        
        Session::put('previousUrl', URL::previous());
        
        return Socialite::driver('google')->redirect();
    }
          
    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleCallback()
    {
  
        
        try {
            $user = Socialite::driver('google')->user();
         
            $findUser = User::where('google_id', $user->id)->first();
         
            if ($findUser) {
                Auth::login($findUser);
                $sessionCart = session('cart');

                if($sessionCart != null){
                    Cartitem::where('UserID', auth()->user()->id)->delete();
                    foreach ($sessionCart as $item){
                    Cartitem::create([
                    'UserID' => auth()->user()->id,
                    'ProductID' => $item['id'],
                    'Quantity' => $item['quantity'],
                ]);
                }
                }

                return redirect()->intended('dashboard');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'email' => $user->email,
                ]);

                $sessionCart = session('cart');

        if($sessionCart != null){
            Cartitem::where('UserID', auth()->user()->id)->delete();
            foreach ($sessionCart as $item){
            Cartitem::create([
            'UserID' => auth()->user()->id,
            'ProductID' => $item['id'],
            'Quantity' => $item['quantity'],
        ]);
        }
        }



                Auth::login($newUser);
                
                $previousUrl = Session::pull('previousUrl', 'dashboard');
                return redirect()->intended($previousUrl);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
