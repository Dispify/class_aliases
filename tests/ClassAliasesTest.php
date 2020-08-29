<?php

namespace Dispify;

use PHPUnit\Framework\TestCase;

class ClassAliasesTest extends TestCase
{
    public function testClassAliases()
    {
        $expected = [];
        self::assertEqualsIgnoringCase($expected, class_aliases(self::class));

        \class_alias(self::class, 'a1');
        $expected[] = 'a1';
        self::assertEqualsIgnoringCase($expected, class_aliases(self::class));

        \class_alias(self::class, 'A2');
        $expected[] = 'A2';
        self::assertEqualsIgnoringCase($expected, class_aliases(self::class));

        self::assertEqualsIgnoringCase($expected, class_aliases($this));
    }
}
