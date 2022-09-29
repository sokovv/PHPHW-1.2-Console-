<?php

echo 'Введите первое число ';
fscanf(STDIN, "%d\n", $number1);
while (is_int($number1) === false) {
    fwrite(STDERR, 'Введите, пожалуйста, число ' . PHP_EOL);
    fscanf(STDIN, "%d\n", $number1);
}
echo 'Введите второе число ';
fscanf(STDIN, "%d\n", $number2);
while (is_int($number2) === false) {
    fwrite(STDERR, 'Введите, пожалуйста, число ' . PHP_EOL);
    fscanf(STDIN, "%d\n", $number2);
}
while ($number2 === 0) {
    fwrite(STDERR, 'На 0 делить нельзя, введите другое число' . PHP_EOL);
    fscanf(STDIN, "%d\n", $number2);
}
fwrite(STDOUT, 'Результат ' . $number1 / $number2 . PHP_EOL);
