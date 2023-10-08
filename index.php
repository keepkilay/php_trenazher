<?php
//Напишите программу для нахождения максимума между двумя числами, используя if-else
$n1 = readline('Введите первое число:');
$n2 = readline('Введите второче число:');

if($n1 > $n2){
    $max = $n1;
} else {
    $max = $n2;
}
echo 'Максимально значение: ' . $max;


//Напишите программу для проверки прибыли или убытка, используя if-elseif-else
$buy = readline('Введите стоимость покупки:');
$sell = readline('Введите стоимость продажи:');

if($sell > $buy){
    echo 'Прибыль ' . ($sell - $buy);
} elseif ($sell < $buy) {
    echo 'Убыток ' . ($sell - $buy);
} else {
    echo 'Нет профита или убытка';
}

//Напишите программу для вывода названия дня недели по номеру, используя switch. Выведите ошибку
//если введенное число меньше 1 или больше 7

$day = readline('Введите номер дня недели: ');

switch($day) {
    case 1:
        echo 'Понедельник';
        break;
    case 2:
        echo 'Вторник';
        break;
    case 3: 
        echo 'Среда';
        break;
    case 4:
        echo 'Четверг';
        break;
    case 5:
        echo 'Пятница';
        break;
    case 6:
        echo 'Суббота';
        break;
    case 7:
        echo 'Воскресенье';
        break;
    default:
        echo 'Ошибка! Введите число между 1 и 7';    
}

//Напишите программу для нахождения максимум между двумя числами, используя switch
$n1 = readline('Введите первое число: ');
$n2 = readline('Введите второе число: ');

switch($n1 > $n2) {
    case true:
        $max = $n1;
        break;
    case false:
        $max = $n2;
        break;
    default:
        $max = $n1;
}
echo $max;

//Напишите программу, которая выведет все целые числа от 1 до n, используя for. 
$n = readline('Введите число больше 1: ');

for($i = 1; $i <= $n; $i++){
    echo "$i \n";

}

//Напишите программу, которая выведет все четные число от 1 до n, используя for
$n = readline('Введите число больше 1: ');

for($i = 1; $i <= $n; $i++){
    if ($i % 2 === 0) {
        echo "$i \n";
    }
}

//Напишите программу, которая определяет совершеннолетие по введенному возрасту, используя тернарный оператор
$age = readline('Сколько вам лет? ');

echo $age >= 18 ? 'Вы совершеннолетний' : 'Вы несовершеннолетний';

//Напишите программу, которая делит число 10 на n и останавливает программу с сообщением "No way!"
// при ошибке деления, используя try-catch
$divident = 10;
$divisor = readline('n? ');

try {
    $result = intdiv($divident, $divisor);
    echo "$dividend / $divisor = $result\n";
} catch (DivisionByZeroError $error){
    throw new Exception('No way!');
}
echo 'Программа завершена успешно.';

//Напишите программу для вычисления суммы чисел от 1 до n с помощью рекурсии
function sumOfRange(int $n){
    if ($n===1) {
        return 1;
    }
    $res = $n + sumOfRange($n-1);
    return $res;
}
echo sumOfRange(5);

//Напишите программу для печати первых 20 целых чисел с использованием рекурсии

function printNumbers(int $n){
    if($n < 20){
        echo $n . "\n";
        printNumbers($n + 1);
    }
}
printNumbers(1);


