<?php

namespace Modules\Belka\Http\Requests\API;

use Modules\Belka\Models\Rates;
use InfyOm\Generator\Request\APIRequest;

class UpdateRatesAPIRequest extends APIRequest
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
        return Rates::$rules;
    }
}
