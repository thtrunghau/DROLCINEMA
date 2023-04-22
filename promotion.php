<?php

    require_once('./utils.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- link text type -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<!-- source -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<!-- link css -->
	<link rel="stylesheet" href="./css/promotion_style.css">
	<link rel="stylesheet" href="./css/nav.css">
	<link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/button.css">


	<title>Khyến mãi</title>
</head>
<body>
	<div id="pr">
		<div class="heading">
            <!-- Navbar -->
            <?php include_once('./navbar.php') ?>
        </div>
			<!--Content  -->
		<div id="content">
			<!-- header:start -->
			<div class="ds-line">
				<h1 class="titleLogin font-weight-70 header">Khuyến mãi</h1>
				<div class="ln-contain mg-bottom">
					<hr class ="ln mg-bottom">
				</div>
			</div>
			<!-- header:end -->
			<!-- body:start -->
			<div class="body container-fluid ">
				<?php
					$connect = connectData();
					$per_page_record = 12;  // Number of entries to show in a page.
					// Look for a GET variable page if not found default is 1.
					if (isset($_GET['page'])) {
						$page  = $_GET['page'];
					}
					else {
						$page = 1;
					}
					$start_from = ($page-1) * $per_page_record;
					$maxPage = $per_page_record + $start_from;
					$query = "SELECT anh,chuDe,noiDung FROM khuyenmai LIMIT $start_from, $maxPage";
					$select = getAllData($query,1);
					$countCol = 0;
				?>
				<div class="h-20">
					<?php foreach($select as $value):?>
						<?php if($countCol == 0){
							echo '<div class="row">';
						}?>
						<div class="col-12 col-sm-6 col-md-4 col-lg-3">
							<div class="card">
								<img src="./img/khuyenmai/khuyenmai.jpg" class="card-img-top img-scale" alt="">
								<div class="card-body">
									<h4 class="card-title overflow-text"><?php echo $value['chuDe'];?></h4>
									<p class="card-text overflow-text"><?php echo $value['noiDung'];?></p>
								</div>
							</div>
						</div>
						<?php if($countCol == 0){
							echo '<br>';
						}?>
						<?php if($countCol == 3){
							echo '</div>';
							$countCol = 0;
							print($countCol);
						}else{
							$countCol= $countCol + 1;
						}
						?>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="pages">
				<?php
					$query = "SELECT COUNT(*) as count FROM khuyenmai";
					$select1 = getAllData($query,1);
					$total_records = $select1[0]['count'];
					echo '</br>';
					// Number of pages required.
					$total_pages = ceil($total_records / $per_page_record);
					$pagLink = "";
					if($page>=2){
						echo "<a href=promotion.php?page=".($page-1)."> Prev </a>";
					}

					for ($i=1; $i<=$total_pages; $i++) {
						if ($i == $page) {
							$pagLink .= "<a class = `active` href=promotion.php?page=".$i.">".$i." </a>";
						}
						else  {
							$pagLink .= "<a href=promotion.php?page=".$i.">".$i." </a>";
						}
					};
					echo $pagLink;
					if($page<$total_pages){
						echo "<a href=promotion.php?page=".($page+1)."> Next </a>";
					}
				?>
			</div>
			</div>
			<!-- body:end -->
		</div>
			<!-- footer of page -->
		<?php include_once('./footer.php') ?>
	</div>
</body>
</html>