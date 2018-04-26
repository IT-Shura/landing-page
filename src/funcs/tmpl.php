<?php

function tmpl($name, $options = null) {
  if ($options === false) {
    return '';
  }

  require(__DIR__ . "/../template/${name}.php");

  return '';
}