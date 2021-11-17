<?php


namespace KodeDict\PHPUtil\Traits\Validate;

trait EmailValidation
{
    public static function validateEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
