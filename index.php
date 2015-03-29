<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <title>Odkaz</title>
    </head>
    <body>
        <?php
        /** This is a file of index.php
         * autor: Lukáš Kotyk
         * filesence MIT, appache
         */
        /**
         * require file Odkaz.php
         */
        require 'Odkaz.php';

        $a = new odkaz;
        /**
         * links for seturl = URL address for link
         */
        $a->seturl("http://www.google.cz");
        /**
         * Text on display
         */
        $a->settext("Google");
        /**
         * caption on link
         */
        $a->settitle("Google");
        /**
         * center link
         */
        $a->setcenter();
        /**
         * echo $a
         */
        echo$a;
        ?>


    </body>
</html>
