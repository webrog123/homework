@use "sass:math";
// Divides `$value` by `$ratio` until it's below `$base`.
@function scale-below($value, $base, $ratio: 1.618) {
  @while $value > $base {
    $value: math.div($value, $ratio);
  }
  @return $value;
}
$normal-font-size: 16px;
sup {
  font-size: scale-below(20px, 16px);
}