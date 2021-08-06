<div class="pt-login-c">

	<?php if(site_register): ?>
	<div class="pt-login pt-signup">
		<form id="pt-send-signup">
			<div class="pt-logo"><span><i class="fas fa-user-secret"></i></span><b>Registrate</b></div>

			<div class="pt-login-form">

					<div class="pt-form-i">
						<span class="pt-icon"><i class="far fa-user"></i></span>
						<input type="text" name="reg_name" placeholder="<?=$lang['signup']['username']?>">
					</div>

					<div class="pt-form-i">
						<span class="pt-icon"><i class="far fa-id-card"></i></span>
						<input type="text" name="reg_dni" placeholder="<?=$lang['signup']['dni']?>" maxlength="8" minlegth="8">
					</div>

					<div class="pt-form-i">
						<span class="pt-icon"><i class="fa fa-user"></i></span>
							<select class="seleccion"name="reg_oficio">
								<option value=""><?=$lang['signup']['oficio']?></option>
								<option value="estudiante">Estudiante</option>
								<option value="egresado">Egresado</option>
								<option value="docente">Docente</option>
								<option value="padre">Padre</option>
								<option value="trabajador">Trabajador</option>
							</select>
					</div>

					<div class="pt-form-i">
						<span class="pt-icon"><i class="fas fa-key"></i></span>
						<input type="password" name="reg_pass" placeholder="<?=$lang['signup']['password']?>">
					</div>
					<div class="pt-form-i">
						<span class="pt-icon"><i class="far fa-envelope"></i></span>
						<input type="text" name="reg_email" placeholder="<?=$lang['signup']['email']?>">
					</div>

				<div class="pt-login-footer">
						<button type="submit" class="pt-btn"><?=$lang['signup']['button']?></button>
				</div>

			</div>
			<div class="pt-footer">
				<?=$lang['signup']['footer']?> <a href="#" class="clickme2"><?=$lang['signup']['footer_l']?></a>
			</div>
		</form>
	</div>
	<?php endif; ?>

<div class="pt-login pt-signin">
	<form id="pt-send-signin">
		<div class="pt-logo"><span><i class="fas fa-user-secret"></i></span><b>Bienvenido</b></div>
		<div class="pt-login-form">
			<div class="pt-form-i">
				<span class="pt-icon"><i class="far fa-user"></i></span>
				<input type="text" name="sign_name" placeholder="<?=$lang['login']['username']?>">
			</div>
			<div class="pt-form-i">
				<span class="pt-icon"><i class="fas fa-key"></i></span>
				<input type="password" name="sign_pass" placeholder="<?=$lang['login']['password']?>">
			</div>
			<div class="pt-login-footer">
				<div class="form-row">
					<div class="col">
						<div class="form-group">
							<input type="checkbox" name="login_type" value="1" id="s1" class="choice">
							<label for="s1"><?=$lang['login']['keep']?></label>
						</div>
					</div>
					<div class="col">
						<button type="submit" class="pt-btn"><?=$lang['login']['button']?></button>
					</div>
				</div>
			</div>

		</div>
		<?php if(site_register): ?>
		<div class="pt-footer">
			<?=$lang['login']['footer']?> <a href="#" class="clickme"><?=$lang['login']['footer_l']?></a>
		</div>
		<?php endif; ?>
	</form>
</div>



</div>
<?php
include __DIR__."/scripts.php";
?>
