<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
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
      
      
    
        return view('Dashboard.Home');

    }






      // Handle the login request

      public function login()
      {

        return view('Admin_login.login');
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
  
     
  

      public function check(Request $request)
    {
       
  $request->validate([
              'Email' => 'required|email',
              'Password' => [
                  'required',
                  Password::min(8)->mixedCase()->numbers()->symbols(),
              ], // Adjust the password requirements as needed.
          ]);
        $check = $request->all();
        
   
        
        $check = $request->only(['Email', 'Password']); // Assuming 'Email' and 'Password' are form field names.
        
        // Hash the password.
        $hashedPassword = Hash::make($check['Password']);
        
        if (Auth::guard('admin')->attempt(['Email' => $check['Email'], 'Password' => $hashedPassword])) {
            // Authentication successful
            return redirect()->route('admin.lolo');
        } else {
            // Authentication failed
            return redirect()->back()->with('error', 'Your credentials are invalid');
        }
        
       
    }
    
    // Add a logout action if needed
    //   public function logout()
    //   {
    //      session()->pull("adminid");
  
    //       return redirect('/dash'); // You can customize the redirection
    //   }
}
