<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormValidationController extends Controller
{
  /**
   * Handle the incoming request.
   */
  public function __invoke(FormValidationRequest $request)
  {
    return $request->all();
  }
}
