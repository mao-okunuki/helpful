<?php

namespace App\Http\Controllers;

use Request;

use App\Irai;

use App\User;

use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function iraisearch(){
    	
	$query = Request::get('q');

	if ($query) {
		$irais = Irai::where('title', 'LIKE', "%$query%")->paginate(10);
	}else{
		$irais = array();
	}

	return view('irais.search',
	['irais' => $irais,
	]);
    }
}   