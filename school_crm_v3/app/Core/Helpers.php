<?php
class Helpers
{
    public static function redirect(string $path): void
    {
        header("Location: {$path}");
        exit();
    }

    public static function sanitize(string $value): string
    {
        return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
    }
}
