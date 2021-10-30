<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            E-posta Listesi
            <a href="<?php echo base_url("approvals/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("approvals/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="w50">#id</th>
                        <th>Onay Adı</th>
                        <th>Onay Url</th>
                        <th>Üst Menü</th>
                        <th>Menü Dil</th>
                        <th>İkon</th>
                        <th>Aktif</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>

                        <?php foreach($items as $item) { ?>

                            <tr>
                                <td class="w50 text-center">#<?php echo $item->approvals_id; ?></td>
                                <td class="text-center"><?php echo $item->approvals_name; ?></td>
                                <td class="text-center"><?php echo $item->approvals_url; ?></td>
                                <td class="text-center"><?php echo $item->approvals_parent_name; ?></td>
                                <td class="text-center"><?php echo $item->approvals_language_name; ?></td>
                                <td class="text-center"><?php echo $item->approvals_icon; ?></td>
                                <td class="text-center w100">
                                    <input
                                        data-url="<?php echo base_url("approvals/isActiveSetter/$item->approvals_id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="text-center w150">
                                    <button
                                        data-url="<?php echo base_url("approvals/delete/$item->approvals_id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                    <a href="<?php echo base_url("approvals/update_form/$item->approvals_id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                    <a href="<?php echo base_url("approvals/pdf_form/$item->approvals_id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Pdf Ekle</a>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>