<?php

namespace Bolmis\PcovTest\Tests;

use Bolmis\PcovTest\Foo;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversDefaultClass \Bolmis\PcovTest\Foo
 */
final class FooTest extends TestCase
{
    /**
     * @covers \Bolmis\PcovTest\Foo::doFirstThing
     */
    public function testDoFirstThing(): void
    {
        $foo = new Foo();
        $return = $foo->doFirstThing('foo');
        static::assertSame('oofoof', $return);
    }

    /**
     * @covers \Bolmis\PcovTest\Foo::doSecondThing
     */
    public function testDoSecondThing(): void
    {
        $foo = new Foo();
        $return = $foo->doSecondThing('foo');
        static::assertSame('foooof', $return);
    }
}