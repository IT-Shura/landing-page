<?php

require_once './vendor/autoload.php';
require_once './src/funcs/index.php';

define('IS_DEV', getenv('DEVELOPMENT') === 'true');
define('IS_PROD', getenv('DEVELOPMENT') !== 'true');

error_reporting(IS_PROD ? 0 : E_ALL);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>IT Muslim</title>
        <meta name="description" content="Исламское сообщество программистов, дизайнеров, руководителей и просто айтишников.">
        <meta name="keywords" content="ислам, шура, программирование, веб-проекты, стартапы">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="4c8d247c2223afb6" />

        <link href='//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="dist/css/landing.css">
    </head>
    <body>
        <div class="content">
            <div class="head-text">
                <h1>IT MUSLIM</h1>
                <h3 class="subheading muted">«…Которые отвечают своему Господу, совершают намаз, <strong>совещаются между собой о делах</strong> и расходуют из того, чем Мы их наделили…»<br><span class='quran-title'>Священный Коран, <a href='http://quran-online.ru/42:38' target='_blank'>42:38</a></span></h3>
            </div>

            <hr>

            <?=text(<<<EOF
Ас-саляму алейкум! Добро пожаловать в исламское сообщество «IT-Muslim, участники которого
стремятся объединить мусульман на одной площадке для полезного взаимодействия друг с другом.

Мы используем некоторые интернет-площадки для коммуникации, к которым вы можете присоединиться прямо сейчас.

### Просим всех желающих заполнить одну из 2-х анкет:

 - [Я ИТ специалист](https://goo.gl/forms/eRm9TXklILY7xeYk1) - чтобы добавить себя в нашу [таблицу](https://goo.gl/qvZzM7) мусульман-специалистов.
 - [Хочу стать разработчиком](https://goo.gl/forms/WWqov48q14G5LL6q1) - чтобы получить возможность учиться у наших преподавателей.

### Наши ресурсы:

- [Наш основной чат в дискорде](https://discord.gg/AKhueUP)
- [Наш форум](https://forum.it-muslim.ru)
- [Группа в LinkedIn](https://www.linkedin.com/groups/12112880)

### Дружественные сообщества:

- [Чат «null21» в дискорде для мусульман-айтишников](https://discord.gg/pHKEvMd)
- [Телеграм чат IT Muslim](https://t.me/it_muslim)


EOF
)?>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>
            function transformImg(el, counter) {
                if (el.style.transform) {
                    el.style.transform = ''
                } else {
                    el.style.transform = 'scale('+counter+')'
                }
            }
        </script>
    </body>
</html>
