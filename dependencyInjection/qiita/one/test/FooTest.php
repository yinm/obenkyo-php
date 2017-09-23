<?php
require_once __DIR__ . '/../Foo.php';

use PHPUnit\Framework\TestCase;
use dependencyInjection\qiita\one\Foo;

class FooTest extends TestCase
{
    /**
     * @test
     */
    public function play()
    {
        $foo = new Foo;
        $this->assertTrue($foo->play());
    }
}