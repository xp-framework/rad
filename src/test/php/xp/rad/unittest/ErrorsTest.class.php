<?php namespace xp\rad\unittest;

use lang\Object;

class ErrorsTest extends \unittest\TestCase {

  public function assertEquals() {
    parent::assertEquals($a, $b);
    \xp::gc(__FILE__);
  }

  #[@test]
  public function undefined_variable_is_ok() {
    $this->assertEquals(null, $var);
  }

  #[@test]
  public function accessing_nonexistant_string_offset_is_ok() {
    $string= '';
    $this->assertEquals('', $string{0});
  }

  #[@test]
  public function accessing_nonexistant_array_offset_is_ok() {
    $array= [];
    $this->assertEquals(null, $array[0]);
  }

  #[@test]
  public function accessing_nonexistant_map_key_is_ok() {
    $map= [];
    $this->assertEquals(null, $map['non-existant']);
  }

  #[@test]
  public function casting_arrays_to_strings_is_ok() {
    $array= [];
    $this->assertEquals('', (string)$array);
  }

  #[@test]
  public function omitting_parameters_is_ok() {
    $f= function($arg) { return func_get_args(); };
    $this->assertEquals([], $f());
  }
}