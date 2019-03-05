<?php

namespace App\Http\Controllers;

use App\Room;
use App\Main;
use App\Dessert;
use App\Drink;
use App\Photo;

class PagesController extends Controller {

	// public function index(){
	// 	$rooms = Room::all();
	// 	return view('rooms', compact('rooms'));
	// }
		
	

	public function drink(){
		$rooms = Room::all();
		$menus = Main::all();
		$drinks = Drink::all();
		$desserts = Dessert::all();
		$photos = Photo::all();
		return view('welcome', compact('drinks','desserts','menus','rooms','photos'));
	}
}