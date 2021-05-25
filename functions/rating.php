<?php function rating() {

$rating = ["★ ☆ ☆ ☆ ☆","★ ★ ☆ ☆ ☆","★ ★ ★ ☆ ☆","★ ★ ★ ★ ☆","★ ★ ★ ★ ★",];

$max = count($rating) - 1;

$num = mt_rand(0, $max);

return $rating[$num];

} ?>