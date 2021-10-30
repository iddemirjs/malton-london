<?php

class Approvals extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "approvals_v";

        $this->load->model("approvals_model");
        $this->load->model("language_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();
        

        $this->load->model("QueryRunner");
        $items=$this->QueryRunner->qBObj("SELECT `row`.`approvals_id` AS `approvals_id`, `approvals`.`approvals_name` AS `approvals_parent_name`, `row`.`approvals_name` AS `approvals_name`, `row`.`approvals_url`,`row`.`approvals_icon`, `row`.`approvals_icon`, `languages`.`lan_tag` AS `approvals_language_name`, `row`.`isActive` FROM `approvals_item` AS `approvals` RIGHT JOIN `approvals_item` AS `row` ON `row`.`approvals_parent_id`=`approvals`.`approvals_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`approvals_language`");
  
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){

        $viewData = new stdClass();
           /** Tablodan Verilerin Getirilmesi.. */
        $language = $this->language_model->get_all(
            array()
        );

        $this->load->model("QueryRunner");
        $items=$this->QueryRunner->qBObj("SELECT `row`.`approvals_name`,`languages`.`lan_tag`,`row`.`approvals_id`,`row`.`approvals_icon` FROM `approvals_item` AS `approvals` RIGHT JOIN `approvals_item` AS `row` ON `row`.`approvals_parent_id`=`approvals`.`approvals_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`approvals_language`");

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $viewData->items = $items;
        $viewData->language = $language;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function save(){

        $this->load->library("form_validation");

        // Kurallar yazilir..

        $this->form_validation->set_rules("approvals_parent_id", "Menü Seçiniz", "required|trim");
        $this->form_validation->set_rules("approvals_url", "Menü Url", "required|trim");
        $this->form_validation->set_rules("approvals_priority", "Menü sıra", "required|trim");
        $this->form_validation->set_rules("approvals_language", "Menü Dili", "required|trim");


        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            // Upload Süreci...

            $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

            $config["allowed_types"] = "jpg|jpeg|png";
            $config["upload_path"]   = "uploads/$this->viewFolder/";
            $config["file_name"] = $file_name;

            $this->load->library("upload", $config);

            $upload = $this->upload->do_upload("img_url");

            if($upload){

                $uploaded_file = $this->upload->data("file_name");


                $insert = $this->approvals_model->add(
                    array(
                        "approvals_name"           => $this->input->post("approvals_name"),
                        "approvals_parent_id"      => $this->input->post("approvals_parent_id"),
                        "approvals_priority"       => $this->input->post("approvals_priority"),
                        "approvals_url"            => $this->input->post("approvals_url"),
                        "img_url"                  => $uploaded_file,
                        "approvals_icon"           => $this->input->post("approvals_icon"),
                        "approvals_language"       => $this->input->post("approvals_language"),
                        "isActive"      => 1,
                    )
                );

                // TODO Alert sistemi eklenecek...
                if($insert){

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Kayıt başarılı bir şekilde eklendi",
                        "type"  => "success"
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                        "type"  => "error"
                    );
                }

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenirken bir problem oluştu",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("approvals/new_form"));

                die();

            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("approvals"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }


    public function update_form($id){

        $viewData = new stdClass();
        $language = $this->language_model->get_all(
            array()
        );

        $this->load->model("QueryRunner");
        $items=$this->QueryRunner->qBObj("SELECT `row`.`approvals_name`,`languages`.`lan_tag`,`row`.`approvals_id`,`row`.`approvals_icon` FROM `approvals_item` AS `approvals` RIGHT JOIN `approvals_item` AS `row` ON `row`.`approvals_parent_id`=`approvals`.`approvals_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`approvals_language`");

        /** Tablodan Verilerin Getirilmesi.. */
        $approvals = $this->approvals_model->get(
            array(
                "approvals_id"    => $id,
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->items = $items;
        $viewData->language = $language;
        $viewData->approvals = $approvals;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){

        $this->load->library("form_validation");

        // Kurallar yazilir..

        $this->form_validation->set_rules("approvals_parent_id", "Menü Seçiniz", "required|trim");
        $this->form_validation->set_rules("approvals_url", "Menü Url", "required|trim");
        $this->form_validation->set_rules("approvals_priority", "Menü sıra", "required|trim");
        $this->form_validation->set_rules("approvals_language", "Menü Dili", "required|trim");


        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            // Upload Süreci...
            if($_FILES["img_url"]["name"] !== "") {

                $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

                $config["allowed_types"] = "jpg|jpeg|png";
                $config["upload_path"] = "uploads/$this->viewFolder/";
                $config["file_name"] = $file_name;

                $this->load->library("upload", $config);

                $upload = $this->upload->do_upload("img_url");

                if ($upload) {

                    $uploaded_file = $this->upload->data("file_name");

                    $data = array(
                        "approvals_name"           => $this->input->post("approvals_name"),
                        "approvals_parent_id"      => $this->input->post("approvals_parent_id"),
                        "approvals_priority"       => $this->input->post("approvals_priority"),
                        "approvals_url"            => $this->input->post("approvals_url"),
                        "img_url"                  => $uploaded_file,
                        "approvals_icon"           => $this->input->post("approvals_icon"),
                        "approvals_language"       => $this->input->post("approvals_language"),
                        "isActive"      => 1,
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Görsel yüklenirken bir problem oluştu",
                        "type" => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("approvals/update_form/$id"));

                    die();

                }

            } else {

                $data = array(
                        "approvals_name"           => $this->input->post("approvals_name"),
                        "approvals_parent_id"      => $this->input->post("approvals_parent_id"),
                        "approvals_priority"       => $this->input->post("approvals_priority"),
                        "approvals_url"            => $this->input->post("approvals_url"),
                        "approvals_icon"           => $this->input->post("approvals_icon"),
                        "approvals_language"       => $this->input->post("approvals_language"),
                        "isActive"                 => 1,

                );

            }

            $update = $this->approvals_model->update(array("approvals_id" => $id), $data);

            // TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("approvals"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->approvals_model->get(
                array(
                    "approvals_id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

     public function pdf_form($id){

        $viewData = new stdClass();
        $viewData->item = $this->approvals_model->get(
            array(
                "approvals_id"    => $id,
            )
        );
        
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "pdf";
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }
     public function pdf_add($id){

         $file_name = convertToSEO(pathinfo($_FILES["pdf_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["pdf_url"]["name"], PATHINFO_EXTENSION);

                $config["allowed_types"] = "pdf|doc|docx";
                $config["upload_path"] = "uploads/$this->viewFolder/";
                $config["file_name"] = $file_name;

                $this->load->library("upload", $config);

                $upload = $this->upload->do_upload("pdf_url");

                if ($upload) {

                    $uploaded_file = $this->upload->data("file_name");

                    $data = array(
                        "pdf_url"                  => $uploaded_file,
                    );


                $update = $this->approvals_model->update(array("approvals_id" => $id), $data);

                if($update){

                    $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde silindi",
                    "type"  => "success"
                );

                } else {

                    $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt silme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }


        }else{
            $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Pdf yükleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
        }

           $this->session->set_flashdata("alert", $alert);
            redirect(base_url("approvals"));

    }

    public function delete($id){

        $delete = $this->approvals_model->delete(
            array(
                "approvals_id"    => $id
            )
        );

        // TODO Alert Sistemi Eklenecek...
        if($delete){

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde silindi",
                "type"  => "success"
            );

        } else {

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("approvals"));


    }

    public function isActiveSetter($id){

        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->approvals_model->update(
                array(
                    "approvals_id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

}
