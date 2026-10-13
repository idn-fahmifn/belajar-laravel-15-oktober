<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class TrainingRequest extends FormRequest
{
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_training' => ['string', 'required', 'min:3', 'max:30'],
            'nama_trainer' => ['string', 'required', 'min:3', 'max:30'],
            'durasi' => ['integer', 'required', 'min:1', 'max:5'],
        ];
    }

    public function messages()
    {
        return [
            'nama_training.string' => 'input nama training wajib karakter',
            'nama_training.required' => 'input nama training wajib diisi',
            'nama_training.min' => 'input nama training minimal 3 karakter',
            'nama_training.max' => 'input nama training maksimal 30 karakter',

            'nama_trainer.string' => 'input nama trainer wajib karakter',
            'nama_trainer.required' => 'input nama trainer wajib diisi',
            'nama_trainer.min' => 'input nama trainer minimal 3 karakter',
            'nama_trainer.max' => 'input nama trainer maksimal 30 karakter',

            'durasi.integer' => 'input durasi wajib angka',
            'durasi.required' => 'input durasi wajib diisi',
            'durasi.min' => 'input durasi minimal 1 hari',
            'durasi.max' => 'input durasi maksimal 5 hari',
        ];
    }
}
