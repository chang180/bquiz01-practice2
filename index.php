<?php include_once "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-3.4.1.js"></script>
	<script src="./js/js.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<div id="main">
		<?php include "header.php"; ?>

		<div id="ms">
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">主選單區</span>

					<?php
					$main = $Menu->all(['parent' => 0, 'sh' => 1]);
					foreach ($main as $m) {


					?>
						<div class="mainmu">
							<a style="color:#000; font-size:13px; text-decoration:none;" href="<?= $m['text']; ?>">
								<?= $m['name']; ?>
							</a>
							<?php
							if ($Menu->count(['parent' => $m['id']]) > 0) {
								$subs = $Menu->all(['parent' => $m['id']]);
								foreach ($subs as $s) {
							?>

									<div class="mw" style="display:none">
										<div class="mainmu2">

											<a href="<?= $s['text']; ?>">
												<?= $s['name']; ?>
											</a>
										</div>
									</div>
							<?php
								}
							}
							?>

						</div>
					<?php
					}
					?>



				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 :<?= $total['total']; ?></span>
				</div>
			</div>

			<?php
			$do = $_GET['do'] ?? 'main';
			$file = sprintf("front/%s.php", $do);
			include file_exists($file) ? $file : "front/main.php";
			?>

			<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
				<!--右邊-->
				<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo('?do=login')">管理登入</button>
				<div style="width:89%; height:480px;" class="dbor cent">
					<span class="t botli">校園映象區</span>
					<div onclick="pp(1);"><img src="icon/up.jpg"></div>

					<div>
						<?php
						$imgs = $Image->all(['sh' => 1]);
						// var_dump($imgs);
						foreach ($imgs as $k => $i) {
							// echo $i['name'];
							echo "<div class='im' id='ssaa$k'>";
							echo "<img src='img/" . $i['name'] . "' style='width:150px;height:103px;border:3px solid orange;margin:1px;'>";
							echo "</div>";
						}


						?>
					</div>
					<div onclick="pp(2);"><img src="icon/dn.jpg"></div>




					<script>
						var nowpage = 0,
							num = <?= $Image->count(['sh' => 1]); ?>;

						function pp(x) {
							var s, t;
							if (x == 1 && nowpage - 1 >= 0) {
								nowpage--;
							}
							if (x == 2 && (nowpage + 1) * 3 <= num * 1 + 3) {
								nowpage++;
							}
							$(".im").hide()
							for (s = 0; s <= 2; s++) {
								t = s * 1 + nowpage * 1;
								$("#ssaa" + t).show()
							}
						}
						pp(1)
					</script>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
		<?php include "footer.php"; ?>
	</div>

</body>

</html>