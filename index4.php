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
		$side_menu=4;	
		include './sideMenu.php';
		include './loading2.php';
	?>
	<!--//사이드메뉴-->

	<div class="container">
		<div style="display: flex; align-items: center; justify-content: space-between; margin:0 20px 40px;">
			<div style="display: flex; align-items: center;">
				<h2>데이터셋 분할</h2>
				<div class="top_btn_wrap">
					<a class="btn02" href="" title="Files">Files</a>
					<a class="btn01" href="" title="실행">실행</a>
				</div>
			</div>
			<div class="sub_btn_wrap">
				<a href="" title="">Small</a>
				<a href="" title="">Medium</a>
				<a href="" title="">Large</a>
				<a href="" title="">XLarge</a>
			</div>
		</div>
		
		<form name='frm01' action="<?=$PHP_SELF?>" method='post' ENCTYPE="multipart/form-data">
		<input type='hidden' name='influencer_name' id='influencer_name' value="">

		<div class="col-2">
			<div class="inner">
				<p class="tit">업로드 데이터</p>
				<div class="search-cont">
					<ul class="i_img_result">
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
						<li>21_20210701_6544-0-1000</li>
					</ul>
				</div>
				
			</div>
			<div class="inner">
				<p class="tit">결과</p>
				<div class="result_show_img_wrap">
					<div class="video_wrap">
						
					</div>
					<div class="result_row_list">
						<div class="result_row">
							<div class="result_row_tit">LR</div>
							<div class="result_row_det">
								<input id="lr" type="text" value="0.01">
							</div>
						</div>
						<div class="result_row">
							<div class="result_row_tit">Batch</div>
							<div class="result_row_det">
								<input id="batch" type="text" value="16">
							</div>
						</div>
						<div class="result_row">
							<div class="result_row_tit">Epoch</div>
							<div class="result_row_det">
								<input id="epoch" type="text" value="100">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>



<!--로딩페이지-->
<div id="load">
    <img src="./images/loading.gif" alt="loading">
</div>
<style>
#load {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: fixed;
    display: block;
    opacity: 0.8;
    background: white;
    z-index: 99;
    text-align: center;
}

#load > img {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 100;
}
</style>
<script>
$(window).load(function() {
    $('#load').fadeOut(800);
});
</script>