<?php
/**
 * wp_headless_blank
 * ---------------------------------------------------------------------
 * Copyright (c) 2024 Koichi Hoshi (hyperdb)
 * This software is released under the MIT License, see LICENSE.
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script>
        function addDarkmodeWidget() {
            new Darkmode().showWidget();
        }
        window.addEventListener('load', addDarkmodeWidget);
    </script>
</head>

<body>
</body>

</html>