<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title'     => 'required|min:2|max:60|unique:Game,gme_title',
            'developer' => 'required|min:1|max:15',
            'console'   => 'required|min:1|max:15',
            'price'     => 'required|numeric|',
            'rating'    => 'required|min:1|max:2',
            'comments'  => 'max:255'
		];
	}

}
