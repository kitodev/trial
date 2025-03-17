<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\FailedValidationTrait;

class CommentStoreRequest extends FormRequest
{
    use FailedValidationTrait;

    /**
     * Determine if the user is authorized to make this request.
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
            'post_id' => 'required|exists:posts,id',
            'message' => 'required|string',
            'email' => 'required|email|max:255',
        ];
    }
}
