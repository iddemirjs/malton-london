<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni E-posta Hesabı Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("language/save"); ?>" method="post">

                    <div class="form-group">
                        <label>Dil Adını giriniz</label>
                        <input class="form-control" placeholder="Dil Adını giriniz" name="lan_long_name" value="<?php echo isset($form_error) ? set_value("lan_long_name") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_long_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Dil Kısaltması</label>
                        <input class="form-control" placeholder="Dil Kısaltması" name="lan_tag" value="<?php echo isset($form_error) ? set_value("lan_tag") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_tag"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Dil İkonu</label>
                        <input class="form-control"  placeholder="Dil İkonu" name="lan_flag_url" value="<?php echo isset($form_error) ? set_value("lan_flag_url") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_flag_url"); ?></small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("language"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>