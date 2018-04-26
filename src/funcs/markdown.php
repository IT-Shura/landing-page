<?php

use Symfony\Component\Yaml\Yaml;

class Texts {

  private $parsedown;
  static $inst;

  public function __construct()
  {
    $parsedown = new Parsedown;

    $this->parsedown = $parsedown;
  }

  static function instance() {
    if (self::$inst === null) {
      self::$inst = new self();
    }

    return self::$inst;
  }

  function text($str) {
    return $this->parsedown->text($str);
  }

  function line($str) {
    return $this->parsedown->line($str);
  }

}

function text($str) {
  return Texts::instance()->text($str);
}

function line($str) {
  return Texts::instance()->line($str);
}
