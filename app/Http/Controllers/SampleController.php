<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Libs\Common;
use App\Http\Requests\ItemRequest;

class SampleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

 		$pass = Common::makePassword(12);
var_dump(Config::get('define.domain'));
		//$catchcopy = Config::get('app.debug');
		//$catchcopy = Config::get('define.catchcopy');
	  //$submenu_list = Config::get('define.submenu_list');
		//$request = $this->sample(1);
		$first_name = "田中";
    $last_name  = "太郎";
		return view('sample', compact('first_name','last_name','pass'));
	}

	// get ItemRequest
	public function sample(ItemRequest $request)
  {
    return $request;
  }

  public function test()
  {
    return "AOIUE";
  }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
