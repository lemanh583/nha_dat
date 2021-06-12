<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Auth;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LogRegController extends Controller
{
    public function showformLogin(){
        return view('log_reg/login');
    }

    public function submitLogin(Request $request){
        $validated = Validator::make($request->all(),[
            'email' =>  'required|email',
            'password' => 'required'
        ],[
            'email.required' => "Trường này không được bỏ trống",
            'email.email' => "Chưa đúng định dạng email",
            'password.required' => "Trường này không được bỏ trống"
        ]);
            
        if($validated->fails()){
            return redirect()
                    ->back()
                    ->withErrors($validated)
                    ->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt([
            'email'=> $email,
            'password' => $password
        ])){
           
            $user = User::Where('email',$email)->first();
            // dd($user);
            Auth::login($user);
            if($user->id_role == 1){
                return redirect('admin');
            }
            else{
                return redirect('/');
            }
               
        }else{
            return back()->withErrors([
                'error' => "Nhập sai email hoặc mật khẩu"
            ])->withInput();
        }
    }

    public function showformRegister(){
        return view('log_reg/register');
    }

    public function submitRegister(Request $request){

        
        // kiểm tra dữ liệu đầu vào form
        // dd($request->all());

        $validated = Validator::make($request->all(),[
            'name' => 'required|min:5|max:255',
            'email' => 'required|email|unique:App\User,email',
            'password' => "required|min:5|max:255",
            'password_confirm' => "same:password",
            'phoneNumber' => "required|numeric"
        ],[
            'name.required' => 'Không được bỏ trống',
            'name.min' => 'Họ và tên lớn hơn 5 ký tự',
            'email.required' => 'Không được bỏ trống',
            'email.unique' => 'email đã tồn tại',
            'email.email' => 'Chưa đúng định dạng email',
            'password.min' => 'Mật khẩu lớn hơn 5 ký tự',
            'password.required' => 'Không được bỏ trống',
            'password_confirm.same' => 'Mật khẩu chưa chính xác',
            'phoneNumber.require' => "Không được bỏ trống",
            'phoneNumber.numeric' => "Số điện thoại phải là số"
        ]);
            if($validated->fails()){
                return redirect()
                        ->back()
                        ->withErrors($validated)
                        ->withInput();
            }
       
       

        // dd('sdjjsd');
        // Lấy dữ liệu từ request
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phoneNumber = $request->input('phoneNumber');

        // dd($email);

        // chèn dữ liệu vào bảng user

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->phone_number = $phoneNumber;
        $user->images = Storage::url('user_img/anh_mac_dinh.jpg');
        // $user->id_role = 3;
        $user->save();    
        
        Auth::login($user);
        return redirect('/');

    }

    public function logOut(){
        Auth::logout();
        return redirect('/');
    }
    
}
