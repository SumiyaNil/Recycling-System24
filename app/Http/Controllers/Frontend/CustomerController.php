<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function register(Request $request)
    {
      //validation
    //  dd($request->all());
      
      $validation = Validator::make($request->all(),[
        'customer_name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed|min:4',
        'mobile_number'=>'required|numeric',
        
        

      ]);
      if($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }
       $otp = rand(100000,999999);
      //Query
      Customer::create([
        'name'=>$request->customer_name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'mobile'=>$request->mobile_number,
        'otp'=>$otp,
        'otp_expired_at'=>now()->addMinutes(3),
        
       
      ]);
      notify()->success('Customer Registration Successful.');

      return redirect()->route('frontend.home');
    }

    public function login(Request $request)
    {
      $validation = Validator::make($request->all(),[

        'email'=>'required|email',
        'password'=>'required|min:4',
      ]);
      if($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }

      $credentials=$request->except('_token');
       
      $check=auth('customerGuard')->attempt($credentials);//attempts only return true or false
      if($check)
      {
        $customer = auth('customerGuard')->user();//in login state
        if($customer->is_email_verified == true)//as customer is not verified then false if verified then true
        {
          notify()->success('login successful');
          return redirect()->route('frontend.home');
        }
        else{
          auth('customerGuard')->logout();
            notify()->error('Account Not verified');
            $email=$customer->email;
            return view('frontend.page.otp',compact('email'));
        }
        
      }
      else{
        notify()->error('login failed');
        return redirect()->route('frontend.home');
      }
    }

   
   
}
