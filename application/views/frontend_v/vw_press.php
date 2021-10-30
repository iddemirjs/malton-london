<?php $this->load->view("frontend_v/sections/vw_header.php"); ?>

<div class="logisco-page-title-wrap  logisco-style-custom logisco-left-align">
            <div class=logisco-header-transparent-substitute></div>
            <div class=logisco-page-title-overlay></div>
            <div class="logisco-page-title-container logisco-container">
                <div class="logisco-page-title-content logisco-item-pdlr">
                    <h1 class="logisco-page-title"><?=$language["lan_words"][101];?></h1></div>
            </div>
        </div>
        <div class=logisco-page-wrapper id=logisco-page-wrapper>
            <div class=gdlr-core-page-builder-body>
                <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 20px 0px;">
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            
                            <div class=gdlr-core-pbf-element>
                                <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-grid gdlr-core-personnel-style-grid gdlr-core-with-divider " style="display: flex;flex-wrap: wrap;">
                             <?php foreach ($press as $item): ?>
                                    <div class="gdlr-core-personnel-list-column  gdlr-core-column-20 gdlr-core-column-first gdlr-core-item-pdlr">

                                        <div class="gdlr-core-personnel-list">
                                            <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="height:200px;max-height: 200px;background-color: transparent; display: flex;align-items: center;justify-content: center;">
                                                <a href=<?=$item["description"];?> target="_blank"><img src='<?=base_url()?>/uploads/press_v/<?=$item["img_url"];?>' alt width=700 height=469 title=personnel-1></a>
                                            </div>
                                            <div class=gdlr-core-personnel-list-content-wrap>
                                                <h3 class="gdlr-core-personnel-list-title" style="font-size: 20px ;font-weight: 800 ;text-transform: none ;"><a href=# ><?=$item["title"];?></a></h3>
                                                <p><?=$item["event_date"];?></p>
                                                <div class="gdlr-core-personnel-list-divider gdlr-core-skin-divider"></div>                                                
                                            </div>
                                        </div>
                                    </div>

                            <?php endforeach ?>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

<?php $this->load->view("frontend_v/sections/vw_footer.php"); ?>
