<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni E-posta Hesabı Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("address/save"); ?>" method="post">

                    <div class="form-group">
                        <label>Adını giriniz</label>
                        <input class="form-control" placeholder="Adını giriniz" name="title" value="<?php echo isset($form_error) ? set_value("title") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Adres</label>
                        <input class="form-control" placeholder="Adres" name="address" value="<?php echo isset($form_error) ? set_value("address") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("address"); ?></small>
                        <?php } ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("address"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>