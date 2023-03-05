<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendeeRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'mobile' => ['required', 'numeric', 'digits_between:10,12'],
            'day_id' => ['required', 'exists:days,id'],
            'movie_id' => ['required', 'exists:movies,id'],
            'show_time_id' => ['required', 'exists:show_times,id'],
        ];
    }
}
