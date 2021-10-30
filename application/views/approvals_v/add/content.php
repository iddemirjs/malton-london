<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Onay Hesabı Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("approvals/save"); ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="control-demo-6" class="">Onay Seçiniz</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="approvals_parent_id">
                                <option value="0">Ana Menü</option>
                                
                                <?php foreach($items as $item): ?>
                                <option value="<?php echo $item->approvals_id; ?>"><?=($item->approvals_name == "")?$item->approvals_icon.(" (*İkon adı)"):$item->approvals_name?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>approvals Adı</label>
                        <input class="form-control" placeholder="approvals Adı" name="approvals_name" value="<?php echo isset($form_error) ? set_value("approvals_name") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("approvals_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>approvals Url</label>
                        <input class="form-control" placeholder="approvals Url" name="approvals_url" value="<?php echo isset($form_error) ? set_value("approvals_url") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("approvals_url"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>approvals Sıra</label>
                        <input class="form-control" placeholder="approvals Sıra" name="approvals_priority" value="<?php echo isset($form_error) ? set_value("approvals_priority") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("approvals_priority"); ?></small>
                        <?php } ?>
                    </div>

                    
                    <div class="form-group">
                        <label>approvals Icon</label>
                        <input class="form-control" placeholder="approvals Icon" name="approvals_icon" value="<?php echo isset($form_error) ? set_value("approvals_icon") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("approvals_icon"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
                    </div>
                    

                    <div class="form-group">
                        <label for="control-demo-6" class="">Dil Seçiniz</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="approvals_language">
                                <?php foreach($language as $languages): ?>
                                <option value="<?php echo $languages->lan_id; ?>"><?php echo $languages->lan_tag; ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("approvals"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>