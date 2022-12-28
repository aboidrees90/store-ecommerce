<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
          'id'=> "required|exists:settings",
          'value' =>"required",
          "plain_value"=>"nullable|numeric"
        ];
    }

//    public function messages(): array
//    {
//     return [
//       'id.required' => "يرجى التواصل مع الدعم الفني",
//       'id.exits' => "يرجى التواصل مع الدعم الفني",
//        'value.required' => "يرجى كتابة اسم طرقية الشحن",
//       'plain_value.required' => "يرجى تحديد قيمة تكلفة الشحن",
//       'plain_value.nullable' => "يرجى التواصل مع الدعم الفني",
//       'plain_value.numeric' => "لابد أن تكون قيمة التكلفة رقمية",
//     ];
//    }
}
