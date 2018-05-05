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

  private function processStr($str) {
    return str_replace('<a ', '<a target="_blank" rel="noopener noreferrer" ', $str);
  }

  function text($str) {
    return $this->processStr($this->parsedown->text($str));
  }

  function line($str) {
    return $this->processStr($this->parsedown->line($str));
  }

}

function text($str) {
  return Texts::instance()->text($str);
}

function line($str) {
  return Texts::instance()->line($str);
}
