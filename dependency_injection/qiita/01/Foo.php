<?php

class Foo
{
    public function play()
    {
        $bar = new Bar();

        if ($bar->getSomething() === 1) {
            return true;
        }

        return false;
    }
}