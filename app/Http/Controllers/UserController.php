<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
class UserController extends BaseController
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    private $request;
    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request) {
        $this->request = $request;

    }

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function profile() {

	    //TODO
	    // Bad Request response
	    return response()->json([] , 400);
    }

	public function rating() {

    	//TODO
		// Bad Request response
		return response()->json([] , 400);
	}


	public function update(){
		//TODO
		// Bad Request response
		return response()->json([] , 400);
	}

	public function saveAddress(){
		//TODO
		// Bad Request response
		return response()->json([] , 400);
	}


}