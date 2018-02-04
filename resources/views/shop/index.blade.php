
@extends('layout.master')
@section('src')

@endsection

@section('content')


<div class="container-fruid parallax1" id="particles-js"> 
	<div id = "layoutImg1"></div>
	<div class="caption col-md-9">
		<div class ="upper" style="font-size: 60px;"><i class="fas fa-user"></i>  WELCOM MINH LONG </div>
		<div  style="font-size: 40px;">Đc: Khu công nghiệp Tiền Hải - Thái Bình </div>
	</div>
	<div class="row premium-frame" >
		<div class="col-md-3" height="100px" style=" margin-right:30px;" id ="frame1"> 
			<img src="{{URL::asset('img/premium-icon.png')}}" class ="center-col" style="margin-bottom: 25px;">
			<h3 class ="premium-text">Uy Tín</h3>
			<p class ="premium-text">Với hơn 10 năm phát triển, chúng tôi luôn đặt niềm tin của khách hàng lên hàng đầu</p>
		</div>
		<div class="col-md-3" height="100px" style=" margin-right:30px;" id ="frame2">
			<img src="{{URL::asset('img/premium-icon2.png')}}" class ="center-col" style="margin-bottom: 25px;">
			<h3 class ="premium-text">Chất Lượng</h3>
			<p class ="premium-text" >Sản phẩm luôn được gia công bởi những công nhân có tay nghề cao, giàu kinh nghiệm</p>
		</div>
		<div class="col-md-3" height="100px" style="margin-right:30px;" id ="frame3">
			<img src="{{URL::asset('img/premium-icon3.png')}}" class ="center-col" style="margin-bottom: 25px;">
			<h3 class ="premium-text" >Đánh giá</h3>
			<p class ="premium-text">Đạt tiêu chuẩn ISO 9001 - 2015 được đánh giá cao trong và ngoài nước</p>
		</div>
	</div>
</div>
<div class="container-fruid parallax2" >
	<div id="layoutImg2">
		
	</div>
</div>
<div class="container-fruid parallax3">
	<div id="layoutImg3">
		
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function() {
			if ($(document).scrollTop() > 50) {
				//-----------FRAME 3--------------
				$('#frame3').css ('transform','translateY(-75px)');
				$('#frame3').css ('transition','transform 1s');
				//-----------FRAME 2--------------
				$('#frame2').css ('transform','translateY(-35px)');
				$('#frame2').css ('transition','transform 1s');
				//-----------FRAME 1--------------
				$('#frame1').css ('transform','translateY(-5px)');
				$('#frame1').css ('transition','transform 1s');
			}else{
				//-----------FRAME 3--------------
				$('#frame3').css ('transform','initial');
				$('#frame3').css ('transition','transform 1s');
				//-----------FRAME 2--------------
				$('#frame2').css ('transform','initial');
				$('#frame2').css ('transition','transform 1s');
				//-----------FRAME 1--------------
				$('#frame1').css ('transform','initial');
				$('#frame1').css ('transition','transform 1s');
			}
		});
	});
</script>
<script defer type="text/javascript" src="{{URL::asset('particles/particles.js')}}"></script>
<script defer type="text/javascript" src="{{URL::asset('particles/app.js')}}"></script>

@endsection