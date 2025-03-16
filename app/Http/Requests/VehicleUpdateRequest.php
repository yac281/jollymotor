<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehicleUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'type' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'brand' => ['required', 'string', 'max:255'],
            'year' => ['required', 'integer'],

            'engine_mods' => ['nullable', 'string', 'max:255'],
            'body_mods' => ['nullable', 'string', 'max:255'],
            'suspension_mods' => ['nullable', 'string', 'max:255'],
            'wheels' => ['nullable', 'string', 'max:255'],
            'exhaust' => ['nullable', 'string', 'max:255'],
            'interior_mods' => ['nullable', 'string', 'max:255'],

            'horsepower' => ['nullable', 'string', 'max:255'],
            'torque' => ['nullable', 'string', 'max:255'],
            'weight' => ['nullable', 'integer'],
            'top_speed' => ['nullable', 'integer'],
            'acceleration' => ['nullable', 'numeric','between:0,99.99'],
        ];
    }
}
