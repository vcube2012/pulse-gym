<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required' , 'string' , 'min:3'],
            'email' => ['required' , 'email'],
            'feedback' => ['string' , 'min:10' , 'required'],
            'club_id' => ['required' , 'integer' , Rule::exists('clubs' , 'id')]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
