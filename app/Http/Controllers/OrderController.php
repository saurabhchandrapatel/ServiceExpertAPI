<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
class CategoriesController extends BaseController
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
    public function gelAll() {

        $categories = App/Model/Categories::where('status', 1)->all()->orderby('weight');

        // Bad Request response
        return response()->json($categories , 400);
    }
}