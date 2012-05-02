<?php
/**
* BPA 2010
* Adam Shannon
* 2010-03-21
*/

class Date {

  static private $format = 'H:i:s \o\n Y-m-d';

  static function parse($timestamp, $fmt = self::$format) {
    return @date(self::$format, $timestamp);
  }
}
