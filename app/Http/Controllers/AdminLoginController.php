<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Recycling;
use App\Models\Order;
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
            $products = Product::all()->count();
            $users = User::all()->count();
            $allorders = Order::all()->count();
            $recycler = DB::table('users')
                ->join('recyclings', 'users.id', '=', 'recyclings.UserID')
                ->select('users.id')
                ->distinct()
                ->count();
            $orders = Order::join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
                ->join('orderitems', 'orders.id', '=', 'orderitems.OrderID')
                ->join('users', 'users.id', '=', 'orders.UserID')
                ->select(
                    'orders.id',
                    'orders.OrderDate',
                    'orders.TotalAmount',
                    'paymentmethods.PaymentType as PaymentType',
                    'users.email',
                    DB::raw('COUNT(orderitems.id) as items_count')
                )
                ->groupBy('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType', 'users.email')
                ->get();

                $todos = session('todos', []);


            view()->share([
                'todos' => $todos,
                'admin' => $admin,
                'products' => $products,
                'users' =>  $users,
                'orders' =>  $orders,
                'allorders' =>  $allorders,
                'recycler' =>  $recycler,

            ]);

            return view('Dashboard.Home');
        } else {
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

    
    public function store(Request $request)
    {
        // Check if the 'todos' session key exists and initialize it if not
        if (!session()->has('todos')) {
            session(['todos' => []]);
        }
    
        // Add the new task to the 'todos' session array
        $todos = session('todos');
        $todos[] = $request->input('todo1');
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }
    
    
    public function destroy($todo)
    {
        // Retrieve tasks from the session
        $todos = session('todos', []);
    
        // Check if the task exists in the array and remove it
        if (($key = array_search($todo, $todos)) !== false) {
            unset($todos[$key]);
        }
    
        // Store the updated tasks back in the session
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }

}
