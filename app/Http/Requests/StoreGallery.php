<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StoreGallery extends FormRequest {

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
            'name' => 'required'
        ];
    }

    public function data()
    {
        $data = [
//            'user_id'               => auth()->id(),
            'name'                  => $this->get('name'),
            'meta_description'      => $this->get('meta_description'),
            'view'                  => $this->get('view'),
            'type'                  => $this->get('type'),
            'is_published'       => $this->get('is_published') ? $this->get('is_published'): 0,
//            'is_featured'       => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }

}
