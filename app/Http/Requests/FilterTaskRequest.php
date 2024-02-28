<?php

namespace App\Http\Requests;

use App\Enums\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class FilterTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => ['nullable', new Enum(Status::class)]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
