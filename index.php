<?php

include './includes/Articles.Class.php';

?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog PHP</title>
</head>
<body>
    <h1>Blog PHP</h1>
    <?php
        $articles = new Articles(dirname(__FILE__) . '/data/articles.json');

        $articles->output();
    ?>
</body>
</html>
