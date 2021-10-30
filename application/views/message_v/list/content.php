<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Mesaj Listesi
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır.</p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-reorder"></i></th>
                        <th class="w50">#id</th>
                        <th>Adı</th>
                        <th>Email</th>
                        <th>Başlık</th>
                        <th>Mesaj</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("message/rankSetter"); ?>">

                        <?php foreach($items as $item) { ?>

                            <tr id="ord-<?php echo $item->mes_id; ?>">
                                <td class="order"><i class="fa fa-reorder"></i></td>
                                <td class="w50 text-center">#<?php echo $item->mes_id; ?></td>
                                <td><?php echo $item->mes_name; ?></td> 
                                <td><?php echo $item->mes_from; ?></td>     
                                <td><?php echo $item->mes_title; ?></td> 
                                <td><?php echo $item->mes_message; ?></td>                                                                  
                                <td class="text-center w200">
                                    <button
                                        data-url="<?php echo base_url("message/delete/$item->mes_id"); ?>"
                                        class="btn btn-sm btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                    
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>

            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>