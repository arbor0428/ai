<link rel="stylesheet" href="/css/style.css">


<div class="wrap">
	<!--사이드메뉴-->
	<?
		$side_menu=2;	
		include './sideMenu.php';
	?>
	<!--//사이드메뉴-->

	<div class="container">
		<h2>불법도용 탐지</h2>

		<div class="col-2">
			<div class="inner">
				<p class="tit">상품 선택</p>
				<!--상품 썸네일-->
				<div class="imgs-wrap">
					<ul class="imgs">
						<li><img src="/images/beauness.png"></li>
						<li><img src="/images/decorte.png"></li>
						<li><img src="/images/maybelline.png"></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<!--//상품 썸네일-->
				
				<div class="inner-sub">
					<p class="subtit">검색 키워드</p>
					<form class="form-box">
						<label for="">
							<input tpye="text" name="" id="" class="form-control" placeholder="키워드를 입력하세요.">
						</label>
						<button type="">추가</button>
					</form>

					<p class="subtit">게시물 수</p>
					<form class="form-box">
						<label for="">
							<input tpye="text" name="" id="" class="form-control" placeholder="숫자를 입력하세요.">
						</label>
						<button type="">입력</button>
					</form>
				</div>

				<div class="btn-box">
					<!--
					<a href="#" class="btn01">검색 중</a>
					<a href="#" class="btn02">검색 중단</a>
					-->
					<a href="#" class="btn01">검색</a>
				</div>
			</div>
			<div class="inner">
				<p class="tit">도용 예상 피드</p>

				<div class="search-cont">
					<?
						//loading1,2,3 골라쓰세용
						include './loading.php';
					?>
					검색 키워드를 추가하여 검색을 진행해주세요.

					
				</div>
			</div>
		</div>
	</div>
</div>