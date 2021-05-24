<?php function rating() {

$rating = ["★ ☆ ☆ ☆ ☆","★ ★ ☆ ☆ ☆","★ ★ ★ ☆ ☆","★ ★ ★ ★ ☆","★ ★ ★ ★ ★",];

$max = count($rating);

$num = mt_rand(0, $max);

return $rating[$num]." ".$num;

} ?>