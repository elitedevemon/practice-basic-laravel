<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class FormValidationRequest extends FormRequest
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
      'name' => 'required|regex:/[a-zA-Z]/',
      'email' => 'required|email:rfc,dns,spoof,filter',
      'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()]
    ];
  }

  /**
   * Method messages
   * Method that return the validation messages
   * @return void[]
   */
  public function messages(): array
  {
    return [
      'name.required' => 'Name :attribute is required',
      'email.required' => 'Email is required',
      'email.email' => 'You have to put a valid email address',
    ];
  }



  /**
   * Method attributes
   * Method that returns the attributes name and change it
   * @return void[]
   */
  public function attributes(): array
  {
    return [
      'name' => 'User Name',
      'email' => 'User Email',
      'password' => 'User Password'
    ];
  }

  /**
   * Method prepareForValidation
   * it can change any value or modify the @var request value before the validation
   * @return void
   */
  protected function prepareForValidation(): void
  {
    //
  }


  /**
   * stopOnFirstFailure
   * indicates if the validator should stop on the first rule failure
   * @var bool
   */
  protected $stopOnFirstFailure = true;
}
