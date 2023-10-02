<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('Dashboard.Testimonial.testimonial', compact('testimonials')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('Dashboard.Testimonial.Create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($image = $request->file('Image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['Image'] = "$profileImage";
        }

//       $testimonial = new Testimonial;
// $testimonial->Name = $request->input('Name');
// $testimonial->comments = $request->input('comments');
// $testimonial->Major = $request->input('Major');
// $testimonial->UserID = $request->input('UserID'); // Assign the user's ID from the form
// $testimonial->save();

Testimonial::create($input);
        return redirect()->route('test.index')
                        ->with('success','Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $test)
    {
        return view('Dashboard.Testimonial.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $test)
    {
        $input = $request->all();

        if ($Image = $request->file('Image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $Image->getClientOriginalExtension();
            $Image->move($destinationPath, $profileImage);
            $input['Image'] = "$profileImage";
        }else{   
            $input['Image']= $test->Image;
        }

        $test->update($input);

        return redirect()->route('test.index')
                        ->with('success','testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Testimonial::destroy($id);
     
        return redirect()->route('test.index')->with(['deleted' => 'Deleted successfully']);
    }
}
