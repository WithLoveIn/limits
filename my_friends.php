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
	<title>Мои друзья</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="col-12 col-md-4 col-lg-3 p-0 d-flex align-items-md-center">
					<?php include('aside.php') ?>
				</div>
			<div class="main_section col-12 col-md-8 col-lg-9 p-0">
				<?php include('block-parameter.php') ?>
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Мои друзья</h1>
					<div class="row product_list m-0 justify-content-center"> 
					<?php 
						$categories = get_categories($link,"friends");
					 ?>

					<?php foreach ($categories as $friends): ?>
						<?php if (($friends["id_user"]== $_COOKIE['user'])||($friends["id_friend"]== $_COOKIE['user'])): ?>
							<?php 
								$categories2 = get_categories($link,"users");
								$id_friend=$friends["id_user"]== $_COOKIE['user']?$friends["id_friend"]:$friends["id_user"];

							?>
	 						<?php foreach ($categories2 as $users):?>
	 							<?php if ($users['id']==$id_friend):?> 
									<div class="wrapper p-3 mx-5 my-1 col-12 col-md-8" data-sort="<?php echo $friends['raiting']?>">
										<div class="row">
											<div class="col-12 col-md-6 p-2">
												<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
													<img <?=$users["fotourl"] ?> alt="prof" class="img-fluid">
												</div>
											</div>
											<div class="col-12 col-md-6 p-2 align-items-center row">
												<div class="col-12 p-2 d-flex align-items-center row">
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Фамилия:</h4>
													<h4 class="col-12 col-sm-6 px-3"><?=$users["sername"] ?></h4>
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Имя:</h4>
													<h4 class="col-12 col-sm-6 px-3"><?=$users["name"] ?></h4>
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Отчество:</h4>
													<h4 class="col-12 col-sm-6 px-3"><?=$users["patron"] ?></h4>
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Дата рождения:</h4>
													<h4 class="col-12 col-sm-6 px-3"><?=$users["birthday"] ?></h4>
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Адрес:</h4>
													<h4 class="col-12 col-sm-6 px-3"> <?=$users["adress"] ?></h4>
													<h4 class="col-12 col-sm-6 px-3 text-sm-end">Телефон:</h4>
													<h4 class="col-12 col-sm-6 px-3"><?=$users["phone"] ?></h4>
												</div>
												
												<form method="POST" action="messages.php" class="d-flex col-6">
													<input type="text" name="id" value='<?=$users["id"] ?>' class="d-none">
													<button type="submit" name="message" class="btn btn-primary mx-1 col-12">Написать сообщение</button>
												</form>
												<form method="POST" action="delete_friends.php" class="d-flex col-6">
													<input type="text" name="id" value='<?=$users["id"] ?>' class="d-none">
													<button type="submit" name="friends" class="btn btn-danger mx-1 col-12">Удалить из друзей</button>
												</form>
											</div>

										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>	
						<?php endif; ?>
					<?php endforeach; ?>
					</div>						
				</div>
			</div>	
		</div>		
	</main>


	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>