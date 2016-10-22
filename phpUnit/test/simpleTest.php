<?php

namespace phpUnit\Test;

class SimpleTest extends \PHPUnit_Framework_TestCase
{
  public function testTrueIsTrue()
  {
    $foo = true;
    $this->assertTrue($foo);
  }

  public function testTrueIsNotFalse()
  {
    $bar = false;
    $baz = true;
    $this->assertTrue($bar != $baz);
  }
}

?>
