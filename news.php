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
	<title>Новости</title>
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
					<h1>Новости</h1> 
					
					<div class="wrapper p-3 mx-5 my-1 col-12 col-md-8">
						<div class="row">
							<form method="POST" action="add_news.php" class="d-flex flex-column col-12">
								<div class="d-flex">
									<div class="col-8 d-flex flex-column justify-content-end p-2">
										<h4>Текст новости</h4>
										<textarea id="textnews" name="textnews"></textarea>
			
										
									</div>
									<div class="col-4 d-flex flex-column p-2">
										<h4>Фото</h4>
										<input type="file" name="photourl" multiple accept="image/*,image/jpeg" id="photourl" class="btn btn-success">
									</div>
								</div>
								
							<button class="mt-3 btn btn-primary">Добавить новость</button>
							</form>
						</div>		
					</div>

					<?php 
						$categories = get_categories($link,"news");
					?>

					<?php foreach ($categories as $news): ?>
						<div class="wrapper p-3 mx-5 my-1 col-12 col-md-8">
							<div class="row">
								<div class="col-12 col-md-6 p-2">
									<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
										<img <?=$news["photourl"] ?> alt="prof" class="img-fluid">
									</div>
								</div>
								<div class="col-12 col-md-6 p-2 row flex-column justify-content-between">
									<div class="p-0">
										<div class="col-12 p-2 d-flex row m-0">
											<?php 
												$categories = get_categories($link,"users");
											?>

											<?php foreach ($categories as $users): ?>
												<?php if ($users["id"]== $news["id_user"]): ?>
													<div class="col-6">
														<h4><?=$users["sername"] ?></h4>
														<h4><?=$users["name"] ?></h4>
													</div>	
													
												<?php endif; ?>
											<?php endforeach; ?>	
											<h4 class="col-6"><?=$news["date_time"] ?></h4>			
										</div>
										<div class="col-12 p-2 d-flex">
											<p><?=$news["textnews"] ?></p>			
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<button class="btn btn-transparant" onclick="<?php echo 'heart('.$news['id'].')'?>"><img id="<?php echo 'heart'.$news['id']?>" src="img/heart.png" alt="heart" height="50px"></button>
									</div>
								</div>
							</div>		
						</div>
					<?php endforeach; ?>
									
											
				</div>
			</div>	
		</div>		
	</main>


	<?php include('footer.php') ?>
	<?php include('script.php') ?>
</body>
</html>