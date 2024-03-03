<?php 
	require_once 'database.php';
	require_once 'function.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<?php include('css.php') ?>
	<title>Регистрация</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">		
			<div class="main_section col-12">
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Регистрация</h1> 
					<div class="wrapper p-3">					
						<form method="post"	id="form_reg" action="check_registrate.php">
							<div class="d-flex row align-items-center m-0" id="block-form-registration">
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Email</b></label>
								<input type="email" name="reg_email" id="reg_email" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Пароль</b></label>
								<input type="password" name="reg_pass" id="reg_pass" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Фамилия</b></label>
								<input type="text" name="reg_sername" id="reg_sername" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
		 						<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Имя</b></label>
								<input type="text" name="reg_name" id="reg_name" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Отчество</b></label>
								<input type="text" name="reg_patron" id="reg_patron" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Адрес</b></label>
								<input type="text" name="reg_adress" id="reg_adress" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Телефон</b></label>
								<input type="text" name="reg_phone" id="reg_phone" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Дата рождения</b></label>
								<input type="date" name="reg_birthday" id="reg_birthday" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<label for="" class="col-12 col-sm-5 d-flex justify-content-sm-end mb-0 pl-1 pb-sm-2"><b>Ссылка на фото</b></label>
								<input type="file" name="reg_photo" multiple accept="image/*,image/jpeg" id="reg_photo" class="col-12 col-sm-6 mx-1 col-md-5 col-lg-4" required>
								<div class="mt-2 col-6 offset-3 row justify-content-center p-0">
									<button type="submit" class="btn btn-danger btn-lg" name="reg_submit" id="form_submit">Регистрация</button>
								</div>	
							</div>
						</form>
					</div>		
				</div>
			</div>	
		</div>	
	</main>

	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>