<?php

class Message extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "message_v";

        $this->load->model("MyModel");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $items = $this->MyModel->get_alls("message",
            array(
                "mes_delete" => 0
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;
        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

     public function delete($id)
    {
        $this->load->model("MyModel");
        $delete = $this->MyModel->update(
            "message",
            array(
                "mes_id"    => $id
            ),
            array(
                "mes_delete"         => 1
            )
        );
        // TODO Alert Sistemi Eklenecek...
        if ($delete) {

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

        redirect(base_url("message"));
    }

}