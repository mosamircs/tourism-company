<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'service_type' => 'required',
            'availability' => 'required',
            'contact_id' => 'required',
            'hotel_location' => 'required',
            'price' => 'required'
        ];
    }

    // /**
    //  * Custom message for validation
    //  *
    //  * @return array
    //  */
    // public function messages()
    // {
    //     return [
    //         'hotel_location.required' => ' location is required', //services
    //         'duration.required' => 'duration is required', //services
    //         'price.required' => 'price is required', //services
    //         'availability.required' => 'availability is required', //services
    //         'start_time.required' => 'Check in is required', //items
    //         'to_time.required' => 'Check out isrequired', //items
    //         'room_type.required' => 'room type is required', //items
    //         'email.required' => 'Email is required and must be unique!',
    //         'contact_name.required' => 'Name is required ,min chars must be 2 and max chars must be 30!',
    //         'phone.required' => 'phone is required and must be 11 numbers !',
    //         'personal_id.required' => 'Personal_id is required and must be 14 numbers!',
    //     ];
    // }
}
