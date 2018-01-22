<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\PlanRiesgos_Has_TipoAgricultura;

class UpdatePlanRiesgos_Has_TipoAgriculturaRequest extends FormRequest
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
        return PlanRiesgos_Has_TipoAgricultura::$rules;
    }
}
