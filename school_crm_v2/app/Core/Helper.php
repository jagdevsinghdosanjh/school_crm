<?php
// app/Core/Helpers.php

class Helpers
{
    public static function redirect($path)
    {
        header("Location: {$path}");
        exit();
    }

    public static function sanitize($value)
    {
        return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
    }
}
