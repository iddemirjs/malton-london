<?php $this->load->view("frontend_v/sections/vw_header.php"); ?>
<div style="padding-top: 150px;"></div>
<?php foreach ($news as $key => $new): ?>
    <div class="gdlr-core-pbf-wrapper " style="padding: 50px 0px 50px 0px;" id="gdlr-core-wrapper-4">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                            <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " data-sync-height="bg1" style="height: 646px;">
                                    <div class="gdlr-core-pbf-background-wrap">
                                        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?=base_url("uploads/news_v/".$new["img_url"]); ?>) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                                    </div>
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content"></div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 60px 0px 30px 50px; height: 646px;" data-sync-height="bg1">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 14px ;font-style: normal ;text-transform: uppercase ;color: #919191 ;margin-bottom: 6px ;"></span>
                                                <div class="gdlr-core-title-item-title-wrap ">
                                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #000000 ;"><?=$new["title"]; ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                            </div>
                                        </div>
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 25px ;">
                                                <div class="gdlr-core-text-box-item-content" style="font-size: 21px ;font-weight: 400 ;text-transform: none ;color: #2b2b2b ;">
                                                    <?=$new["description"]; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<?php endforeach ?>
<?php $this->load->view("frontend_v/sections/vw_footer.php"); ?>
