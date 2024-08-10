<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJourneyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:2',
            'seat' => 'required|numeric|min:1',
            'category_id' => 'required|string',
            'status' => 'required',
            'description' => 'required|string|min:3'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'လူကြီးမင်းသွားလိုသောခရီးစဥ်ထည့်ပေးပါ',
            'price.required' => 'စျေးနှုန်းထည့်ပေးပါ',
            'category_id.required' => 'ကြိုက်နှစ်သက်ရာBusကားထည့်ပေးပါ',
            'description.required' => 'အကြောင်းအရာထည့်ပေးပါ'
        ];
    }
}
