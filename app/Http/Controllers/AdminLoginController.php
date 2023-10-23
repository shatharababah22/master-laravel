<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
// use App\Models\User;
// use App\Models\Volnteer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
// use Illuminate\Support\Facades\DB;

class AdminLoginController extends Controller
{
    
    public function showLoginForm()
    {
       if (session()->has("adminid")) {
        $admin = Admin::all();
        $products=Product::all();
        $users = User::all();


             
        view()->share([
            'admin' => $admin,
            'products' => $products,
            'users' =>  $users,
         
        ]);
    
        return view('Dashboard.Home');

  
        
        

       }else{
        return view("Admin_login.login");
       }
    }


    // Handle the login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                Password::min(8)->mixedCase()->numbers()->symbols(),
            ], // Adjust the password requirements as needed.
        ]);
        $admin = Admin::where('email', $request->email)->first();
    

        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('adminid', $admin->id);
            
                return redirect('/dash');
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }
        

        //   $admin = Admin::where('Email', $request->Email)->first();
      
  
        //   if ($admin) {
        //       if (Hash::check($request->Password, $admin->Password)) {
        //           $request->session()->put('adminid', $admin->id);
              
        //           return view('Dashboard.Home');
        //       } else {
        //           return back()->with('fail', 'Password does not match');
        //       }
        //   } else {
        //       return back()->with('fail', 'This email is not registered');
        //   }
  
     
  

        public function logout()
        {
           session()->pull("adminid");
    
            return redirect('/dash'); // You can customize the redirection
        }
    
    // Add a logout action if needed
    //   public function logout()
    //   {
    //      session()->pull("adminid");
  
    //       return redirect('/dash'); // You can customize the redirection
    //   }
}
