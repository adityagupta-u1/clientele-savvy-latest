
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientele savvy</title>
    <?php wp_head();?>
</head>
<body>
<!--start of header-->
<header class="header">
    <nav class="nav">
        <div class="brand">
            <div class="brand-logo">
                <img src="<?php echo get_theme_file_uri("./image/logo.svg"); ?>" alt="">
            </div>
        </div>
        <div class="hamburger" id="ham">
            <div class="line1"></div>
            <div class="line2"></div>
        </div>
        <ul class="nav-links">
            <li class="nav-links__list text-small nav-links__list-active">home</li>
            <li class="nav-links__list text-small">about</li>
            <li class="nav-links__list text-small">contact</li>
        </ul>
    </nav>
</header>
<!--end of header-->
