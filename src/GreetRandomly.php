<?php

namespace Hutulia\GreetRandomly;

class GreetRandomly
{
    public function greet()
    {
        $greetings = [
            'Hi!',
            'Hello!',
            'Halo!',
        ];

        $index = rand(0, count($greetings)-1);

        return $greetings[$index];
    }
}
