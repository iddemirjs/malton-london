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
						</span>·<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Our Services." href="index.html" class="post post-page"><span property="name"><?=$language["lan_words"][63];?></span></a>
						<meta property="position" content="2">
					</span>·<span class="post post-page current-item"><?=$approvalsType;?></span></div>
				</div>
			</div>
		</div>
	</div>
	<div class="gdlr-core-pbf-sidebar-wrapper ">
		<div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
			<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-45 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-right" style="padding: 50px 0px 30px 10px;">
				<div class="gdlr-core-pbf-sidebar-content-inner">
					<div class="gdlr-core-pbf-element">
						<div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 26px ;" id="gdlr-core-title-item-1">
							<div class="gdlr-core-title-item-title-wrap ">
								<h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;color: #143369  ;"><?=$currentPage["approvals_name"]?><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
							</div>
						</div>
						<div class="gdlr-core-pbf-element">
							<div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align gdlr-core-no-p-space" style="padding-bottom: 45px ;padding-top: 45px ;">
								<div class="gdlr-core-text-box-item-content" style="font-size: 17px ;font-weight: 400 ;text-transform: none ;color: #808080 ;">
									<div align="center">
											<img src="<?=base_url("uploads/approvals_v/".$currentPage["img_url"]); ?>" alt="" class="img-responsive">

									</div>
								</div>
								<div style="text-align: center;">
									<?php if ($currentPage["pdf_url"]!=null): ?>
										<a href="<?=base_url("uploads/approvals_v/".$currentPage["pdf_url"]); ?>" style="border: 1px solid lightblue; padding: 5px 10px; border-radius: 5px;font-size: 12px;color: white;background: lightblue;">
											<?="Download";?>
										</a>
									<?php endif ?>
								</div>
							</div>
						</div>
						
							
						</div>
					</div>
					<div class="gdlr-core-pbf-sidebar-left gdlr-core-column-extend-left  logisco-sidebar-area gdlr-core-column-15 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 50px 0px 30px 0px;">
						<div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
							<div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget logisco-widget">
								<h3 class="logisco-widget-title"><?=$language["lan_words"][63];?></h3><span class="clear"></span>
								<div class="menu-services-container">
									<ul id="menu-services" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-box">
										<?php foreach ($approvals as $key => $approval): ?>
											<li class="<?=($approval->approvals_url == $currentPage["approvals_url"])?'menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5955 current_page_item menu-item-6652':'menu-item menu-item-type-post_type menu-item-object-page menu-item-6672';?>">
												<a href="<?=base_url("/home/approvals/".$approvalsTypeUrl."/".$approval->approvals_url); ?>"><?=$approval->approvals_name?></a>
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
