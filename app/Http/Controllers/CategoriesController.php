<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\Models\Categories;

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

        $categories = Categories::where('status', 1)->orderBy('weight', 'desc')->get(['id', 'name','info']);
        return response()->json($categories , 200);
    }
}