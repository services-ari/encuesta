<?php


include __DIR__."/header.php";
if(!us_level){
	echo "<div class='padding'>".fh_alerts("Ocurre algo!", "danger", path."/index.php")."</div>";
	include __DIR__."/footer.php";
	exit;
}

if($id && db_rows("users WHERE id = '{$id}'") && us_level == 6) {
	$sql = $db->query("SELECT * FROM ".prefix."users WHERE id = '{$id}'");
	$rs = $sql->fetch_assoc();

	$u_firstname = $rs['firstname'];
	$u_lastname = $rs['lastname'];
	$u_username = $rs['username'];
	$u_dni = $rs['dni'];
	$u_oficio = $rs['oficio'];
	$u_email = $rs['email'];
	$u_gender = $rs['gender'];
	$u_photo = $rs['photo'];
	$u_address = $rs['address'];
	$u_city = $rs['city'];
	$u_country = $rs['country'];
	$u_state = $rs['state'];
	$u_plan = $rs['plan'];
	$tttt = " (".$rs['username'].")";
} else {
	$u_firstname = us_firstname;
	$u_lastname = us_lastname;
	$u_dni = us_dni;
	$u_oficio = us_oficio;
	$u_username = us_username;
	$u_email = us_email;
	$u_gender = us_gender;
	$u_photo = us_photo;
	$u_address = us_address;
	$u_city = us_city;
	$u_country = us_country;
	$u_state = us_state;
	$u_plan = '';
	$tttt = '';
}

?>

<div class="pt-title">
	<h2>Hey! <?=$u_username?></h2>
	<h6>Comienza a editar tu perfil</h6>
</div>

<div class="pt-userdetails">
	<form class="pt-senduserdetails">
		<div class="file-upload">
		  <div class="file-select">
		    <div class="file-select-button" id="fileName"><?=$lang['details']['image_c']?></div>
		    <div class="file-select-name" id="noFile"><?=$lang['details']['image_n']?></div>
		    <input type="file" name="chooseFile" id="chooseFile">
		  </div>
		</div>
		<div id="thumbnails"><img src="<?=($u_photo ? $u_photo : nophoto)?>" onerror="this.src='<?=nophoto?>'" class="nophoto" /></div>
		<div class="row">
			<div class="col"><label><input type="text" name="reg_firstname" value="<?=$u_firstname?>" placeholder="<?=$lang['details']['firstname']?>" required/></label></div>
			<div class="col"><label><input type="text" name="reg_lastname" value="<?=$u_lastname?>" placeholder="<?=$lang['details']['lastname']?>" required/></label></div>
		</div>
		<div class="row">
					<label class="col"><input title="DNI" readonly="readonly" type="text" name="reg_dni" value="<?=$u_dni?>" placeholder="<?=$lang['details']['dni']?>" /></label>
					<label class="col"><input title="Tipo de usuario" readonly="readonly" type="text" name="reg_oficio" value="<?=$u_oficio?>" placeholder="<?=$lang['details']['oficio']?>" /></label>
		</div>
		<label><input type="text" name="reg_username" value="<?=$u_username?>" placeholder="<?=$lang['details']['username']?>" /></label>
		<label><input type="text" name="reg_email" value="<?=$u_email?>" placeholder="<?=$lang['details']['email']?>" /></label>
		<label><input type="password" name="reg_pass" placeholder="<?=$lang['details']['password']?>" /></label>
		<div class="form-inline">
			<div class="form-group">
				<input type="radio" name="reg_gender" id="sradio1" value="1" class="choice" <?=($u_gender == 1 ? 'checked' : '')?>>
				<label for="sradio1"><?=$lang['details']['male']?></label>
			</div>
			<div class="form-group">
				<input type="radio" name="reg_gender" id="sradio2" value="2" class="choice" <?=($u_gender == 2 ? 'checked' : '')?>>
				<label for="sradio2"><?=$lang['details']['female']?></label>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="pt-form-i pt-countries">
					<span class="pt-icon"><i class="flag-icon flag-icon-<?=($u_country?strtolower($u_country):'in')?>"></i></span>
					<select class="selectpicker" name="reg_country" plaveholder="<?=$lang['details']['country']?>" data-live-search="true">
						<?php foreach ($countries as $key => $value): ?>
							<option value="<?=$key?>" data-tokens="<?=$key?> <?=$value?>"<?=($key==$u_country?' selected':'')?>><?=$value?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="col">
				<input type="text" name="reg_state" value="<?=$u_state?>" placeholder="<?=$lang['details']['state']?>" required>
			</div>
			<div class="col">
				<input type="text" name="reg_city" value="<?=$u_city?>" placeholder="<?=$lang['details']['city']?>" required>
			</div>
		</div>
		<label hidden><input type="text" name=reg_address"" value="<?=$u_address?>" placeholder="<?=$lang['details']['address']?>"/></label>
		<?php if ( us_level == 6 ): ?>
		<div class="form-inline" hidden>
			<label class="mr-4"><b>Plan:</b></label>
			<?php
			$sql = $db->query("SELECT * FROM ".prefix."plans WHERE id != 0");
			while($v = $sql->fetch_assoc()):
			?>
			<div class="form-group" >
				<input class="choice" id="cb<?=$v['id']?>" value="<?=$v['id']?>" name="reg_plan" type="radio"<?=($u_plan == $v['id']-1 ? ' checked' : '')?>/>
				<label class="tgl-btn" for="cb<?=$v['id']?>"><?=$v['plan']?></label>
			</div>
			<?php
			endwhile;
			$sql->close();
			?>
		</div>

		<?php endif; ?>
		<div class="pt-link">
			<button type="submit" class="fancy-button bg-gradient5">
				<span><?=$lang['details']['button']?> <i class="fas fa-arrow-circle-right"></i></span>
			</button>
			<input type="hidden" name="reg_id" value="<?=($id ? $id : '')?>" />
			<input type="hidden" name="reg_photo" value="<?=$u_photo?>" />
		</div>
	</form>
</div>

<?php
include __DIR__."/footer.php";
?>
