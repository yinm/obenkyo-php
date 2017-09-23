<?php
require_once __DIR__ . '/../Foo.php';

use PHPUnit\Framework\TestCase;
use dependencyInjection\qiita\one\Foo;
use dependencyInjection\qiita\one\Bar;

class FooTest extends TestCase
{
    /**
     * @test
     */
    public function play()
    {
        $foo = new Foo;

        $bar = $this->getMockBuilder(Bar::class)
                    ->setMethods(['getSomeThing'])
                    ->getMock();
        $bar->expects($this->any())
            ->method('getSomething')
            ->will($this->returnValue(1));

        $this->assertTrue($foo->play($bar));
    }
}