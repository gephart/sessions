<?php

require_once __DIR__ . '/../vendor/autoload.php';

class SessionsTest extends \PHPUnit\Framework\TestCase
{

    public function setUp()
    {
    }

    public function testSet()
    {
        $sessions = new Gephart\Sessions\Sessions();
        $sessions->set("key", "value");

        $this->assertEquals($_SESSION["key"], "value");
    }

    public function testGet()
    {
        $sessions = new Gephart\Sessions\Sessions();
        $sessions->set("key", "value");
        $value = $sessions->get("key");

        $this->assertEquals($value, "value");
    }
}
