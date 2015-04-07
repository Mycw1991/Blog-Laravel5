<?php namespace App\Http\Controllers;

use Validator;
use Input;
use Redirect;
use App\User;
use Hash;
use Mail;
use URL;




class AccountController extends Controller{
    // viewing form//
    public function getCreate(){
      return view('account.create');
    }
    //submiting form//
    public function postCreate(){
        $validator = Validator::make(Input::all(),
            [
                'email'               => 'required|max:50|email|unique:users',
                'username'            => 'required|alpha_dash|max:20|min:3|unique:users',
                'password'            => 'required|min:6',
                'password_again'      => 'required|same:password'
            ]);
        
        if($validator->fails()){
            return Redirect::route('account-create')
                    ->withErrors($validator)
                    ->withInput();
        } else{
            
            $email= Input::get('email');
            $username= Input::get('username');
            $password= Input::get('password');
     
            // activation code//
           $code = str_random(60);
            
            $user = User::create(array(
                'email'=> $email,
                'username'=> $username,
                'password'=> Hash::make($password),
                'code' => $code,
                'active' => 0
            ));
            
            if($user){
                
                //send email and use the username and link variable in the activate.blade.php view. // 
                Mail::send('emails.activate', [
                    'link' => URL::Route('account-activate', $code),
                    'username' => $username],
                function($message) use ($user) {
                    $message->to($user->email, $user->username)->subject('Activate your account');
                        }); 
                return Redirect::route('home')->with('global', 'Your Account has been created! We have sent you an email to activate your account');
                    // global gets checked and outputed in the header.blade.php template//
                } 
        }
    }
    
    public function getActivate($code){
        // where clause if the field name of db matches the code in the url
       $user = User::where('code', '=', $code)->where('active', '=', 0);
       
       // pick up the firsst user found instead of everything
       if($user->count()) {
           $user = $user->first();
           
           //update user to active state and empty code
           $user->active = 1;
           $user->code = '';
           
           if($user->save()){
           return Redirect::route('home')
                   ->with('global', 'Activated! You can now sign in!');
           }
       }
       
       return Redirect::route('home')
               ->with('global', 'We could not activate your Account. Please try again or contact us');
    }
}
