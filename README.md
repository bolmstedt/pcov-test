# PCOV Coverage Test

This is a minimal case where PHPUnit will report tests as risky and alternate between:

```
1) Bolmis\PcovTest\Tests\FooTest::testDoSecondThing
This test executed code that is not listed as code to be covered or used:
- Bolmis\PcovTest\Foo::doFirstThing
```

and

```
1) Bolmis\PcovTest\Tests\FooTest::testDoFirstThing
This test executed code that is not listed as code to be covered or used:
- Bolmis\PcovTest\Foo::doSecondThing
```

as the PHPUnit results are cached.

The issue is that PCOV somehow reports covered lines in a faulty way. The bug is probably in the PCOV `clear` function.