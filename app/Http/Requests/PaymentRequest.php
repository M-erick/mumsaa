<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            // The regex will hold for quantities like '12' or '12.5' or '12.05'.
            //If you want more decimal points than two,
            // replace the "2" with the allowed decimals you need.
            ///min:0 make sure the minimum value is 0 $ not negative
            //values allowed
            //not_in:0 make value cannot be  0

            'admission' =>['required'],
            'amount'=>['required','regex:/^\d+(\.\d{1,2})?$/','min:0','not_in:0'],
            'name'=>['required','alpha']


        ];
    }

    public function messages() {

        {
            return [
                'admission.required' =>'User Registration is required',
                'amount.required' =>'Amount required',
                'amount.min'=>'minimum value is 0',
                'amount.not_in'=>'Value cannot be 0',
                'name.required'=>'Name is required'
            ];
        }
    }
         protected function prepareForValidation() {
             $this->merge([
                'slug' => Str::slug($this->slug),
             ]);
         }

}
