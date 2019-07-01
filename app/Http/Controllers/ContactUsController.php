<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('/#contact');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $attributes =request()-> validate([
            'name' => 'required',
            'organization' => 'required',
            'position' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Mail::send('email.contact',
            array(
                'name' => $attributes['name'],
                'organization' => $attributes['organization'],
                'position' => $attributes['position'] ,
                'email' => $attributes['email'],
                'phone' => $attributes['phone'],
                'user_message' => $attributes['message'],
            ), function($message)
            {
                $message->from(env('SEND_EMAIL'));
                $message->to(env('ADMIN_EMAIL'))->subject('EDSime Contact');
            });
        return redirect('/#contact')->with('success', 'Thanks for contacting us! We will get to you soon.');
    }
}
