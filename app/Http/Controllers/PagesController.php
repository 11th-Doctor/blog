<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Session;
use Mail;

class PagesController extends Controller {
	public function getIndex() {
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();

		// return view('pages.welcome')->withPosts($posts); //gapes/welcome
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout() {

		$name = 'Daryl';
		$email = 'august9382@gmail.com';
		$data = [];
			$data['name'] = $name;
			$data['email'] = $email;
			//with('data',$data);
		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {
		$this->validate($request, array(
			'email' => 'required|email',
			'subject' => 'min:3',
			'message' => 'min:3'
		));

		//Every single key becomes a variable such as $emai $subject $bodyMessage
		$data = array(
			'email' =>  $request->email,
			'subject' => $request->subject,
			'bodyMessage' => $request->message
		);

		Mail::send('emails.contact', $data, function($message) use ($data){
			$message->from($data['email']);
			$message->to('august9382@gmail.com');
			$message->subject($data['subject']);

		});

		Session::flash('success', '您的訊息已經成功寄出!');

		return redirect('/');
	}
}
