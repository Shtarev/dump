# dump
Drop array, objects, variable or scripting code.

Einfach Variabel, Massiv, Objekt oder irgendwelchen Kode ansehen.

Вывод переменной, массива, объекта или другого кода для удобного просмотра


EN
1) load a folder dump into any directory
2) include a file dd.php
3) to cause function dd ($var, $die);

$var - that look

$die - (optional) write '1' or 'true' to stop script after sight. Default is 'false'
***********************************************************************************
DE
1) Laden Sie der Ordner 'dump' in ganz egal welche Directory
2) Anschalten Sie die File 'dd.php' z.B. require('/dir1/dir2/dir3/dir4/dir5/dump/dd.php');
3) Nutzen Sie einfach function 'dd ($var, $die);' so: 'dd ($var);' oder so: 'dd ($var, 1);' aus.

$var - Was moechten Sie ansehen (Variabel, das Massiv, das Objekt oder irgendwelchen Kode)

$die - (optional) tragen Sie '1' oder 'true' um nach die Codeanzeige die Scriptarbeit zu stoppen. Oder schreiben Sie nichts, um Script bis Ende durcharbeiten zu lassen. Default is 'false'
***********************************************************************************
RU
1) Закинуть папку 'dump' в любую директорию
2) Подключить файл 'dd.php' например так: require('/dir1/dir2/dir3/dir4/dir5/dump/dd.php');
3) Вызовите функцию dd ($var, $die) так: 'dd ($var);' или так: 'dd ($var, 1);' - если хотите остановить работу скрипта после распечатки кода.

$var - Переменная, массив, объект или какой-нибудь код.

$die - (не обязаельно) определите как '1' или 'true' чтобы остановить работу скрипта после показа кода. Если хотите, чтоб код продолжал работать дальше, то не пишите ничего по умолчанию этот аргумент == 0

************************************************************************************
Visual:this script in part used a theme code-prettify. (https://github.com/google/code-prettify)
