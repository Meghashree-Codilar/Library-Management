<?php

class ErrorReporting
{
    /**
     * Sets the error reporting on or off
     *
     * @param bool $isEnabled
     * @return void
     */
    public function set(bool $isEnabled)
    {
        if ($isEnabled === true) {
            error_reporting(E_ALL);
            ini_set('display_error', true);
        } else {
            error_reporting(0);
            ini_set('display_errors', false);
        }
    }
}