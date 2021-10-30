<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Hizmet Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("services/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="control-demo-6" class="">Dil Seçiniz</label>
                            <div id="control-demo-6" class="">
                                <select class="form-control news_type_select" name="language">
                                    <?php foreach($language as $languages): ?>
                                    <option value="<?php echo $languages->lan_id; ?>"><?php echo $languages->lan_tag; ?></option>
                                    <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="control-demo-6" class="">Servis türü</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="services_type">
                                <?php foreach($menu as $menu): ?>
                                    <option value="<?php echo $menu->menu_name; ?>"><?php echo $menu->menu_name; ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="control-demo-6" class="">Servis Resim</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="service_img">
                                <?php foreach($img as $img): ?>
                                    <option value="<?php echo $img->id; ?>"><?php echo $img->title; ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("services"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>