# dump
﻿Drop array, objects, variable or scripting code.
Einfach Variabel, Massiv, Objekt oder irgendwelchen Kode ansehen.
Вывод переменной, массива, объекта или другого кода для удобного просмотра

EN
1) put the folder somewhere, for example in the vendor
2) connect to index.php (for example: require (__ DIR __. '/vendor/dump/dd.php');)
3) dd($var, true); or dd($var, true); anywhere
- - - - - - - - - - - - - - - - - - - - - - - 
to cause dd ($var); or dd ($var, true);
$var - that look
***********************************************************************************
DE
1) legen wir den Ordner irgendwo hin, zum Beispiel in vendor
2) verbinden wir mit index.php (z.B.: require (__ DIR __. '/vendor/dump/dd.php');)
3) schreben dd ($var); or dd ($var, true); Überall
***********************************************************************************
RU
1) кладем папку куда-нибудь, например в vendor
2) подключаем в index.php (например: require(__DIR__ . '/vendor/dump/dd.php');)
3) Вызовите функцию dd() в любом месте
так: dd ($var);
так: dd ($var, true); - если хотите остановить работу скрипта после распечатки кода.

$var - Переменная, массив, объект или какой-нибудь код.
