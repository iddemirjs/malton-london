<?php $this->load->view("frontend_v/sections/vw_header.php"); ?>
<div class="logisco-page-wrapper" id="logisco-page-wrapper" style="padding: 260px 0px 110px 0px;">
	<div class="gdlr-core-page-builder-body">
		<div class="gdlr-core-pbf-wrapper " style="padding: 4px 0px 26px 0px;border-width: 0px 0px 1px 0px;border-color: #ededed ;border-style: solid ;">
			<div class="gdlr-core-pbf-background-wrap"></div>
			<div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
				<div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
					<div class="gdlr-core-pbf-element">
						<div class="gdlr-core-breadcrumbs-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Logisco." href="https://demo.goodlayers.com/logisco" class="home"><span property="name">Home</span></a>
							<meta property="position" content="1">
						</span>·<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Our Services." href="index.html" class="post post-page"><span property="name"><?=$language["lan_words"][86];?></span></a>
						<meta property="position" content="2">
					</span>·<span class="post post-page current-item"><?=$currentPage["title"];?></span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="gdlr-core-pbf-sidebar-wrapper ">
		<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
			<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 50px 0px 30px 10px;">
				<div class="gdlr-core-pbf-sidebar-content-inner">
					<div class="gdlr-core-pbf-element">
						<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 26px ;" id="gdlr-core-title-item-1">
							<div class="gdlr-core-title-item-title-wrap ">
								<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #143369  ;"><?=$currentPage["title"] ?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
							</div>
						</div>
						<div class="gdlr-core-pbf-element">
							<div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 45px ;">
								<div class="gdlr-core-text-box-item-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #808080 ;">
									<p><?php echo $currentPage["description"]; ?></p>
								</div>
							</div>
						</div>
						<div style="min-height: 200px;border-color: #143369;text-align: center;color: red;width: 100%;">
							<div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-second" style="width: 100%;">
                                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget" style="padding-bottom: 0px ;text-align: center;">
                                                <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                    <div class="gdlr-core-item-list-wrap gdlr-core-column-60">
                                                        <div class="gdlr-core-pbf-element">
                                                            <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-scroll gdlr-core-item-pdlr ">
                                                                <div class="gdlr-core-sly-slider gdlr-core-js-2 gdlr-core-after-init" style="overflow: hidden;">
                                                                	<ul class="slides" style="transform: translateZ(0px); width: 1711px;">
                                                                		<?php foreach ($currentPageImages as $key => $photo): ?>
                                                                        <li class="gdlr-core-gallery-list gdlr-core-item-mglr active">
                                                                                <div class="gdlr-core-media-image" style="height: 500px ;">
                                                                                <a class="gdlr-core-lightgallery gdlr-core-js " href="<?=base_url($photo["url"]); ?>" data-lightbox-group="gdlr-core-img-group-3">
                                                                                    <img src="<?=base_url($photo["url"]); ?>" alt="" width="1800" height="1200" title="">
                                                                                    <span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-center-align"><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <?php endforeach ?>
                                                                	</ul>
                                                                </div>
                                                                <div class="gdlr-core-sly-scroll">
                                                                    <div class="gdlr-core-sly-scroll-handle" style="transform: translateZ(0px) translateX(0px); width: 225px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
							
						</div>
					</div>
					<div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  logisco-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 50px 0px 30px 0px;">
						<div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
							<div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget logisco-widget">
								<h3 class="logisco-widget-title"><?=$language["lan_words"][86];?></h3><span class="clear"></span>
								<div class="menu-services-container">
									<ul id="menu-services" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-box">
										<?php foreach ($products as $key => $product): ?>
											<li class="<?=($product->id == $currentPage["id"])?'menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5955 current_page_item menu-item-6652':'menu-item menu-item-type-post_type menu-item-object-page menu-item-6	672';?>">
												<a href="<?=base_url("/home/products/".$product->id);?>"><span><img src="<?=base_url('uploads/product_v/'.$product->img_url);?>" style="border-radius: 50%; width: 50px;height: 50px;padding: 10px;"></span><?=$product->title?></a>
											</li>
										<?php endforeach ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;" id="gdlr-core-wrapper-1">
						</div>
					</div>

					<?php $this->load->view("frontend_v/sections/vw_footer.php"); ?>
