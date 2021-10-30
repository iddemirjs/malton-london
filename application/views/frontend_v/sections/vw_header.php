<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang=en-US class=no-js>


<head>
<meta charset=UTF-8>
<meta name=viewport content="width=device-width, initial-scale=1">

<title>Kanomarine.com</title>


<link rel=stylesheet href='https://fonts.googleapis.com/css?family=Assistant%3A200%2C300%2Cregular%2C600%2C700%2C800%7CKarla%3Aregular%2Citalic%2C700%2C700italic%7CPT+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin%2Chebrew%2Clatin-ext%2Ccyrillic-ext%2Ccyrillic&amp;ver=5.0.3' type=text/css media=all>


<link rel=stylesheet href='<?=base_url();?>public/plugins/goodlayers-core/plugins/combine/style.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>public/plugins/goodlayers-core/include/css/page-builder.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>public/plugins/revslider/public/assets/css/settings.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>public/plugins/quform/css/base.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>public/css/style-core.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>public/css/logisco-style-custom.css' type=text/css media=all>
<link rel=stylesheet href='<?=base_url();?>fonts/css/line-awesome.min.css' type=text/css media=all>


</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body logisco-body logisco-body-front logisco-full  logisco-with-sticky-navigation  logisco-blockquote-style-2 gdlr-core-link-to-lightbox" data-home-url=index.html>

<div style="width: 150px;height: 150px;position: fixed;background: red;z-index: 999;bottom: 10px;right: 10px;background-image: url('/assets/assets/images/constant.jpg');background-size: cover;"> </div>

<div class=logisco-mobile-header-wrap>
<div class="logisco-mobile-header logisco-header-background logisco-style-slide logisco-sticky-mobile-navigation " id=logisco-mobile-header>
    <div class="logisco-mobile-header-container logisco-container clearfix">
        <div class="logisco-logo  logisco-item-pdlr">
            <div class=logisco-logo-inner>
                <a class href=index.html><img src='<?=base_url("uploads/settings_v/$settings->logo"); ?>' alt width=320 height=84 title=logo-big></a>
            </div>
        </div>
        <div class=logisco-mobile-menu-right>
            <div class=logisco-main-menu-search id=logisco-mobile-top-search><i class="fa fa-search"></i></div>
            <div class=logisco-top-search-wrap>
                <div class=logisco-top-search-close></div>
                <div class=logisco-top-search-row>
                    <div class=logisco-top-search-cell>
                        <form role=search method=get class=search-form action=#>
                        <input type=text class="search-field logisco-title-font" placeholder=Search... value name=s>
                        <div class=logisco-top-search-submit><i class="fa fa-search"></i></div>
                        <input type=submit class=search-submit value=Search>
                        <div class=logisco-top-search-close><i class=icon_close></i></div>
                        </form>
                    </div>
                </div>
            </div>

            <div class=logisco-mobile-menu><a class="logisco-mm-menu-button logisco-mobile-menu-button logisco-mobile-button-hamburger" href=#logisco-mobile-menu><span></span></a>
                <div class="logisco-mm-menu-wrap logisco-navigation-font" id=logisco-mobile-menu data-slide=right>
                    <ul id=menu-main-navigation class=m-menu>
                        <?php foreach (getMenuItems() as $p_key => $patentItem): ?>
                            <li class="menu-item <?=(count($patentItem["subItems"])>0)?"menu-item-has-children":"";?> logisco-normal-menu">
                                <a href="<?=base_url()."/home/".$patentItem["menu_url"];?>"><?=($patentItem["menu_name"]==null)?$patentItem["menu_icon"]:$patentItem["menu_name"];?></a>
                                <?php if (count($patentItem["subItems"])>0): ?>
                                    <ul class="sub-menu">
                                        <?php foreach ($patentItem["subItems"] as $s_key => $subItem): ?>
                                            <li class="menu-item" data-size=60><a href="<?=base_url($subItem["menu_url"]);?>"><?=($subItem["menu_name"]==null)?$subItem["menu_icon"]:$subItem["menu_name"];?></a></li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="logisco-body-outer-wrapper ">
<div class="logisco-body-wrapper clearfix  logisco-with-transparent-header logisco-with-frame">
    <div class=logisco-header-background-transparent>
        <header class="logisco-header-wrap logisco-header-style-plain  logisco-style-menu-right logisco-sticky-navigation logisco-style-slide" data-navigation-offset=75>
            <div class=logisco-header-background></div>
            <div class="logisco-header-container  logisco-header-full">
                <div class="logisco-header-container-inner clearfix">
                    <div class="logisco-logo  logisco-item-pdlr" style="padding-top: 10px;">
                        <div class=logisco-logo-inner>
                            <a class href=index.html><img src='<?=base_url("uploads/settings_v/$settings->logo"); ?>' alt width=320 height=84 title=logo-big></a>
                        </div>
                    </div>
                    <div class="logisco-navigation logisco-item-pdlr clearfix ">
                        <div class=logisco-main-menu id=logisco-main-menu>
                            <ul id=menu-main-navigation-1 class=sf-menu>
                                <?php foreach (getMenuItems() as $p_key => $patentItem): ?>
                                    <li class="menu-item <?=(count($patentItem["subItems"])>0)?"menu-item-has-children":"";?> logisco-normal-menu">
                                        <a href="<?=base_url("home".$patentItem["menu_url"]);?>"><?=($patentItem["menu_name"]==null)?$patentItem["menu_icon"]:$patentItem["menu_name"];?></a>
                                        <?php if (count($patentItem["subItems"])>0): ?>
                                            <ul class="sub-menu">
                                                <?php foreach ($patentItem["subItems"] as $s_key => $subItem): ?>
                                                     <li class="menu-item" data-size=60><a href="<?=base_url('home'.$subItem["menu_url"]);?>"><?=($subItem["menu_name"]==null)?$subItem["menu_icon"]:$subItem["menu_name"];?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        <?php endif ?>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                            <div class=logisco-navigation-slide-bar id=logisco-navigation-slide-bar></div>
                        </div>
                        <div class="logisco-main-menu-right-wrap clearfix ">
                            <div class=logisco-main-menu-search id=logisco-top-search><i class="fa fa-search"></i></div>
                            <div class=logisco-top-search-wrap>
                                <div class=logisco-top-search-close></div>
                                <div class=logisco-top-search-row>
                                    <div class=logisco-top-search-cell>
                                        <form role=search method=get class=search-form action=#>
                                            <div class=logisco-top-search-close><i class=icon_close></i></div>
                                            <div class=gdlr-core-dropdown-tab-head-wrap>
                                                <a href=""><div class="gdlr-core-dropdown-tab-head gdlr-core-active" data-index=0>English</div></a>
                                                <a href=""><div class="gdlr-core-dropdown-tab-head " data-index=1>Russia</div></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

