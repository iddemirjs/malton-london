      </div>
    </div>
    <footer>
        <div class="logisco-footer-wrapper ">
            <div class="logisco-footer-container logisco-container clearfix">
                <div class="logisco-footer-column logisco-item-pdlr logisco-column-15">
                    <div id=text-1 class="widget widget_text logisco-widget">
                        <div class=textwidget>
                            <p><img class="alignnone size-full wp-image-5803" src='<?=base_url("uploads/settings_v/$settings->logo"); ?>' alt width=138 style="background-color: rgba(255,255,255,0.5);padding: 10px;border-radius: 0px 0px 16px;">
                                <br/> <span class=gdlr-core-space-shortcode style="margin-top: -27px ;"></span>
                                <br/><?=$language["lan_words"][76];?></p>
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="<?=$settings->facebook ?>" target=_blank class=gdlr-core-social-network-icon title=facebook style="font-size: 16px ;color: #fff ;"><i class="fa fa-facebook" ></i></a><a href="<?=$settings->linkedin ?>" target=_blank class=gdlr-core-social-network-icon title=linkedin style="font-size: 16px ;color: #fff ;">
                                <i class="fa fa-linkedin" ></i></a>
                                <a href="<?=$settings->instagram ?>" target=_blank class=gdlr-core-social-network-icon title=skype style="font-size: 16px ;color: #fff ;"><i class="fa fa-instagram" ></i></a>
                                <a href="<?=$settings->twitter ?>" target=_blank class=gdlr-core-social-network-icon title=twitter style="font-size: 16px ;color: #fff ;"><i class="fa fa-twitter" ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logisco-footer-column logisco-item-pdlr logisco-column-15">
                    <div id=text-5 class="widget widget_text logisco-widget">
                        <h3 class="logisco-widget-title"><?=$language["lan_words"][77];?></h3><span class=clear></span>
                        <div class=textwidget>
                            <p><span style="color: #fff;"><?=$address->address ?></span>
                            <br/><span style="color: #fff;"><?=$settings->phone_1 ?></span>
                                <br/> <span style="color: #e53d34;"><?=$settings->email ?></span></p>
                        </div>
                    </div>
                </div>
                <div class="logisco-footer-column logisco-item-pdlr logisco-column-30">
                    <div id=gdlr-core-custom-menu-widget-2 class="widget widget_gdlr-core-custom-menu-widget logisco-widget">
                        <h3 class="logisco-widget-title"><?=$language["lan_words"][72];?></h3><span class=clear></span>
                        <div class=menu-useful-links-container>
                            <ul id=menu-useful-links class="gdlr-core-custom-menu-widget gdlr-core-menu-style-half">

                                <?php foreach (getMenuItems() as $p_key => $patentItem): ?>
                                    <li class="menu-item ">
                                        <a href="<?=base_url("home".$patentItem["menu_url"]);?>"><?=($patentItem["menu_name"]==null)?$patentItem["menu_icon"]:$patentItem["menu_name"];?></a>
                                        
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=logisco-copyright-wrapper>
            <div class="logisco-copyright-container logisco-container clearfix">
                <div class="logisco-copyright-left logisco-item-pdlr">Copyright 2019 Logisco, All Right Reserved</div>
            </div>
        </div>
    </footer>
</div>
</div>

<script src='<?=base_url()?>public/js/jquery/jquery.js'></script>
<script src='<?=base_url()?>public/js/jquery/jquery-migrate.min.js'></script>
<script src='<?=base_url()?>public/plugins/goodlayers-core/plugins/combine/script.js'></script>
<script>
    var gdlr_core_pbf = {
        "admin": "",
        "video": {
            "width": "640",
            "height": "360"
        },
        "ajax_url": ""
    };
</script>
<script src='<?=base_url()?>public/plugins/goodlayers-core/include/js/page-builder.js'></script>
<script src='<?=base_url()?>public/js/jquery/jquery.blockUI.min.js'></script>
<script src='<?=base_url()?>public/js/jquery/ui/effect.min.js'></script>
<script src='<?=base_url()?>public/js/jquery.mmenu.js'></script>
<script src='<?=base_url()?>public/js/jquery.superfish.js'></script>
<script src='<?=base_url()?>public/js/plugins.js'></script>
<script type="text/javascript" src="<?=base_url()?>public/plugins/quform/js/plugins.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/plugins/quform/js/scripts.js"></script> 
</body>
</html>