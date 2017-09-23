<?php
namespace dependencyInjection\qiita\one;

require_once __DIR__ . '/Bar.php';

class Foo
{
    public function play()
    {
        $bar = new Bar;

        if ($bar->getSomething() === 1) {
            return true;
        }

        return false;
    }
}