<?php
echo '<center style="margin-top:1%;background:#e8e8e8;padding: 20%;"><h1>';
$u1 = rand(-2,2); #число пользователя

/*
Создаем 2 переменные, задаем их значения - "1" */
$p1=1;
$p2=1;

$flag = false;
do {
if($p1>$u1)
{ #p1 больше чем число пользователя?
echo 'задуманное число Не входит в числовой ряд';# Да
echo '</br>', $p1;
$flag = true;
}
else
{ #переменная меньше или равна u1
if($p1<$u1 )#переменная меньше u1
{
$p3 = $p1; #сохраняем в p3 значение p1, записываем справо на лево
$p1=$p2+$p1;
$p2=$p3; #присваиваем переменной p2 значение p3
#нужно вернуть значения в переменные p1 и p2
#запишем значения переменных в функцию и вызовем вачале программы???
}
else
{#переменная рвана u1
echo 'задуманное число входит в числовой ряд';
echo '</br>', $p1;
$flag = true;
}
}
}
while($flag);

echo '</h1></center>';
?>
