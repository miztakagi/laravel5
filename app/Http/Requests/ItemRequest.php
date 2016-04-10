<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ItemRequest extends Request {

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
			'id' => 'required',
			'title' => 'required|unique:posts|max:255',
			'author' => 'required|unique:posts|max:255',
      'cover' => 'unique:posts|max:255',
      'price' => 'required|max:5',
      'category' => 'required|max:3',
      'code' => 'required|max:255',
      'code1' => 'unique:posts|max:255',
      'code2' => 'unique:posts|max:255',
      'c_date' => '',
      'm_date' => '',
      'status' => 'required|max:3',
		];
	}

}
