<?php namespace App\Http\Controllers;


use Mail;

class HomeController extends Controller {
    
    public function index()
	{ /*
	Mail::send('emails.activate',array('username' =>'Mike'), function($message){
        
            $message->to('mycw1991@gmail.com', 'Mike Wong')-> subject('Test email');
        });
     
        
     */
        
        return view('home');
	

}
}
