<?php
function auto_copyright($year = 'auto')
{
  $year = intval($year) === 'auto' ? date('Y') : intval($year);
  $current_year = date('Y');

  if ($year == $current_year) {
    echo $year;
  } elseif ($year < $current_year) {
    echo $year . ' - ' . $current_year;
  } else {
    echo $current_year;
  }
}
?>
