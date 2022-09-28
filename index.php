<?php

echo 'Введите первое число ';
fscanf(STDIN, "%d\n", $number1);
echo 'Введите второе число ';
fscanf(STDIN, "%d\n", $number2);

if ($number2 === 0) {
   return fwrite(STDERR, 'На 0 делить нельзя' . PHP_EOL);
}
if (is_int($number1) && is_int($number2) ) {
    fwrite(STDOUT, 'Результат ' . $number1 / $number2. PHP_EOL);
} else {
    fwrite(STDERR, 'Введите, пожалуйста, число ' . PHP_EOL);
}
