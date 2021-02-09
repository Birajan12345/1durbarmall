<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class StorePage extends FormRequest {

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
            'title'   => 'required|max:200',
            'content' => 'required',
            'image'   => 'max:2048'
        ];
    }

    /**
     * @return array
     */
    public function pageFillData()
    {
        $view = ucfirst(substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.')));
        $inputs = [
            'title'            => $this->get('title'),
            'meta_description' => $this->get('meta_description'),
            'content'          => $this->get('content'),
            'url'               => $this->get('url'),
            'view'             => $view,
            'is_published'          => $this->get('is_published') ? $this->get('is_published'): 0,
        ];

        if ($this->has('publish'))
        {
            $inputs['is_published'] = true;
        }

        return $inputs;
    }

}
