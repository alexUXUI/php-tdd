<?php

  namespace phpUnitTutorial\data;

  class Data {

    public static $associative = ['one' => 13, 'two' => 2, 'three' => 3];
    public static $jaggedAssociative = ['1' => ['first' => 'first position', 'second' => 'second position'], 2 => 'second value in jagged'];

  }

  $dataPoint = Data::$associative['one'];
  $dataPointTwo = Data::$jaggedAssociative;

  $values = [
    'firstValue' => $dataPoint,
    'secondValue' => $dataPointTwo,
  ];

  return $values;

 ?>
