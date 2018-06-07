<?php

	namespace App\Http\Controllers;

	use App\post;

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
	}
