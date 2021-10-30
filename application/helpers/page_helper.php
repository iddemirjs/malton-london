<?php 
function getMenuItems()
{

	$mt = &get_instance();
	$mt->load->model("PagePreparer_model","PP");
	$menuitems=$mt->PP->get_all_arr("menu_item",[],["isActive"=>1,"menu_parent_id"=>0,"menu_language"=>$mt->session->userdata("language")["lan_id"]]);
	foreach ($menuitems as $key => $menu) {
		$sub=$mt->PP->get_all_arr("menu_item",[],["isActive"=>1,"menu_parent_id"=>$menu["menu_id"],"menu_language"=>$mt->session->userdata("language")["lan_id"]]);
		$menuitems[$key]["subItems"]=$sub;
	}

	return $menuitems;
}
 ?>