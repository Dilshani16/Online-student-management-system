<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Hash;
use Session;

class StaffController extends Controller
{
    public function regstaff(){
        return view('staff.regstaff');
    }

    public function store(request  $request){

        $request -> validate([
            'first_name' => 'required|String|max:50',
            'last_name' => 'required|String|max:50',
            'email'=>'required|string|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/',
            'contact_no' => 'nullable|string|max:10|min:10',
            'address' => 'required|string',
            'dob' => 'required|date',
            'username' => 'required|max:15',
            'password' => 'required|string|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
        ]);

        $staff = new Staff();
        $staff->first_name = $request->first_name;
        $staff->last_name = $request->last_name;
        $staff->email = $request->email;
        $staff->contact_no = $request->contact_no;
        $staff->position = $request->position;
        $staff->address = $request->address;
        $staff->dob = $request->dob;
        $staff->username = $request->username;
        $staff->password = $request->password;
        // $staff->password = Hash::make($request->password);
        $staff->image = $request->image;
        $staff->save();

        return redirect()->route('dashboard');
    }

    public function staff(){
       
        $staff = Staff::where('position', '!=', 'Student')->get();
        return view('user.staff', compact('staff'));
    }

    public function login(){
        return view('login');
    }

    public function login_user(request  $request){
        $request -> validate([
            'username' => 'required|max:15',
            'password' => 'required|string|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
        ]);

        $user = Staff::where('username','=',$request->username)->first();
        if($user){
            if($request->password === $user->password){
                $request->session()->put('loginId', $user->id);

                if($user->position ==='Student'){
                    return redirect()->route('user.dashboardU');
                }else{
                    return redirect()->route('dashboard');
                }


            }else{
                return back()->with('fail','Invalid Password');
            }

        }else{
            return back()->with('fail','Invalid Username.');
        }
    }


    public function logout()
{
    // Check if the session contains the loginId
    if (Session::has('loginId')) {
        // Remove the session key
        Session::forget('loginId');

        // Regenerate the session to clear all data and prevent session fixation
        Session::flush();

        // Redirect to the 'student.home' route
        return redirect()->route('student.home');
    }

    // If no session exists, still redirect to 'student.home'
    return redirect()->route('student.home');
}



    // public function logout(){
    //     if(Session::has('loginId')){
    //         Session::pull('loginId');
    //         // return redirect('login');
    //         return redirect()->route('student.home');
    //     }
    // }

    public function profile(){

        $user = Session::has('loginId') ? Staff::where('id', Session::get('loginId'))->first() : null;

        if ($user) {
            return view('profile',compact('user'));
        } else {
            return redirect('login')->with('fail', 'You must log in first.');
        }
    }



    public function editDeatail($id){
        $user = Staff::where('id',$id)->first();

        if(!$user){
            return redirect()->route('profile')->with('error','User not found.');
        }
        return view('staff.editDeatail', compact('user'));
    }


    public function updateDeatail(request $request, $user_id){

        $request -> validate([
            'first_name' => 'required|String|max:50',
            'last_name' => 'required|String|max:50',
            'email'=>'required|string|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/',
            'contact_no' => 'nullable|string|max:10|min:10',
            'address' => 'required|string',
            'dob' => 'required|date',
            'username' => 'required|max:15',

        ]);

        $user = Staff::where('id',$user_id)->first();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->contact_no = $request->contact_no;
        $user->position = $request->position;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->username = $request->username;

        $user->save();

        return redirect()->route('profile');

    }

    public function update_photo(Request $request)
    {

        // $user = Staff::where('id',$id)->first();

        if($request->hasFile('image')){
            $file = $request->input('image');
            $extention = $file->getClientOriginalExtension();
            $filename->time.'.'.$extention;
            $file->move('/profile',$filename);
            $user->image = $filename;
        }

        $user->save();



        // if ($request->hasFile('image')) {
        //     $filename = time() . $request->file('image')->getClientOriginalName();
        //     $path = $request->file('image')->storeAs('images', $filename, 'public');
        //     $user['image'] = '/storage/' . $path;
        // }

        // Staff::create($user);

        return redirect()->route('dashboard')->with('success', 'Photo updated successfully!');
    }


    public function password($id){

        $user = Staff::where('id',$id)->first();

        if(!$user){
            return redirect()->route('profile')->with('error','User not found.');
        }

        return view('staff.password', compact('user'));
    }

    public function updatePassword(request $request, $user_id){

        $request -> validate([
            'password' => 'required|string|min:5|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*?&#]/',
        ]);

        $user = Staff::where('id',$user_id)->first();

        $user->password = $request->password;
        $user->save();

        return redirect()->route('profile');
    }



    public function delete($user_id){
        Staff::where('id',$user_id)->delete();
        return redirect()->route('student.home');
    }


    //user view-----------------------------

    public function search(request $request){
        $search = $request->input('search');

        $staff = Staff::where('first_name', 'LIKE', "%$search%")
                       ->orwhere('last_name', 'LIKE', "%$search%")
                       ->orWhere('position', 'LIKE', "%$search%")
                       ->get();

        return view('user.staff', compact('staff'));
    }

}
