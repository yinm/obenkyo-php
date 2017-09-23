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
        $bar = $this->getMockBuilder(Bar::class)
                    ->setMethods(['getSomething'])
                    ->getMock();

        $bar->expects($this->any())
            ->method('getSomething')
            ->will($this->returnValue(1));

        $foo = new Foo;
        $foo->setBar($bar);

        $this->assertTrue($foo->play());
    }
}