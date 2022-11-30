<?php

namespace App\Http\Controllers;
use App\Models\sweets;
use Illuminate\Http\Request;
use Mail;
use Session;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function save(Request $req)
    {
        $req->validate([
            'name' => 'required|min:10',
            'email' => 'email',
            'mobile' => 'required|numeric|min:10',
            'name' => 'required'
        ]);
        $name=$req->input('name');
        $email=$req->input('email');
        $mobile=$req->input('mobile');
        $message=$req->input('message');
        // return "ok";
        $enquiry = new sweets;
        $enquiry->name =$name ;
        $enquiry->email =$email ;
        $enquiry->mobile =$mobile ;
        $enquiry->message =$message ;
        if ($enquiry->save()) {
            $data = ['name'=>$name, 'email'=>$email, 'mobile'=>$mobile, 'umessage'=>$message];
           $user['to']='soni.dfreeindia@gmail.com';
           Mail::send('mail', $data, function($message) use ($user){
            $message->to($user['to']);
            $message->subject('Enquiry');
            });
            Session::flash('status','alert-success');
            Session::flash('enquiry','Your Query Summited we will contact soon...');
            return redirect('/contact');
           }
           else{
                    Session::flash('status','alert-danger');
                    Session::flash('enquiry','Oh Something went Wrong Please try again');
                    return redirect('/'); 
                 }
    }
    public function about()
    {
        return view('about');
    }
    public function products()
    {
        return view('products');
    }
    public function blog()
    {
        return view('blog');
    }
    public function faq()
    {
        return view('faq');
    }
    public function terms()
    {
        return view('terms');
    }
    public function privacy()
    {
        return view('privacy');
    }
}
