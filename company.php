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
	<title>Предметы</title>
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
				<div class="col-12 align-items-center row">
					<div class="col-12">
						<h1 class="text-center">Предметы</h1> 
					</div>
					<div class="col-12 row align-items-center d-flex justify-content-center product_list">
					<?php 
						$categories = get_categories($link,"company");
					 ?>

					<?php foreach ($categories as $company): ?>
						<div class="wrapper p-3 mx-5 my-1 col-12 col-md-6 col-lg-4" data-sort="<?php echo $company['raiting_company']?>">
							<div class="row">
								<div class="col-12 p-2">
									<div class="col-12 p-2 d-flex flex-column align-items-center justify-content-between">
										<img <?=$company["photo_company"] ?> alt="prof" class="img-fluid">
										<h3><?=$company["name_company"]?></h3>
										<p><?=$company["describe_company"]?></p>
										<div class="col-12 row">
											<form method="POST" action="#" class="d-flex col-6">
												<input type="text" name="id" value='<?=$users["id"] ?>' class="d-none">
												<button type="submit" name="message" class="btn btn-primary mx-1 col-12">Подробнее</button>
											</form>
											<form method="POST" action="#" class="d-flex col-6">
												<input type="text" name="id" value='<?=$users["id"] ?>' class="d-none">
												<button type="submit" name="friends" class="btn btn-success mx-1 col-12">Вступить</button>
											</form>
										</div>
										
									</div>
								</div>
								
							</div>
						</div>								
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