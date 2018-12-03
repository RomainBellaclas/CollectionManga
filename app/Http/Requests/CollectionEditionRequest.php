<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class CollectionEditionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        $id = $this->collectionEdition ? ',' . $this->CollectionEdition->id : '';
        return $rules = [
            'name' => 'required|string|max:255|unique:collectionEditions,name' . $id,
        ];
    }
}
