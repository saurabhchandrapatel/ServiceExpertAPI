<?php
namespace App\Http\Controllers;
use App\Models\Users;
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
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;

    }

	/**
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function accounts() {

	    $Profile = Users::where('id' , $this->request->auth->id )->where('status' ,1)->orderBy( 'id', 'desc' )->get( [
		    'id',
		    'name',
		    'type',
		    'username',
		    'email',
		    'phonenumber'
	    ] )->first();
	    return response()->json($Profile , 200);
    }

	public function rating() {

    	//TODO
		// Bad Request response
		return response()->json([] , 400);
	}


	public function update(){
        $Users = Users::find($this->request->auth->id);
        $Users->name = 'New Flight Name';
        if( $Users->save()){
            return response()->json([] , 201);
        }else{
            return response()->json([] , 400);
        }
	}

	public function saveAddress(){
		//TODO
		// Bad Request response
		return response()->json([] , 400);
	}

    public function updateAddress(){
        //TODO
        // Bad Request response
        return response()->json([] , 400);
    }


}