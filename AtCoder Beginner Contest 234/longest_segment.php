<?php
  // 二次元平面上に N 個の点があります。i 個目の点の座標は (xi,yi) です。
  // この中から 2 個の点を選ぶとき、それらを結ぶ線分の長さの最大値を求めてください。
  $n = trim(fgets(STDIN));

  $points = [];

  for($i = 0; $i < $n; $i++){
    $input = explode(" ",trim(fgets(STDIN)));
    $points[] = $input;
  }

  $length = count($points);
  $distances = [];
  for($i = 0; $i < $length; $i++){
    $start = $points[$i];
    for($j = 0; $j < $length; $j++){
      $end = $points[$j];
      $distances[] = distance($start, $end);
    }
  }

  echo max($distances);

  function distance($start, $end) {
    $x1 = $start[0];
    $y1 = $start[1];
    $x2 = $end[0];
    $y2 = $end[1];
    return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
  }