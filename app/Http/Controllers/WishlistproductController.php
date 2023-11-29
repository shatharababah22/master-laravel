<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class WishlistproductController extends Controller
{

    
  
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
    
           
            $adminId = session("adminid");
        // dd($adminId);
            if ($adminId) {
                $admin = Admin::find($adminId);
        
               
                    return view('Dashboard.Profile.profile', compact('admin'));
          
    
            }
        }
        
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $dataadmin =Admin::find($id);
            return view('Dashboard.Profile.edit', compact('dataadmin'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,admin $admin)
        {
    
            
         
            
            // dd($request->all());
    
            // if ($image = $request->file('main_picture')) {
            //     $destinationPath = 'images/';
            //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            //     $image->move($destinationPath, $profileImage);
            //     $input['main_picture'] = "$profileImage";
            // }else{
            //     $input['main_picture']= $service->main_picture;
    
            // }
    
           
         
            $input = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
               // Setting category_id to the default value '1'
                'id' => $request->input('id'), // Assuming 'price' is the correct key
            ];
            $admin->update($input);
          
            return redirect()->route('adminprofile.index')
                            ->with('success','Category updated successfully');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
    
    
}
