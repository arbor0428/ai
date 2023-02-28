<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<link rel="stylesheet" href="/css/style.css">

<script>

function isFrmEmpty(form_element_name, msg)
{
	if(form_element_name.value == ""){
		alert(msg);
		form_element_name.focus();
		return true;
	}else{
		return false;
	}
}

function urldecode(str){
	return decodeURIComponent((str + '').replace(/%(?![\da-f]{2})/gi, function(){
		return '%25';
	}).replace(/\+/g, '%20'));
}


$(function(){
	$(".imgs li").click(function(){
		$(".imgs li").removeClass("active");
		$(this).addClass("active");
		var influencer_name = $(this).attr("id");
		$("#influencer_name").val(influencer_name);
	})
	$('input[type="number"]').on('keyup',function(){
        v = parseInt($(this).val());
        min = parseInt($(this).attr('min'));
        max = parseInt($(this).attr('max'));

        if (v < min){
            $(this).val(min);
        } else if (v > max){
            $(this).val(max);
        }
    })
	$(".search-cont").on("mousewheel", function (e) {
		var wheelDelta = e.originalEvent.wheelDelta;
		if (wheelDelta > 0) {
			console.log("up");
			$(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
		} else {
			console.log("down");
			$(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
		}
	});


})

function check_form(){

	form = document.frm01;
	if(isFrmEmpty(form.influencer_name, "인플루언서를 선택해 주십시오"))	return;
	if(isFrmEmpty(form.hashtag_keyword, "검색 키워드를 입력해 주십시오"))	return;
	if(isFrmEmpty(form.amount, "게시물 수를 입력해 주십시오"))	return;

	$(".loading-wrap").fadeIn()

		var influencer_name = $("#influencer_name").val();
		var hashtag_keyword = $("#hashtag_keyword").val();
		var amount = $("#amount").val();

	$.post('./curl.php',{'influencer_name':influencer_name,'hashtag_keyword':hashtag_keyword,'amount':amount}, function(cnt){
		
		if(cnt){
			cnt = urldecode(cnt);	
			parData = JSON.parse(cnt);
			if(parData.theft_url.length){
				
				$('.search-cont').html('')
				for(i=0; i<parData.theft_url.length; i++){	
					url = parData.theft_url[i];
					$('.search-cont').append('<div style="width:290px;height:580px;margin-right:20px;margin-bottom:20px;float:left;position:relative;"><div style="width:100%;height:100%;position:absolute;;"></div><iframe width="290" height="580" src="'+url+'embed"></iframe></div>')
				}
				$(".loading-wrap").fadeOut()
			}else{					
				$('.search-cont').html('')
				alert('검색조건에 맞는 주소가 없습니다.');
				$(".loading-wrap").fadeOut()
			}
		}
	})
}

</script>
<div class="wrap">
	<!--사이드메뉴-->
	<?
		$side_menu=1;	
		include './sideMenu.php';
		include './loading2.php';
	?>
	<!--//사이드메뉴-->

	<div class="container">
		<h2>데이터 업로드</h2>
		
		<form name='frm01' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">
		<input type='hidden' name='influencer_name' id='influencer_name' value="">

		<div class="col-2">
			<div class="inner">
				<p class="tit">업로드 데이터</p>
				<!--인플루언서 썸네일-->
				<div class="imgs-wrap">
					<ul class="imgs">
						<li style='background:url(/images/person01.jpeg) top center;background-size:cover;' id='smitruti1010'></li>
						<li style='background:url(/images/person02.jpeg) top center;background-size:cover;' id='babebani'></li>
						<li style='background:url(/images/person03.jpeg) top center;background-size:cover;' id='kkangs_one'></li>
						<li style='background:url(/images/person04.jpeg) top center;background-size:cover;' id='1004yul_i'></li>
						<li style='background:url(/images/person05.jpeg) top center;background-size:cover;' id='ddunmee'></li>
						<li style='background:url(/images/person06.jpeg) top center;background-size:cover;' id='daejin_doctor'></li>
						<li style='background:url(/images/person07.jpeg) top center;background-size:cover;' id='han_siyeon1122'></li>
						<li style='background:url(/images/person08.jpeg) top center;background-size:cover;' id='doremi_fit'></li>
						<li style='background:url(/images/person09.jpeg) top center;background-size:cover;' id='y__eonj'></li>
						
					</ul>
				</div>
				<!--//인플루언서 썸네일-->
				
				<div class="inner-sub">
					<p class="subtit">검색 키워드</p>
					<label for="hashtag_keyword">
						<input type="text" name="hashtag_keyword" id="hashtag_keyword" class="form-control" placeholder="키워드를 입력하세요.">
					</label>
					<!-- <button type="">추가</button> -->
					

					<p class="subtit">게시물 수</p>
					<label for="amount">
						<input type="number" name="amount" id="amount" class="form-control" placeholder="게시물 수를 입력하세요."min="1" max="100">
					</label>
					<!-- <button type="">입력</button> -->
				</div>

				<div class="btn-box">
					<!--
					<a href="#" class="btn01">검색 중</a>
					<a href="#" class="btn02">검색 중단</a>
					-->
					<a href="javascript:check_form()" class="btn01">
						<?
							//loading1,2,3 골라쓰세용
							//
						?>
						검색
					</a>
				</div>
			</div>
			<div class="inner">
				<p class="tit">도용 예상 피드</p>
				<div class="search-cont">
					검색 키워드를 추가하여 검색을 진행해주세요.
				</div>
			</div>
		</div>
		</form>
	</div>
</div>