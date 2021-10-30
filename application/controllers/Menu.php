<?php

class menu extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "menu_v";

        $this->load->model("menu_model");
        $this->load->model("language_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();
        

        $this->load->model("QueryRunner");
        $items=$this->QueryRunner->qBObj("SELECT `row`.`menu_id` AS `menu_id`, `menu`.`menu_name` AS `menu_parent_name`, `row`.`menu_name` AS `menu_name`, `row`.`menu_url`,`row`.`menu_icon`, `row`.`menu_icon`, `languages`.`lan_tag` AS `menu_language_name`, `row`.`isActive` FROM `menu_item` AS `menu` RIGHT JOIN `menu_item` AS `row` ON `row`.`menu_parent_id`=`menu`.`menu_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`menu_language`");
  
        
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
        $items=$this->QueryRunner->qBObj("SELECT `row`.`menu_name`,`languages`.`lan_tag`,`row`.`menu_id`,`row`.`menu_icon` FROM `menu_item` AS `menu` RIGHT JOIN `menu_item` AS `row` ON `row`.`menu_parent_id`=`menu`.`menu_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`menu_language` WHERE `row`.`menu_parent_id`=0");

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
        $this->form_validation->set_rules("menu_parent_id", "Menü Seçiniz", "required|trim");
        $this->form_validation->set_rules("menu_url", "Menü Url", "required|trim");
        $this->form_validation->set_rules("menu_priority", "Menü sıra", "required|trim");
        $this->form_validation->set_rules("menu_language", "Menü Dili", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"    => "<b>{field}</b> alanı doldurulmalıdır",
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            $insert = $this->menu_model->add(
                array(
                    "menu_name"           => $this->input->post("menu_name"),
                    "menu_parent_id"      => $this->input->post("menu_parent_id"),
                    "menu_priority"       => $this->input->post("menu_priority"),
                    "menu_url"            => $this->input->post("menu_url"),
                    "menu_icon"           => $this->input->post("menu_icon"),
                    "menu_language"       => $this->input->post("menu_language"),
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

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("menu"));

            die();

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
        $items=$this->QueryRunner->qBObj("SELECT `row`.`menu_name`,`languages`.`lan_tag`,`row`.`menu_id`,`row`.`menu_icon` FROM `menu_item` AS `menu` RIGHT JOIN `menu_item` AS `row` ON `row`.`menu_parent_id`=`menu`.`menu_id` INNER JOIN `languages` ON `languages`.`lan_id`= `row`.`menu_language` WHERE `row`.`menu_parent_id`=0");

        /** Tablodan Verilerin Getirilmesi.. */
        $menu = $this->menu_model->get(
            array(
                "menu_id"    => $id,
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->items = $items;
        $viewData->language = $language;
        $viewData->menu = $menu;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){

        $this->load->library("form_validation");

       // Kurallar yazilir..
       $this->form_validation->set_rules("menu_parent_id", "Menü Seçiniz", "required|trim");
       $this->form_validation->set_rules("menu_url", "Menü Url", "required|trim");
       $this->form_validation->set_rules("menu_priority", "Menü sıra", "required|trim");
       $this->form_validation->set_rules("menu_language", "Menü Dili", "required|trim");

       $this->form_validation->set_message(
           array(
               "required"    => "<b>{field}</b> alanı doldurulmalıdır",
           )
       );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            // Upload Süreci...
            $update = $this->menu_model->update(
                array("menu_id" => $id),
                array(
                    "menu_name"           => $this->input->post("menu_name"),
                    "menu_parent_id"      => $this->input->post("menu_parent_id"),
                    "menu_priority"       => $this->input->post("menu_priority"),
                    "menu_url"            => $this->input->post("menu_url"),
                    "menu_icon"           => $this->input->post("menu_icon"),
                    "menu_language"       => $this->input->post("menu_language"),
                    "isActive"      => 1,
                )
            );

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

            redirect(base_url("menu"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->menu_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function delete($id){

        $delete = $this->menu_model->delete(
            array(
                "menu_id"    => $id
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
        redirect(base_url("menu"));


    }

    public function isActiveSetter($id){

        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->menu_model->update(
                array(
                    "menu_id"    => $id
                ),
                array(
                    "isActive"  => $isActive
                )
            );
        }
    }

}
