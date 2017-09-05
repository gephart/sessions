<?php

namespace Gephart\Sessions;

/**
 * Session wrapper
 *
 * @package Gephart\Sessions
 * @author Michal Katuščák <michal@katuscak.cz>
 * @since 0.2
 */
final class Sessions
{

    public function __construct()
    {
        @session_start();
    }

    /**
     * @param string $key
     * @return bool
     */
    public function get(string $key)
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }

        return false;
    }

    /**
     * @since 0.4 Return $this
     * @since 0.2
     *
     * @param string $key
     * @param $value
     * @return $this
     */
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;

        return $this;
    }

}
