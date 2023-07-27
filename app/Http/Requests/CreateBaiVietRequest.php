<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBaiVietRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tieu_de'       => 'required',
            'mo_ta_ngan'    => 'required',
            'noi_dung'      => 'required',
            'hinh_anh'      => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tieu_de'       => 'Tiêu đề không được để trống !',
            'mo_ta_ngan'    => 'Mô tả ngắn không được để trống !',
            'noi_dung'      => 'Nội dung không được để trống !',
            'hinh_anh'      => 'Hình ảnh chưa được chọn !'
        ];
    }
}
