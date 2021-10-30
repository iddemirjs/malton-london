<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$menu->menu_name</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("menu/update/$menu->menu_id"); ?>" method="post">
                <div class="form-group">
                        <label for="control-demo-6" class="">Menu Seçiniz</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="menu_parent_id">
                                <option value="0">Ana Menü</option>
                                
                                <?php foreach($items as $item): ?>
                                <option value="<?php echo $item->menu_id; ?>"><?=($item->menu_name == "")?$item->menu_icon.(" (*İkon adı)"):$item->menu_name?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Menu Adı</label>
                        <input class="form-control" placeholder="Menu Adı" name="menu_name" value="<?php echo isset($form_error) ? set_value("menu_name") : $menu->menu_name; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("menu_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Menu Url</label>
                        <input class="form-control" placeholder="Menu Url" name="menu_url" value="<?php echo isset($form_error) ? set_value("menu_url") : $menu->menu_url; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("menu_url"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Menu Sıra</label>
                        <input class="form-control" placeholder="Menu Sıra" name="menu_priority" value="<?php echo isset($form_error) ? set_value("menu_priority") : $menu->menu_priority; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("menu_priority"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Menu Icon</label>
                        <input class="form-control" placeholder="Menu Icon" name="menu_icon" value="<?php echo isset($form_error) ? set_value("menu_icon") : $menu->menu_icon; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("menu_icon"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="control-demo-6" class="">Dil Seçiniz</label>
                        <div id="control-demo-6" class="">
                            <select class="form-control news_type_select" name="menu_language">
                                <?php foreach($language as $languages): ?>
                                <option value="<?php echo $languages->lan_id; ?>"><?php echo $languages->lan_tag; ?></option>
                                <?php endforeach?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("menu"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                   
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>