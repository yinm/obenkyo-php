<?php
namespace dependencyInjection\qiita\one;

require_once __DIR__ . '/Bar.php';

class Foo
{
    protected $bar;

    public function setBar(Bar $bar)
    {
        $this->bar = $bar;
    }

    public function play()
    {
        if ($this->bar->getSomething() === 1) {
            return true;
        }

        return false;
    }
}