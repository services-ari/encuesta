<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(!us_level){
		$reg_name    = isset($_POST['reg_name']) ? sc_sec($_POST['reg_name']) : '';
		$reg_pass    = isset($_POST['reg_pass']) ? sc_sec($_POST['reg_pass']) : '';
		$reg_email   = isset($_POST['reg_email']) ? sc_sec($_POST['reg_email']) : '';
		$reg_dni   = isset($_POST['reg_dni']) ? sc_sec($_POST['reg_dni']) : '';
		$reg_oficio   = isset($_POST['reg_oficio']) ? sc_sec($_POST['reg_oficio']) : '';

		if(empty($reg_name) || empty($reg_pass) || empty($reg_email)){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['required'])
			];
		} elseif(!preg_match('/^[\p{L}\' -]+$/u',$reg_name)){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['char_username'])
			];
		} elseif(strlen($reg_name) < 3 || strlen($reg_name) > 15){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['limited_username'])
			];
		} elseif(db_rows("users WHERE username = '".$reg_name."'")){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['exist_username'])
			];
		} elseif(strlen($reg_pass) < 6 || strlen($reg_pass) > 12){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['limited_pass'])
			];
		} elseif(!sc_check_email($reg_email)){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['check_email'])
			];
		} elseif(db_rows("users WHERE email = '".$reg_email."'")){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['exist_email'])
			];
		} elseif(db_rows("users WHERE dni = '".$reg_dni."'")){
			$alert = [
				'type'  =>'danger',
				'alert' => fh_alerts($lang['signup']['alert']['exist_dni'])
			];
		} else {
			$data = [
				'username'   => "{$reg_name}",
				'email'      => "{$reg_email}",
				'dni'      => "{$reg_dni}",
				'oficio'      => "{$reg_oficio}",
				'password'   => sc_pass($reg_pass),
				'date'       => time(),
				'level'      => "1"
			];

			db_insert("users", $data);

			$alert = [
					'type'  =>'success',
					'alert' => fh_alerts($lang['signup']['alert']['success'], 'success')
			];

		}

		echo json_encode($alert);
	}
}
