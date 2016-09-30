<?php

use App\Users;
use Illuminate\Database\Seeder;

class UsersEntriesSeeds extends Seeder {

	 public function run() {

	 	Users::create(array(
	 		'firstName' => 'Andrejs',
	 		'lastName' => 'Gubars' 
	 	));

		Users::create(array(
	 		'firstName' => 'Arman',
	 		'lastName' => 'Arojan' 
	 	));

		Users::create(array(
	 		'firstName' => 'Evka',
	 		'lastName' => 'Dawidowska' 
	 	));

	 }

}
