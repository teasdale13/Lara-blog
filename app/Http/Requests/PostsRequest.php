<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class PostsRequest that validate all the request send by the user to make sure
 * all the rules are meet.
 * @author Kevin Teasdale-Dubé
 * @package App\Http\Requests
 */
class PostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'title'         => 'required|max:100|min:10',
            'body'          => 'required|min:25',
            'category_id'   => 'required|int'
        ];
    }
}
