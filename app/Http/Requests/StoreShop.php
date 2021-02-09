<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StoreShop extends FormRequest {

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
            'title' => 'required'
        ];
    }

    public function data()
    {
        $data = [
            'title'                 => $this->get('title'),
            'meta_description'      => $this->get('meta_description'),
            'floor_info_id'         => $this->get('floor_info_id'),
            'type'                  => $this->get('type'),
            'phone'                 => $this->get('phone'),
            'email'                 => $this->get('email'),
            'link'                  => $this->get('link'),
            'content'               => $this->get('content'),
            'shops_image'           => $this->get('image'),
            'is_published'          => $this->get('is_published') ? $this->get('is_published'): 0,
            'is_featured'           => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }

}
