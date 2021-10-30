<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("people/update/$item->id"); ?>" method="post" enctype="multipart/form-data">

                    <div class="row">

                        <div class="form-group col-md-6">
                        <label>Ünvan</label>
                            <input class="form-control" placeholder="Ünvan Bilgisi" name="title" value="<?php echo (isset($form_error)) ? set_value("title") : $item->title; ?>">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                            <?php } ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kategori</label>

                            <select name="category_id" class="form-control">
                                <?php foreach($categories as $category) { ?>
                                    <?php $category_id = isset($form_error) ? set_value("category_id") : $item->category_id; ?>
                                    <option
                                        <?php echo ($category->id === $category_id) ? "selected" : ""; ?>
                                        value="<?php echo $category->id; ?>"><?php echo $category->title; ?></option>
                                <?php } ?>
                            </select>

                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("category_id"); ?></small>
                            <?php } ?>
                        </div>

                    </div>

                    <div class="form-group col-md-6">
                            <label>Linkedin</label>
                            <input class="form-control" placeholder="Linkedin Bilgisi" name="linkedin_url" value="<?php echo $item->linkedin_url; ?>">
                    </div>
                    <div class="form-group col-md-6">
                            <label>Sıra</label>
                            <input class="form-control" placeholder="Sıra Bilgisi" name="rank" value="<?php echo $item->rank; ?>">
                    </div>

                    <div class="form-group">
                        <label>Ad Soyad</label>
                        <input class="form-control" placeholder="Ad Soyad Giriniz" name="name" value="<?php echo isset($form_error) ? set_value("name") : $menu->menu_name; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}">
                            <?php echo (isset($form_error)) ? set_value("description") : $item->description; ?>
                        </textarea>
                    </div>

                    <div class="row">

                        <div class="col-md-1 image_upload_container">
                            <img src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-responsive">
                        </div>

                        <div class="col-md-9 form-group image_upload_container">
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
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("people"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>