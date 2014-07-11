<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- Bless the Maker and His water. Bless the coming and going of Him. May His passage cleanse the world. May He keep the world for His people. -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php echo page_title('404: Page not found'); ?> - <?php echo site_name(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo theme_url('prettify.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo theme_url('style.css'); ?>" />

<!-- TODO -->
<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

<meta property="og:title" content="<?php echo site_name(); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo current_url(); ?>">
<meta property="og:image" content="<?php echo theme_url('screenshot.png'); ?>">
<meta property="og:site_name" content="<?php echo site_name(); ?>">
<meta property="og:description" content="<?php echo site_description(); ?>">
</head>
<body onload="prettyPrint()">
    <header>
        <div class="banner">
            <div class="title">
                <h4><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h4>
            </div>
        </div>
        <div class="logo-wrap">
            <div class="logo"><a href="https://www.twitter.com"></a></div>
        </div>
    </header>
    <div class="content">
        <nav>
            <div class="button">
                <a href="javascript:void(0)"></a>
            </div>
            <div class="menu-wrap">
                <div class="menu">
                    <form id="search" action="<?php echo search_url(); ?>" method="post">
                        <input id="term" name="term" placeholder="Type and then hit enter to search" tabindex="1" type="search" value="<?php echo search_term(); ?>">
                    </form>
                    <?php if(has_menu_items()): ?> 
                        <!-- You can add more items on here after the loop. -->
                        <!-- Menu items are /totes/ stylable-just set up a class with background image/colour in style.css and add the class. -->
                        <ul>
                            <?php while(menu_items()): ?> 
                                <li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
                                    <a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
                                </li>
                            <?php endwhile; ?>
                            <li>
                                <a href="<?php echo base_url('contact-us'); ?>" title="<?php echo site_name(); ?>">Contact Us</a>
                            </li>
                        </ul>
                        <!-- Site categories. -->
                        <!-- You must create a category before you can use it, and a post can only have one category. -->
                        <!-- Interesting restriction. -->
                        <ul>
                            <?php while(categories()): ?>
                                <li>
                                    <a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
                                        <?php echo category_title(); ?> (<?php echo category_count(); ?>)
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <!-- External hyperlinks. -->
                        <ul>
                            <li class="beard">
                                <!-- Some John Hancock. Example of customized link. :) -->
                                <a href="http://www.bhalash.com" title="Real Men Wear Beards">Real Men Wear Beards</a>
                            </li>
                            <li><a href="http://www.github.com" title="Github">Github</a></li>
                            <li><a href="http://www.facebook.com" title="Facebook">Facebook</a></li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </nav>