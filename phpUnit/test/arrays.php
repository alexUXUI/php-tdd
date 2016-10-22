<?php

  namespace phpUnit\Arrays;

  class ArrayTests extends \PHPUnit_Framework_TestCase
  {
    public function testArrayAdd()
    {
      $arr = [
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
      ];

      $arr['4'] = 'four';

      $this->assertArrayHasKey('4', $arr);
    }
  }

 ?>
