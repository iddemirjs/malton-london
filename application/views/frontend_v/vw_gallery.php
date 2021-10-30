        <?php $this->load->view("frontend_v/sections/vw_header.php"); ?>
        
            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget" style="padding-top: 200px ;text-align: center;">
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-60">
                                                            <?php foreach ($gallery as $key => $value): ?>
                                                                <div class="gdlr-core-pbf-element">
                                                                <h4><?=explode('-', $value['title'])[1]; ?></h4>
                                                                <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr ">
                                                                    <div class="gdlr-core-sly-slider gdlr-core-js-2 gdlr-core-after-init" style="overflow: hidden;">
                                                                        <ul class="slides" style="transform: translateZ(0px); width: 3123px;">
                                                                                
                                                                            <?php foreach ($value["images"] as $img_key => $img): ?>
                                                                                <li class="gdlr-core-gallery-list gdlr-core-item-mglr active">
                                                                                    
                                                                                    <div class="gdlr-core-media-image" style="height: 500px ;">
                                                                                    <a class="gdlr-core-lightgallery gdlr-core-js " href="<?=base_url($img['url']); ?>" data-lightbox-group="gdlr-core-img-group-3">
                                                                                        <img src="<?=base_url($img['url']); ?>" alt="" >
                                                                                        <span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i>
                                                                                        </span>
                                                                                    </a>
                                                                                </div>
                                                                            </li>
                                                                            <?php endforeach ?>
                                                                                
                                                                        </ul>
                                                                    </div>
                                                                    <div class="gdlr-core-sly-scroll">
                                                                        <div class="gdlr-core-sly-scroll-handle" style="transform: translateZ(0px) translateX(0px); width: 547px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php endforeach ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

        <?php $this->load->view("frontend_v/sections/vw_footer.php"); ?>
