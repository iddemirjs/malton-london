<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->lan_long_name</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("language/update/$item->lan_id"); ?>" method="post">

                    <div class="form-group">
                        <label>Dil Adını giriniz</label>
                        <input class="form-control" placeholder="Dil Adını giriniz" name="lan_long_name" value="<?php echo isset($form_error) ? set_value("lan_long_name") : $item->lan_long_name; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_long_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Dil Kısaltması</label>
                        <input class="form-control" placeholder="Dil Kısaltması" name="lan_tag" value="<?php echo isset($form_error) ? set_value("lan_tag") : $item->lan_tag; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_tag"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Dil İkonu</label>
                        <input class="form-control"  placeholder="Dil İkonu" name="lan_flag_url" value="<?php echo isset($form_error) ? set_value("lan_flag_url") : $item->lan_flag_url; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("lan_flag_url"); ?></small>
                        <?php } ?>
                    </div>
                    <div>
                        <h5 style="display: inline-block;">Dil Kelimeleri</h5>
                        <div class="btn btn-outline btn-primary btn-xs pull-right add_word"> <i class="fa fa-plus"></i> Yeni Ekle</div>
                    </div>
                    <div class="form-group lan_words" style="height: 300px; overflow-y: scroll; border-radius: 8px;padding: 10px;border: 1px solid rgba(242,200,102,1);">
                        <?php $wordDecode = json_decode($item->lan_words,true);?>
                        <?php if (count($wordDecode)==0): ?>
                            <div style="width: 100%;height: 300px;background-color: lemonchiffon; display:flex;justify-content: center;align-items: center;">
                                Lütfen Developer ile Görüşünüz.
                            </div>
                        <?php endif ?>
                        <?php foreach ($wordDecode as $key => $value): ?>
                            <label class="lan_word_title"><?= $key; ?></label>
                            <input class="form-control lan_word_input" placeholder="<?= $key; ?> numaralı dil metini." name="json_array[<?= $key; ?>]" value="<?= htmlspecialchars($value); ?>">
                        <?php endforeach ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("language"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $(".add_word").click(function(event) {
            let number = $(".lan_word_title:last").text();
            alert(number);
            number++;
            $(".lan_words").append(`<label>${number}</label><input class="form-control" placeholder="${number} numaralı dil metini." name="json_array[${number}]" value="">`);
        });
    });
</script>