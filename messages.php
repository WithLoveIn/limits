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
	<title>Сообщения</title>
</head>
<body>
	<?php include('header.php') ?>
	<main>
		<div class="row m-0">
			<div class="col-12 col-md-4 col-lg-3 p-0 d-flex align-items-md-center">
					<?php include('aside.php') ?>
				</div>
			<div class="main_section col-12 col-md-8 col-lg-9 p-0">
				
				<div class="col-12 d-flex flex-column align-items-center">
					<h1>Сообщения</h1> 
					<?php 
						$categories = get_categories($link,"friends");
					 ?>
					<div class="col-12 d-flex">
						<div class="col-4">
						<?php foreach ($categories as $friends): ?>
							<?php if (($friends["id_user"]== $_COOKIE['user'])||($friends["id_friend"]== $_COOKIE['user'])): ?>
								<?php 
									$categories2 = get_categories($link,"users");
									$id_friend=$friends["id_user"]== $_COOKIE['user']?$friends["id_friend"]:$friends["id_user"];

								?>
		 						<?php foreach ($categories2 as $users):?>
		 							<?php if ($users['id']==$id_friend):?> 
										<div class="wrapper p-3 my-1 col-12">
											<div class="row">
												<div class="col-12 p-2">
													<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
														<div class="d-flex">
															<img <?=$users["fotourl"] ?> alt="profile" class="img-fluid">

															<div class="mx-3">
																<p class="m-0"><?=$users["sername"] ?></p>
																<p class="m-0"><?=$users["name"] ?></p>
															</div>
															
															<button type="submit" id="<?php echo 'message'.$users['id']?>" name="message" class="btn btn-primary mx-1"onclick="<?php echo 'message('.$users['id'].')'?>">Написать сообщение</button>
														</div>
													</div>
												</div>
												

											</div>
										</div>
									<?php endif; ?>
								<?php endforeach; ?>	
							<?php endif; ?>
						<?php endforeach; ?>
						</div>
						<div class="col-8">
							<div class="wrapper p-3 my-1 col-12">
								<div class="row">
									<div class="col-12 p-2">
										<?php 
						$categories = get_categories($link,"users");
					 ?>
										<?php foreach ($categories as $users):?>
		 									<?php if ($users['id']==$_COOKIE['con']):?> 


										<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
											
											<div class="col-12 d-flex flex-column mt-2">
												
												<div id="cover">
													<div id="messages" class="mb-3"></div>	
												</div>
												<hr>
												<p><b>Введите ваше сообщение:</b></p>
												<textarea id="txtMessage" class="col-12" rows="4"></textarea>
												
												<button id="btnSend" class="btn btn-primary my-2">Отправить</button>
												
												
											</div>
										</div>
										<?php endif; ?>
								<?php endforeach; ?>	
									</div>
									

								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>	
		</div>		
	</main>


	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>