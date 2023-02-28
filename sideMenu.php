<?
	$side[$side_menu]="menu-active";
	$side02[$side_menu02]="menu-active";
?>


<div class="sidebar">
	<h1 class="logo">
		<img src="/images/logo.png" style="max-width:100%">
	</h1>

	<ul class="menu">
		<li>
			<a>Search</a>
			<ul class="menu-depth">
				<li class="<?=$side[1]?>"><a href="./index1.php" title="데이터 업로드">데이터 업로드</a></li>
				<li class="<?=$side[2]?>">
					<a href="javascript:avoid(0)" title="데이터 정제">데이터 정제</a>
					<ul class="depth2">
						<li class="<?=$side02[1]?>"><a href="./index2_1.php" title="표준화">표준화</a></li>
						<li class="<?=$side02[2]?>"><a href="./index2_2.php" title="음영반전">음영반전</a></li>
					</ul>
				</li>
				<li class="<?=$side[3]?>"><a href="./index3.php" title="데이터셋 분할">데이터셋 분할</a></li>
				<li class="<?=$side[4]?>"><a href="./index4.php" title="모델 학습">모델 학습</a></li>
				<li class="<?=$side[5]?>"><a href="./index5.php" title="모델 테스트">모델 테스트</a></li>
			</ul>
		</li>
	</ul>

	<div class="admin-info">
		<div class="user-thumb"></div>
		<div class="user-name">Admin_1</div>
		<a href="#">로그아웃</a>
	</div>
</div>

<script>
	$(".menu-depth > li > a").click(function() {

		$('.menu-depth > li .depth2').slideUp();
		$(this).siblings('.depth2').slideToggle();
		

	});
</script>