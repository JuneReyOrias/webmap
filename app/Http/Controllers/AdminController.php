<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Exception;
class AdminController extends Controller
{
    public function adminDashb(){
        return view('admin.index');
    }//end method

        public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }//end 
    public function AdminLogin(){
         return view('admin.admin_login');
    }//end

    public function AdminProfile(){
        $id =Auth::user()->id;
        $profileData = User:: find($id);
        return view('admin.admin_profile', compact('profileData'));
    }
    public function update(Request $request){
        
        $id =Auth::user()->id;
        $data= User:: find($id);
        $data->name= $request->name;
        $data->email= $request->email;
        $data->agri_district= $request->agri_district;
        $data->password= $request->password;
        $data->role= $request->role;
        if ($request->file('photo')){
            $file =$request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
             $file->move(public_path('upload/'),$filename);
             $data['photo']=$filename;
        }
    
         
         
       $data->save();
        return redirect('admin.dashb')->back();
    }//end
    // public function Update(Request $request)
    // {
    //     try {
    //         $id = Auth::user()->id;
    //         $data = User::find($id);

    //         // Update only if the user exists
    //         if ($data) {
    //             $data->name = $request->input('name');
    //             $data->email = $request->input('email');
    //             $data->agri_district = $request->input('agri_district');
    //             $data->password = bcrypt($request->input('password')); // Ensure to hash the password
    //             $data->role = $request->input('role');

    //             if ($request->hasFile('photo')) {
    //                 $file = $request->file('photo');
    //                 $filename = date('YmdHi') . $file->getClientOriginalName();
    //                 $file->move(public_path('upload/admin_images'), $filename);
    //                 $data->photo = $filename;
    //             }

    //             $data->save();

    //             return redirect('admin.dashb')->with('success', 'Profile updated successfully.');
    //         }

    //         // Handle the case where the user does not exist
    //         return redirect('admin.profile')->with('error', 'User not found.');
    //     } catch (Exception $e) {
    //         // Log the exception or handle it as needed
    //         return redirect('admin.profile')->with('error', 'An error occurred: ' . $e->getMessage());
    //     }
    // }
//     public function AdminProfileStore(Request $request)
// {
//     $id = Auth::user()->id;
//     $data = User::find($id);
// dd($data->save('user'));
//     // Update only if the user exists
//     if ($data) {
//         $data->name = $request->input('name');
//         $data->email = $request->input('email');
//         $data->agri_district = $request->input('agri_district');
//         $data->password = bcrypt($request->input('password')); // Ensure to hash the password
//         $data->role = $request->input('role');

//         if ($request->hasFile('photo')) {
//             $file = $request->file('photo');
//             $filename = date('YmdHi') . $file->getClientOriginalName();
//             $file->move(public_path('upload/admin_images'), $filename);
//             $data->photo = $filename;
//         }

//         $data->save();

//         return redirect('admin.admin_profile')->with('success', 'Profile updated successfully.');
//     

//     // Handle the case where the user does not exist
//     // return redirect('admin.admin_profile')->with('error', 'User not found.');

}

