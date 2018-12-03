<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class PublicViseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = $this->publicVise ? ',' . $this->publicVise->id : '';
        return $rules = [
            'name' => 'required|string|max:255|unique:publicVises,name' . $id,
        ];
    }
}