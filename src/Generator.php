<?php

namespace AG\Generator;

class Generator
{
    public static function uuid(): string
    {
        $uuid = uniqid('', true);

        // Concatenate with a few more unique values
        $uuid .= uniqid('', true);
        $uuid .= $_SERVER['REQUEST_TIME_FLOAT'];
        $uuid .= $_SERVER['HTTP_USER_AGENT'];

        // Hash the concatenated values using MD5
        $uuid = md5($uuid);

        // Format the UUID as per the standard UUID format (8-4-4-4-12)
        $formatted_uuid = substr($uuid, 0, 8) . '-' . substr($uuid, 8, 4) . '-' . substr($uuid, 12, 4) . '-' . substr($uuid, 16, 4) . '-' . substr($uuid, 20, 12);

        return $formatted_uuid;
    }
}
