<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        $password = new Password;
//        $password = $password->length(12)->requireUppercase()->requireNumeric()->requireSpecialCharacter();

        return ['required', 'string', $password, 'confirmed'];
    }
}
