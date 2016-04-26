<?php


namespace OguzCabuk\PhpIban\Test;


class HelloIbanClassTest extends TestCase
{

    public function testHello()
    {
        $cls = new \OguzCabuk\PhpIban\Iban();

        $this->assertInstanceOf(\OguzCabuk\PhpIban\Iban::class, $cls);
    }
}