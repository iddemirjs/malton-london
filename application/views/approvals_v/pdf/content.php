<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->approvals_name</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("approvals/pdf_add/$item->approvals_id"); ?>" method="post" enctype="multipart/form-data">

                    <div class="row">

                       
                        <label class="col-md-12 form-group image_upload_container"><?php  echo"$item->pdf_url" ?></label>

                        <div class="col-md-12 form-group image_upload_container">
                            <label>pdf Seçiniz</label>
                            <input type="file" name="pdf_url" class="form-control">
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary btn-md btn-outline">Ekle</button>
                    <a href="<?php echo base_url("approvals"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                   
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>