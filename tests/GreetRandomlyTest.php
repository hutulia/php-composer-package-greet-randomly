<?php declare(strict_types=1);

use Hutulia\GreetRandomly\GreetRandomly;
use PHPUnit\Framework\TestCase;

final class GreetRandomlyTest extends TestCase
{
    public function testCanGreet(): void
    {
        $greetings = [
            'Hi!',
            'Hello!',
            'Halo!',
        ];

        $s = new GreetRandomly();
        $this->assertContains($s->greet(), $greetings);
    }

    public function testGreetsAreRandom(): void
    {
        $s = new GreetRandomly();
        $greets = [];
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();
        $greets[] = $s->greet();

        $this->assertNotSame($greets, array_unique($greets));
    }
}