

<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
	$arr = array(
		'properties' => array(
			array(
				'property' => 'address',
				'value' => $_POST['address']
			),
			array(
				'property' => 'firstname',
				'value' => $_POST['name']
			),
			array(
				'property' => 'phone',
				'value' => $_POST['phone']
			),
			array(
				'property' => 'note',
				'value' => $_POST['note']
			),
			array(
				'property' => 'aff_source',
				'value' => $_POST['aff_source']
			),
			array(
				'property' => 'aff_sid',
				'value' => $_POST['aff_sid']
			),
			array(
				'property' => 'identifier',
				'value' => $t
			),
			array(
				'property' => 'hs_lead_status',
				'value' => "NEW"
			)
		)
	);

	$post_json = json_encode($arr);

	$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=707c5382-1bd3-4947-84fc-021c860a83f5";
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch);
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errors = curl_error($ch);
	@curl_close($ch);

	if ($status_code == 200) {
		header('Location: thank.php');
		die();
	}else{
		$message = 'Lỗi 405';
	}
}
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	 <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Cerma</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Bootstrap  -->
	<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

	<!-- Theme Style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	
	<!-- Animation Style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

	<!-- Font Google -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

	<!-- Favicon and touch icons  -->
	<link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon">
</head>

<body class="one-page">

	<!-- Header -->
    <header id="header" class="header site-header header-sticky">
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="logo" class="logo" style="margin: 18px 0 0 0px;">
							<a href="#" title="cerma">
								<img class="site-logo" src="images/logo.png" width="148" height="24" alt="cerma">
							</a>
						</div>
                        <!-- /.logo -->
                    </div>
                    <!-- /.span2 -->
                    <div class="col-md-10">
                        <div class="btn-menu"></div>
                        <!-- //mobile menu button -->
                        <nav id="mainnav" class="mainnav" role="navigation">
                            <ul id="menu-main-menu" class="menu">
                                <li><a href="#gioithieu">Giới thiệu</a></li>
                                <li><a href="#congdung">Công dụng</a></li>
                                <li><a href="#hdsd">Hướng dẫn sử dụng</a></li>
                                <li><a href="#nhanxet">Nhận xét</a></li>
                                <li><a href="#dathang">Đặt hàng</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.span10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-wrap -->
    </header>
    <!-- /header -->

	<!--about-->
	<section id="slider" class="section ewm-sldier" data-height="813">
		<div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>    
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-title="Intro Slide">
                        <img src="images/slider-1.jpg" alt="slider-image" />
                        <div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="280" data-y="226" data-speed="0" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 54px;
						    line-height: 45px;
						    font-size: 45px;
						    font-family: TeXGyreHerosCondensed-Bold;
						    color: rgb(255,255,255);
						    text-decoration: none;
						    text-transform: uppercase;
						    background-color: transparent;
						    border-width: 0px;
						    border-color: rgb(34,34,34);
						    border-style: none;">Engine Treatment Motorcycle</div>

						<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="318" data-y="288" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 18px;
						    font-size: 30px;
						    line-height: 30px;
						    font-family: arial;
						    color: rgb(255,255,255);
						    text-decoration: none;
						    background-color: transparent;
						    border-width: 0px;
						    color: #939598;
						    border-style: none;">Sản phẩm xử lý, phục hồi động cơ xe máy</div>

						<a class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="510" data-y="370" data-speed="1200" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" href="#dathang" style="    font-size: 18px;
						height: 55px;
						    line-height: 55px;
						    font-weight: 400;
						    font-family: roboto;
						    color: #de3c3c;
						    background-color: transparent;
						    padding: 0px 50px;
						    border-width: 0px;
						    border: 1px solid #de3c3c;">MUA NGAY </a> 
                    </li>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-title="Intro Slide">
                        <img src="images/slider-2.jpg" alt="slider-image" />
                        <div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="280" data-y="226" data-speed="0" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 54px;
						    line-height: 45px;
						    font-size: 45px;
						    font-family: TeXGyreHerosCondensed-Bold;
						    color: rgb(255,255,255);
						    text-decoration: none;
						    text-transform: uppercase;
						    background-color: transparent;
						    border-width: 0px;
						    border-color: rgb(34,34,34);
						    border-style: none;">Engine Treatment Motorcycle</div>

						<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="318" data-y="288" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 18px;
						    font-size: 30px;
						    line-height: 30px;
						    font-family: arial;
						    color: rgb(255,255,255);
						    text-decoration: none;
						    background-color: transparent;
						    border-width: 0px;
						    color: #939598;
						    border-style: none;">Sản phẩm xử lý, phục hồi động cơ xe máy</div>

						<a class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="510" data-y="370" data-speed="1200" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" href="#dathang" style="    font-size: 18px;
						height: 55px;
						    line-height: 55px;
						    font-weight: 400;
						    font-family: roboto;
						    color: #de3c3c;
						    background-color: transparent;
						    padding: 0px 50px;
						    border-width: 0px;
						    border: 1px solid #de3c3c;">MUA NGAY </a> 
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>  
            </div>
        </div>  
	</section><!--/.about-section-->

	<section id="gioithieu" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="ewm-titlebox">
						<span class="number">.01</span>
						<h1 class="title"><span class="ewm-color">CARME</span> LÀ GÌ?</h1>
						<span class="sub-title">Xe của bạn phát ra tiếng kêu lớn từ động cơ </span>
						<p>Nguyên nhân chủ yếu do động cơ có quá nhiều mảng bám Cacbon, hợp chất thừa trong nhiên liệu khi đốt cháy. Động cơ hoạt động lâu ngày ma sát làm cho bề mặt kim loại bên trong bị xước, bề mặt không còn phẳng mịn, làm ma sát tăng lên, động cơ nóng quá mức chịu đựng. Dẫn đến hiệu suất giảm, tiếng ồn và độ rung ngày càng cao.<br><br>
Với những trường hợp như vậy, sau quãng đường đi 40.000 - 50.000km chắc cắn bạn sẽ phải đi bảo dưỡng lớn. ÍT thì thay một vài bộ phận, nhiều thì phải bổ máy, làm lại hơi. <strong>Chi phí cho mỗi lần lên tới 3,5 - 5 triệu.</strong></p>
					</div>
				</div>
				<div class="col-md-6">
					<img src="images/1.png">
				</div>
			</div>
		</div>
	</section>

	<section id="congdung" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-offset-6 col-md-6">
					<div class="ewm-titlebox">
						<span class="number">.02</span>
						<h1 class="title"><span class="ewm-color-white">TẠI SAO CHỌN</span><br> <span class="ewm-color-black">CERMA?</span></h1>
					</div>

					<div class="ewm-iconbox">
						<div class="items">
							<img src="images/3.png" alt="">
							<span class="title">Tiết kiệm</span>
							<p>Giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy. Giảm rung và tiếng ồn cho động cơ.</p>
						</div>
						<div class="items">
							<img src="images/4.png" alt="">
							<span class="title">Bảo Vệ</span>
							<p>Giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy. Giảm rung và tiếng ồn cho động cơ.</p>
						</div>
						<div class="items">
							<img src="images/5.png" alt="">
							<span class="title">Khôi Phục</span>
							<p>Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén. Ngăn chặn tích tụ Cacbon.</p>
						</div>
						<div class="items">
							<img src="images/6.png" alt="">
							<span class="title">Giảm Ồn</span>
							<p>Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén. Ngăn chặn tích tụ Cacbon.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="hdsd" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ewm-titlebox">
						<span class="number">.03</span>
						<h1 class="title">CÁCH SỬ DỤNG<br> <span class="ewm-color">SẢN PHẨM</span></h1>
					</div>

					<h3>CÁCH DÙNG <strong class="ewm-color">ENGINE TREATMENT MOTORCYCLE</strong></h3>

					<div class="ewm-iconbox v2">
						<div class="items">
							<img src="images/7.png" alt="">
							<span class="title">Tiết kiệm</span>
							<p>Giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy. Giảm rung và tiếng ồn cho động cơ.</p>
						</div>
						<div class="items">
							<img src="images/8.png" alt="">
							<span class="title">Bảo Vệ</span>
							<p>Giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy. Giảm rung và tiếng ồn cho động cơ.</p>
						</div>
						<div class="items">
							<img src="images/9.png" alt="">
							<span class="title">Khôi Phục</span>
							<p>Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén. Ngăn chặn tích tụ Cacbon.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ewm-mid-color" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ewm-titlebox v2 ewm-color-white">
						Lớp phủ Ceramic <strong>NANO-SIC</strong> <br>có tác dụng như thế nào?
					</div>
				</div>
				
				<div class="col-md-6">
					<img src="images/1.jpg">
				</div>
				
				<div class="col-md-6">
					<img src="images/2.jpg">
				</div>
				
				<div class="col-md-12">
					<p>Tạo một lớp phủ 2-6 micromet Ceramic trên bề mặt kim loại xử lí lấp đầy những kẽ hở trên mặt kim loại giúp bề mặt trở lên trơn mượt hơn, đẩy các cặn dầu bẩn ra ngoài giúp tăng cường sự bôi trơn cho mỗi chuyển động của động cơ, giảm ma sát chống mài mòn kim loại.</p>

					<ul class="ewm-list">
						<li>Công nghệ tự làm sạch mang bản quyền của Cerma Industry giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy.</li>
						<li>Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén. </li>
						<li>Bảo vệ động cơ mới, khôi phục động cơ cũ.</li>
						<li>Tiết kiệm nhiên liệu. Giảm rung và tiếng ồn cho động cơ.</li>
						<li>Ngăn chặn tích tụ Cacbon. Giảm khí thải ô nhiễm môi trường.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="nhanxet" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ewm-titlebox">
						<span class="number">.04</span>
						<h1 class="title">PHẢN HỒI<br> <span class="ewm-color">KHÁCH HÀNG</span></h1>
					</div>
				</div>

				<div class="ewm-testimonial">
					<div class="items col-md-4">
						<span class="title">một tay đua</span>
						<p>Là một tay đua tự do, tôi quan điểm "sức nóng là vấn đề lớn nhất đối với những chiếc xe". "Tôi thử nghiệm các sản phẩm cho chiếc Kawasaki, nhưng cuối cùng thấy nó thật tuyệt vời!!! ... Nhiệt độ của động cơ đã giảm gần 20 độ. "- Josh Borne<br><br>
Josh Borne là một nhà vô địch của cuộc thi biểu diễn moto tự do, một vận động viên chuyên nghiệp hàng đầu, và cũng là một tay đua nổi tiếng thế giới trong các giải vô địch XDL Sportbike Freestyle Series và nhiều giải khác. Borne đã đi dọc miền đất nước và khắp thế giới thể hiện tài năng của mình trước đám đông.</p>
						<img src="images/10.png" alt="">
					</div>
					<div class="items col-md-4">
						<span class="title">một tay đua</span>
						<p>Là một tay đua tự do, tôi quan điểm "sức nóng là vấn đề lớn nhất đối với những chiếc xe". "Tôi thử nghiệm các sản phẩm cho chiếc Kawasaki, nhưng cuối cùng thấy nó thật tuyệt vời!!! ... Nhiệt độ của động cơ đã giảm gần 20 độ. "- Josh Borne<br><br>
Josh Borne là một nhà vô địch của cuộc thi biểu diễn moto tự do, một vận động viên chuyên nghiệp hàng đầu, và cũng là một tay đua nổi tiếng thế giới trong các giải vô địch XDL Sportbike Freestyle Series và nhiều giải khác. Borne đã đi dọc miền đất nước và khắp thế giới thể hiện tài năng của mình trước đám đông.</p>
						<img src="images/10.png" alt="">
					</div>
					<div class="items col-md-4">
						<span class="title">một tay đua</span>
						<p>Là một tay đua tự do, tôi quan điểm "sức nóng là vấn đề lớn nhất đối với những chiếc xe". "Tôi thử nghiệm các sản phẩm cho chiếc Kawasaki, nhưng cuối cùng thấy nó thật tuyệt vời!!! ... Nhiệt độ của động cơ đã giảm gần 20 độ. "- Josh Borne<br><br>
Josh Borne là một nhà vô địch của cuộc thi biểu diễn moto tự do, một vận động viên chuyên nghiệp hàng đầu, và cũng là một tay đua nổi tiếng thế giới trong các giải vô địch XDL Sportbike Freestyle Series và nhiều giải khác. Borne đã đi dọc miền đất nước và khắp thế giới thể hiện tài năng của mình trước đám đông.</p>
						<img src="images/10.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background: url(images/3.jpg);" id="ewmtext"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ewm-text">
						<h2 class="ewm-color-white">Biker Club's Trusted Partners</h2>
						<p>Nullam ac velit. Fusce consequat ipsum non ipsum. Nam ullamcorper ipsum quis erat. Aliquam non elit vitae</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="dathang" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="ewm-form-contact">
					<h1>ĐẶT HÀNG</h1>
					<form class="contact-form" id="contactform" method="post" action="index.php#dathang">
						<div class="col-md-6">
							<div class="info">
								<div class="logo">
									<a href="#" title="cerma">
										<img class="site-logo" src="images/logo.png" width="148" height="24" alt="cerma">
									</a>
								</div>

								P1801 khu a toà nhà M3M4 số 91 nguyễn chí thanh, hà nội<br><br>
								Email: cerma@iso-logistics.vn<br><br>
								Hotline mua hàng <br><br>
								01666 555 888<br><br>
								<input type="submit" value="ĐẶT HÀNG NGAY" id="submit" name="submit" class="submit" style="border: none; background: #dd3c3c; width: 210px;line-height: 54px; height: inherit;">
							</div>
						</div>

						<div class="col-md-6">
							<?php if(isset($message)){ ?>
								<p style="color: red; "> <?php echo $message; ?></p>
							<?php } ?>

							<div class="input-wrap name">
								<label>Họ và tên *</label>
								<input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" required oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')"/>
							</div>
							<div class="input-wrap phone">
								<label>Số điện thoại *</label>
								<input type="text" id="phone" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')"/>
							</div>
							<div class="input-wrap address">
								<label>Địa chỉ *</label>
								<input type="text" name="address" value="<?php if(isset($_POST['address'])) { echo $_POST['address']; } ?>" class='insert-attr' required  oninvalid="setCustomValidity('Địa chỉ là bắt buộc!')" oninput="setCustomValidity('')"/>
							</div>
							<div class="textarea-wrap">
								<label>Ý kiến khác</label>
								<textarea class="" tabindex="4" name="note" id="message"><?php if(isset($_POST['note'])) { echo $_POST['note']; } ?></textarea>
							</div>
							<input type="hidden" name="aff_source" id="aff_source" class="aff_source" value=""/>
							<input type="hidden" name="aff_sid" id="aff_sid" class="aff_sid" value=""/>


						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="sanpham" class="ewm-animation" data-portfolio-effect="fadeInDown" data-animation-delay="0" data-animation-offset="75%"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="ewm-products">
						<div class="items">
							<div class="hover"><span>CERMA 10w30 <br>Synthetic Motor Oil - Xăng (Dầu ...<span></div>
							<img src="images/4.jpg">
						</div>
						
						<div class="items">
							<div class="hover"><span>CERMA 10w30 <br>Synthetic Motor Oil - Xăng (Dầu ...<span></div>
							<img src="images/5.jpg">
						</div>
						
						<div class="items">
							<div class="hover"><span>CERMA 10w30 <br>Synthetic Motor Oil - Xăng (Dầu ...<span></div>
							<img src="images/6.jpg">
						</div>
						
						<div class="items">
							<div class="hover"><span>CERMA 10w30 <br>Synthetic Motor Oil - Xăng (Dầu ...<span></div>
							<img src="images/7.jpg">
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--go top-->
	<a id='bttop' href="#">
		<img src="images/11.png" alt="">
	</a>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Công ty TNHH thương mại và đầu tư iVESCOM - Nhà phân phối độc quyền tại Việt Nam</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
	<script type="text/javascript" src="javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="javascript/jquery.sticky.js"></script>
    <script type="text/javascript" src="javascript/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="javascript/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="javascript/main.js"></script>


	<script src="//cdn.accesstrade.vn/js/tracking.js" ></script>
	<script type="text/javascript">
		AT.track();
		function clearValidity() {
			document.getElementById('yes').setCustomValidity('');
		}

		function onInvalidCustom(idstr) {
			var me = document.getElementById(idstr);
			me.setCustomValidity('Số điện thoại không chính xác');
			//me.setCustomValidity('');
		}

		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length,c.length);
				}
			}
			return "";
		}
		$("#aff_source").val(getCookie("_aff_network"));
		$("#aff_sid").val(getCookie("_aff_sid"));

	</script>


</body>

</html>