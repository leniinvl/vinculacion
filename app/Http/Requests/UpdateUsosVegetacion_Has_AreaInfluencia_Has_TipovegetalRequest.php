<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal;

class UpdateUsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal::$rules;
    }
}
