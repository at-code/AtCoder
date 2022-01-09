<?php
  // 関数 f を f(x)=x^2+2x+3 と定義します。
  // 整数 t が入力されるので、 f(f(f(t)+t)+f(f(t))) を求めてください。
  // ただし、答えは 2×10^9以下の整数であることが保証されます。
  // t は 0 以上 10 以下の整数である
  $t = trim(fgets(STDIN));
    
    function fx(int $num): int{
        return $num * $num + 2 * $num + 3;
    }
    
    echo fx(fx(fx($t)+ $t) + fx(fx($t)));