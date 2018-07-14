<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
class ProductController extends BaseController
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
    public function getAll() {


    	//TODO order by distance
	    $Product = Product::where('status', 1)->orderBy('id', 'desc')->get(['id', 'name','info' , 'price']);
	    return response()->json($Product , 200);

    }

	/**
	 * @param $type
	 * @param $id
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function filter($type , $id) {

		//TODO order by distance
		$Product = [];
		switch (strtolower( $type)) {

			case "category":
				$Product = Product::where('cid' ,$id)->where('status' ,1)->orderBy( 'id', 'desc' )->get( [
					'id',
					'name',
					'info',
					'price'
				] );
			default:
				$Product = Product::where( 'status', 1 )->orderBy( 'id', 'desc' )->get( [
					'id',
					'name',
					'info',
					'price'
				] );
		}
		return response()->json($Product , 200);

	}


	/**
	 * @param $id
	 *
	 * @return \Illuminate\Http\JsonResponse
	 */
    public function details($id){

	    $Product = Product::where('cid' ,$id)->where('status' ,1)->orderBy( 'id', 'desc' )->get( [
		    'id',
		    'name',
		    'info',
		    'price'
	    ] );
	    return response()->json($Product , 200);
    }

}