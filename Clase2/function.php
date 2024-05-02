<?php
 function Generador($num, $num2) {
    for ($b = 1; $b < 101; $b++) { 
        if ($b % $num== 0 && $b % $num2== 0) { 
        echo "fizzbuzz ";
        }elseif ($b % $num== 0) {
                echo "fizz ";
            }elseif ($b % $num2==0){
                    echo "buzz ";}
                            else echo "$b ";
    }
}
echo Generador(2, 7);