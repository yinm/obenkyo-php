<?php
namespace dependencyInjection\qiita\one;

require_once __DIR__ . '/Bar.php';

class Foo
{
    protected $bar;

    public function __construct(Bar $bar = null)
    {
        $this->bar = $bar ? $bar : new Bar;
    }

    public function play()
    {
        if ($this->bar->getSomething() === 1) {
            return true;
        }

        return false;
    }
}