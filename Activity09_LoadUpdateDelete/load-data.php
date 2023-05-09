<?php

require "config.php";

use App\Pets;


try {
	Pets::register('Maxy', 'Female', '2003-12-25', ' Lance Dabu', 'd.lance@auf.edu.ph', 'San lubao Pampanga', '09192979729');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'pet_name' => 'Nato',
			'pet_gender' => 'Male',
			'pet_birthdate' => '2002-05-08',
			'pet_owner' => 'Cris Dabu',
			'email' => 'dabu.lance@auf.edu.ph',
			'address' => 'San Jose Guagua Pampanga',
			'contact_number' => '09437051289',
			
		],
		[
			'pet_name' => 'Macky',
			'pet_gender' => 'Male',
			'pet_birthdate' => '2003-12-01',
			'pet_owner' => 'Tristan Dabu',
			'email' => 'dabu@auf.edu.ph',
			'address' => 'San Juan Lubao Pampanga',
			'contact_number' => '0987654321',
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}