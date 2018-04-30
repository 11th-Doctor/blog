<?php

	namespace App\Http\Controllers;

	class PagesController extends Controller {
		public function getIndex() {
			return view('pages.welcome'); //gapes/welcome
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
