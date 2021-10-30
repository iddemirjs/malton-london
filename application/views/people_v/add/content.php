<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Portfolyo Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("people/save"); ?>" method="post" enctype="multipart/form-data">

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label>Ünvan</label>
                            <input class="form-control" placeholder="Ünvan Bilgisi" name="title">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Kategori</label>
                            <select name="category_id" class="form-control">
                                <?php foreach($categories as $category) { ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                                <?php } ?>
                            </select>
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("client"); ?></small>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                            <label>Linkedin</label>
                            <input class="form-control" placeholder="Linkedin Bilgisi" name="linkedin_url">
                    </div>
                    <div class="form-group col-md-6">
                            <label>Sıra</label>
                            <input class="form-control" placeholder="Sıra Bilgisi" name="rank">
                    </div>

                    <div class="form-group">
                        <label>Adı Soyad</label>
                        <input class="form-control" placeholder="Ad Soyad Giriniz" name="name" value="<?php echo isset($form_error) ? set_value("name") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>

                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
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
                    <a href="<?php echo base_url("people"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>