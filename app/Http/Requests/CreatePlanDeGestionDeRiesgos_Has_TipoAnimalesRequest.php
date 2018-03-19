<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\PlanDeGestionDeRiesgos_Has_TipoAnimales;

class CreatePlanDeGestionDeRiesgos_Has_TipoAnimalesRequest extends FormRequest
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
        return PlanDeGestionDeRiesgos_Has_TipoAnimales::$rules;
    }
}
