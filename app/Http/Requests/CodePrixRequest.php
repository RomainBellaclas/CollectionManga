<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CodePrixRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = $this->codePrix ? ',' . $this->codePrix->id : '';
        return $rules = [
            'libellePrix' => 'required|string|max:255|unique:codePrixes,name' . $id,
            'prix' => 'required|float|max:255',
        ];
    }
}