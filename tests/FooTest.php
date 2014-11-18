<?php

namespace My\App;

class FooTests extends \PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $foo = new Foo();
        $this->assertNull($foo->bar);
    }
}