<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Eğitim Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("press/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input class="form-control" placeholder="Url" name="description">
                        
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label for="datetimepicker1">Haber Tarihi</label>
                            <input type="hidden" name="event_date" id="datetimepicker1" data-plugin="datetimepicker" data-options="{inline: true, viewMode: 'days', format : 'YYYY-MM-DD HH:mm:ss'}" />
                        </div><!-- END column -->

                        <div class="form-group image_upload_container col-md-8">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control">
                        </div>
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

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("press"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>