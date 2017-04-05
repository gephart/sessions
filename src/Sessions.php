<?php

namespace Gephart\Sessions;

final class Sessions
{

    public function __construct()
    {
        @session_start();
    }

    public function get(string $key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return false;
    }

    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

}
