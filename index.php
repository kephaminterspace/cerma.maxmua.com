
<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
$arr = array(
    'properties' => array(
        array(
            'property' => 'email',
            'value' => $_POST['email']
        ),
        array(
            'property' => 'firstname',
            'value' => $_POST['name']
        ),
        array(
            'property' => 'lastname',
            'value' => ''
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
        $message = 'Email đã tồn tại:';
    }
    }
    ?>


    <!DOCTYPE html>
    <!--[if IE 8 ]>
    <html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]><!-->
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
        <!--<![endif]-->
        <head>
            <!-- Basic Page Needs -->
            <meta charset="utf-8">
            <!--[if IE]>
            <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
            <![endif]-->
            <title>CERMA - Multipurpose Template</title>
            <meta name='keywords' content='business, clean, twitter, bootstrap 3, responsive'>
            <meta name='description' content="Colores is a professional multipurpose template for any business, portfolio or blog website.">
            <meta name='author' content='easywebsitesmaker.com'>
            <!-- Mobile Specific Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <!-- Bootstrap  -->
            <link rel="stylesheet" type="text/css" href="thank/stylesheets/bootstrap.css" >
            <!-- Theme Style -->
            <link rel="stylesheet" type="text/css" href="thank/stylesheets/style.css">
            <!-- Favicon and touch icons  -->
            <link href="thank/icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
            <link href="thank/icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
            <link href="thank/icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
            <link href="thank/icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
            <link href="thank/icon/favicon.png" rel="shortcut icon">

			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-87759824-1', 'auto');
				ga('send', 'pageview');

			</script>

			<!-- Facebook Pixel Code -->
			<script>
				!function(f,b,e,v,n,t,s)
				{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
					n.callMethod.apply(n,arguments):n.queue.push(arguments)};
					if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
					n.queue=[];t=b.createElement(e);t.async=!0;
					t.src=v;s=b.getElementsByTagName(e)[0];
					s.parentNode.insertBefore(t,s)}(window,document,'script',
					'https://connect.facebook.net/en_US/fbevents.js');
				fbq('init', '962961677145104');
				fbq('track', 'PageView');
			</script>
			<noscript>
				<img height="1" width="1"
					 src="https://www.facebook.com/tr?id=962961677145104&ev=PageView&noscript=1"/>
			</noscript>
			<!-- End Facebook Pixel Code -->

		</head>
        <body>
            <!-- Header -->
            <header id="header" class="header site-header">
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
                                        <li><a href="#">Giới thiệu</a></li>
                                        <li><a href="#cong_dung">Công dụng</a></li>
                                        <li><a href="#huong_dan_su_dung">Hướng dẫn sử dụng</a></li>
                                        <li><a href="#nhan_xet">Nhận xét</a></li>
                                        <li><a href="#register" id="dat_hang">Đặt hàng</a></li>
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

            <div class="ewm-slider no-padding" data-height="750">
	            <div class="tp-banner-container">
	                <div class="tp-banner" >
	                    <ul>
	                        <!-- SLIDE  -->
	                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-title="Intro Slide">
	                            <img src="images/slider.png" alt="slider-image" />
	                            <div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="110" data-speed="0" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 54px;
	                            top: 50px;
	                            left: 110px;
								    line-height: 54px;
								    font-weight: 900;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: transparent;
								    border-width: 0px;
								    border-color: rgb(34,34,34);
								    border-style: none;">Engine Treatment <br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 52px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 52px;">Motorcycle</div>

								<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="230" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 18px;
	                            top: 50px;
	                            left: 230px;
								    line-height: 18px;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: transparent;
								    border-width: 0px;
								    border-color: rgb(34,34,34);
								    border-style: none;">Sản phẩm xử lý, phục hồi động cơ xe máy</div>

								<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-speed="900" data-x="50" data-y="275" data-start="450" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="left: 50px; top: 275px; "><img src="images/15.png" alt=""></div>
                                <a href="#register">
                                    <a href="#register">
                                    <div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="390" data-speed="1200" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="    font-size: 14px;
	                            top: 50px;
	                            left: 390px;
								    line-height: 50px;
								    font-weight: 900;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: rgb(198,17,32);
								    padding: 0px 50px;
								    border-radius: 5px 5px 5px 5px;
								    border-width: 0px;
								    border-color: rgba(0,0,0,0);
								    border-style: none;">ĐẶT MUA NGAY </div></a>
	                        </li>
                            <!-- SLIDE  -->
	                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-title="Intro Slide">
	                            <img src="images/slider.png" alt="slider-image" />
	                            <div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="110" data-speed="0" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 54px;
	                            top: 50px;
	                            left: 110px;
								    line-height: 54px;
								    font-weight: 900;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: transparent;
								    border-width: 0px;
								    border-color: rgb(34,34,34);
								    border-style: none;">Engine Treatment <br style="transition: all 0s ease 0s; min-height: 0px; min-width: 0px; line-height: 52px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 52px;">Motorcycle</div>

								<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="230" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="font-size: 18px;
	                            top: 50px;
	                            left: 230px;
								    line-height: 18px;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: transparent;
								    border-width: 0px;
								    border-color: rgb(34,34,34);
								    border-style: none;">Sản phẩm xử lý, phục hồi động cơ xe máy</div>

								<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-speed="900" data-x="50" data-y="275" data-start="450" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="left: 50px; top: 275px; "><img src="images/15.png" alt=""></div>
                                <a href="#register">
								<div class="tp-caption lft skewtoleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="390" data-speed="1200" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="    font-size: 14px;
	                            top: 50px;
	                            left: 390px;
								    line-height: 50px;
								    font-weight: 900;
								    font-family: roboto;
								    color: rgb(255,255,255);
								    text-decoration: none;
								    background-color: rgb(198,17,32);
								    padding: 0px 50px;
								    border-radius: 5px 5px 5px 5px;
								    border-width: 0px;
								    border-color: rgba(0,0,0,0);
								    border-style: none;">ĐẶT MUA NGAY </div>
                                </a>
	                        </li>
	                    </ul>
	                    <div class="tp-bannertimer"></div>
	                </div>
	            </div>
	        </div> <!-- /.ewm-slider -->

	        <section class="ewm-section">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-6">
	        				<div class="textwidget"><p>Xe của bạn phát ra tiếng kêu lớn từ động cơ – Nguyên nhân chủ yếu do động cơ có quá nhiều mảng bám Cacbon, hợp chất thừa trong nhiên liệu khi đốt cháy. Động cơ hoạt động lâu ngày ma sát làm cho bề mặt kim loại bên trong bị xước, bề mặt không còn phẳng mịn, làm ma sát tăng lên, động cơ nóng quá mức chịu đựng. Dẫn đến hiệu suất giảm, tiếng ồn và độ rung ngày càng cao.</p>
<p>Với những trường hợp như vậy, sau quãng đường đi 40.000 – 50.000km chắc cắn bạn sẽ phải đi bảo dưỡng lớn. ÍT thì thay một vài bộ phận, nhiều thì phải bổ máy, làm lại hơi. <span class="color">Chi phí cho mỗi lần lên tới 3,5 – 5 triệu.</span></p>
</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <section class="ewm-section mobile-no-bg ewm-bg-left ewm-list-border" id="cong_dung" class="ewm-section"
			style='background-image: url(images/1.png)'; background-position: left center;  background-repeat: no-repeat;">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-offset-6 col-md-6">
	        				<div class="textwidget">
								<h3>Công nghệ tự làm sạch mang bản quyền của <span class="color">Cerma Industry</span></h3>
							</div>
						</div>

        				<div class="col-md-6">
						</div>

        				<div class="col-md-3">
	        				<div class="ewm-border">Giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy.</div>
	        				<div class="ewm-border">Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén.</div>
	        				<div class="ewm-border">Bảo vệ động cơ mới, khôi phục động cơ cũ.</div>
        				</div>

        				<div class="col-md-3 ewm-line-90">
	        				<div class="ewm-border">Tiết kiệm nhiên liệu.</div>
	        				<div class="ewm-border">Giảm rung và tiếng ồn cho động cơ.</div>
	        				<div class="ewm-border">Ngăn chặn tích tụ Cacbon.</div>
        				</div>
	        		</div>
	        	</div>
	        </section>

	        <section class="ewm-section mobile-no-bg ewm-bg-right" style="background-image: url(images/2.png);
			    background-position: right center;
			    background-size: cover;
			    background-repeat: no-repeat;" id="huong_dan_su_dung">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-6">
	        				<div class="textwidget ewm-has-list">
								<h3>Lớp phủ <span class="color">Ceramic NANO-SIC</span> có tác dụng như thế nào?</h3>
								<p>Tạo một lớp phủ 2-6 micromet Ceramic trên bề mặt kim loại xử lí lấp đầy những kẽ hở trên mặt kim loại giúp bề mặt trở lên trơn mượt hơn, đẩy các cặn dầu bẩn ra ngoài giúp tăng cường sự bôi trơn cho mỗi chuyển động của động cơ, giảm ma sát chống mài mòn kim loại.</p>

								<p><img src="images/3.png" class="alignleft" alt="3" width="16" height="17">Công nghệ tự làm sạch mang bản quyền của Cerma Industry giúp cho động cơ luôn được bảo vệ, thanh lọc cặn dầu, bụi bẩn trong máy.</p>

								<p><img src="images/3.png" class="alignleft"  alt="3" width="16" height="17"> Khôi phục hiệu suất của động cơ, tăng mã lực, mô men xoắn và sức nén.</p>

								<p><img src="images/3.png" class="alignleft"  alt="3" width="16" height="17">Bảo vệ động cơ mới, khôi phục động cơ cũ.</p>

								<p><img src="images/3.png" class="alignleft"  alt="3" width="16" height="17">Tiết kiệm nhiên liệu. Giảm rung và tiếng ồn cho động cơ.</p>

								<p><img src="images/3.png" class="alignleft"  alt="3" width="16" height="17">Ngăn chặn tích tụ Cacbon. Giảm khí thải ô nhiễm môi trường.</p>
							</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <section class="ewm-section mobile-no-bg ewm-bg-left" style="background-image: url(images/4.png);
			    background-position: left center;
			    background-repeat: no-repeat;">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-offset-6 col-md-6">
	        				<div class="textwidget ewm-list-v2 widget">
								<h3>Cách dùng <span class="color">Engine Treatment </span>Motorcycle</h3>

								<ul>
								    <li>
								        <img src="images/5.png" alt="5" width="80" height="80">
								        <div>
								            <h4 class="color">Bước 1</h4>
								            <p>Làm nóng động cơ.</p>
								        </div>
								    </li>
								    <li>
								        <img src="images/6.png" alt="6" width="80" height="80">
								        <div>
								            <h4 class="color">Bước 2</h4>
								            <p>Cho Engine Motorcycle vào trong dầu động cơ và tiếp túc cho động cơ hoạt động trong 20 phút.</p>
								        </div>
								    </li>
								    <li>
								        <img src="images/7.png" alt="7" width="80" height="80">
								        <div>
								            <h4 class="color">Bước 3</h4>
								            <p>Cho xe chạy hết 800 km trước khi thay dầu động cơ.</p>
								        </div>
								    </li>
								</ul>
								<br>
								<h5 style="font-weight: 900;">Liều lượng sử dụng:</h5>
								<p>Đọc kỹ hướng dẫn sử dụng trong từng sản phẩm.<br>
Liên hệ trực tiếp Cerma Việt Nam để được tư vấn.</p>
							</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <section class="ewm-section" style="background-color: #c61120" id="nhan_xet">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-12">
	        				<div class="ewm-color-white">
								<h3>Phản hồi Ý kiến của khách hàng</h3>
							</div>
	        			</div>
	        		</div>

	        		<div class="row ewm-list-testimonial">
	        			<div class="col-md-1">
	        				<div class="wpb_single_image">
	        					<img width="80" height="80" src="images/8.png" alt="8">
        					</div>
	        			</div>

	        			<div class="col-md-11">
	        				<div class="widget widget_text">
							    <div class="textwidget">
							        <h5 class="color">Phản hồi từ một tay đua sử dụng sản phẩm C</h5>
							        <p>Là một tay đua tự do, tôi quan điểm “sức nóng là vấn đề lớn nhất đối với những chiếc xe”. “Tôi thử nghiệm các sản phẩm cho chiếc Kawasaki, nhưng cuối cùng thấy nó thật tuyệt vời!!! … Nhiệt độ của động cơ đã giảm gần 20 độ. “- Josh Borne</p>
							        <br>
							        <p>Josh Borne là một nhà vô địch của cuộc thi biểu diễn moto tự do, một vận động viên chuyên nghiệp hàng đầu, và cũng là một tay đua nổi tiếng thế giới trong các giải vô địch XDL Sportbike Freestyle Series và nhiều giải khác. Borne đã đi dọc miền đất nước và khắp thế giới thể hiện tài năng của mình trước đám đông.</p>
							    </div>
							</div>
	        			</div>
	        		</div>

	        		<div class="row ewm-list-testimonial">
	        			<div class="col-md-1">
	        				<div class="wpb_single_image">
	        					<img width="80" height="80" src="images/9.png" alt="9">
        					</div>
	        			</div>

	        			<div class="col-md-11">
	        				<div class="widget widget_text">
							    <div class="textwidget">
							        <h5 class="color">Robert K.</h5>
							        <p>Gần đây tôi đã sử dụng Ceramic cho động cơ 1100cc cho chiếc xe 1984 Honda v65 sabre VF 100s và các con số trong bộ nén động cơ như sau:</p>
							        <br>
							        <p>Ống xi lanh 1: 120/170. Ống xi lanh 2: 142/170. Ống xi lanh 3: 138/170. Ống xi lanh 4: 140/170</p>
							        <br>
							        <p>Sau khi được xử lý, bộ nén động cơ được cải thiện đáng kể với các trị số là: Ống xi lanh 1: 168/170.</p>
							        <br>
							        <p>Ống xi lanh 2: 172/170. Ống xi lanh 3: 168/170. Ống xi lanh 4: 170/170. Các thùng chưa dầu của xe tôi sau khi được xử lý đã cải thiện khá nhiều, tôi lái xe trong khoảng 1 giờ với vận tốc trung bình từ 45-55 dặm/ giờ. Các chu kì khác sau khi được vận hành 5 phút thì hoạt động như mới. Nó làm cân bằng và điều hòa động cơ một cách đáng kể. Các động cơ hoạt động trơn tru hơn và có thể liên tục băng qua các con đèo. Mọi sự chậm trễ hay gián đoạn trong động cơ đều được có cải thiện. Tôi tái đồng bộ lại bộ chế hòa khí và thiết lập lại số vòng trên phút ở mức thấp khoảng 500 vòng. 600 vòng/ phút là mức thiết lập của nhà sản xuất.</p>
							        <br>
							        <p>Chiếc xe 1984 Honda cũng được thiết kế 1 thùng đựng dầu để bôi trơn. Cũng có nghĩa là chất xử lý ceramic đã làm việc rất hiệu quả trên bộ truyền động và khớp ly hợp. Giờ đây, khi chuyển máy động cơ rất nhẹ, tiếng nổ cũng êm hơn. Các khớp ly hợp cũng rất khác. Bạn cũng có thể nhìn thấy khu trung tâm, hoặc một nửa bên trong hoặc bên ngoài của được thiết lập một cách mượt mà hơn bao giờ hết. Đáng chú ý là các chu kỳ tôi thiết lập lại bằng dây phanh thép không gỉ và các chất lỏng mới làm thắt chặt các chuyển động của khớp ly tâm mang lại hiệu quả đáng kể. Tôi sẽ sử dụng sản phẩm cho tất cả các chu kỳ mà tôi thiết lập lại. Cụm ống xả gần như được hút hoàn toàn. Điều nằm trong dự đoán của tôi là khi điều chỉnh các van xả thì hầu như lượng xả không đáng kể. Có nghĩa là mọi thứ đã được đốt cháy trong buồng đốt. Tôi sẽ dùng nó cho các thiết bị khác như 1100cc v65 Sabre và Honda cb700sc Nighthawks trong vài tháng tới.</p>
							        <br>
							        <p>Tôi sẽ áp dụng việc xử lý này cho các động cơ mới được thiết lập lại như là động cơ 32 năm tuổi. Đó thực sự là một điều tuyệt vời. Robert K.</p>
							    </div>
							</div>
	        			</div>
	        		</div>

	        		<div class="row ewm-list-testimonial">
	        			<div class="col-md-1">
	        				<div class="wpb_single_image">
	        					<img width="80" height="80" src="images/9.png" alt="9">
        					</div>
	        			</div>

	        			<div class="col-md-11">
	        				<div class="widget widget_text">
							    <div class="textwidget">
							    	<h5 class="color">Tuấn Anh</h5>
							    	<p><span class="">
							    		5/9/2016, Thanh Tùng-Thanh Miện-Hải Dương. 01636222906/ tuananhtm@gmail.com</span>
							    		<br>
										Mình từng sử dụng sản phẩm MotorCycle. Mình đi xe Elegant và đã đi được khoảng 43.570km. Xe dùng đã lâu và thường xuyên có dấu hiệu rung, máy ồn và ống bô xả ra một lượng khói lớn. Thực sự mình đã nghĩ chỉ có thể thay xe mới chứ không có cách nào khắc phục được. Nhưng thật kỳ diệu. Sau khi sử dụng sản phẩm chất xử lý động cơ dành cho xe máy của Cerma, chỉ sau 3 ngày, mình cảm giác sử dụng xe khác biệt rất lớn, xe chạy êm hơn trước.</p>
									<br>
									<p>Độ rung ồn cũng giảm đi rõ rệt, khói cũng không còn nữa. Một điều đặc biệt nữa Cerma MotorCycle mang lại đó chính là động cơ của mình hoạt động khỏe hơn hẳn, trước đây đối với xe mình những con dốc hay như bậc thềm nhà là cuộc vật lộn mỗi khi đi làm về ( mình toàn phải đi số 2) vậy mà sau khi sử dụng mình có thể lên dốc bậc thềm nhẹ hơn trước rất nhiều ( mình có thể đi số 3) và mình dự kiến đi phượt một số tỉnh miền bắc với xe mình trong vài tháng tới.</p>
									<br>
									<p>Đây là một sản phẩm rất tuyệt vời. Với chất lượng tốt như vậy, mình sẽ tiếp tục ủng hộ thêm các sản phẩm khác của Cerma.</p>
									<br>
									<p>Thân mến!</p>
							    </div>
							</div>
	        			</div>
	        		</div>

	        		<div class="row ewm-list-testimonial">
	        			<div class="col-md-1">
	        				<div class="wpb_single_image">
	        					<img width="80" height="80" src="images/9.png" alt="9">
        					</div>
	        			</div>

	        			<div class="col-md-11">
	        				<div class="widget widget_text">
							    <div class="textwidget">
							    	<h5 class="color">Thùy Linh</h5>
							    	<p><span class="">Đội Cấn (linhgd94@gmail.com)</span>
							    		<br>
										Tôi đã sử dụng Chất xử lý động cơ xe máy của Cerma cho chiếc Liberty 125ie của tôi. Tôi cảm nhận được động cơ trơn mượt hơn rõ rệt, tiếng ồn và độ rung của xe giảm đáng kể chỉ sau 30 phút lái xe.</p>
									<br>
									<p>Tuy nhiên, có thể thời gian sau đó, có thể chất xử lý đang dần đi hết và bám vào bề mặt kim loại nên chưa ổn định. Nhưng một tháng sau khi sử dụng Cerma, chiếc xe đã lấy lại sự ổn định, nó chạy êm hơn hẳn. Việc động cơ hoạt động hiệu quả hơn đã giúp lượng tiêu thụ xăng và khói bụi từ xe giảm hẳn đi, sản phẩm dùng 1 lần vừa tiết kiệm được nhiên liệu, bền máy và giảm khí thải.Tôi nghĩ nó rất tốt cho thị trường Việt Nam</p>
							    </div>
							</div>
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <section class="ewm-section ewm-scontact" id="nhan_xet">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-md-12 margin-bottom-30px">
	        				<div class="textwidget ewm-center">
								<h3>Liên hệ Đặt hàng</h3>
								<p>Để mua hàng và tìm hiểu rõ hơn về sản phẩm, hãy liên hệ trực tiếp với<br>
								Hotline của CERMA Việt Nam để được giải đáp những thắc mắc.</p>
							</div>
	        			</div>

	        			<div class="col-md-6 ewm-right">
							<div class="ewm-info">
								<h4 class="color">CERMA VIỆT NAM</h4>

								<div class="content">
									P1801 khu a toà nhà M3M4 số 91 nguyễn chí thanh, hà nội<br>
									Email: cerma@iso-logistics.vn<br>
									Hotline mua hàng
									<br>
									<span class="color">01666 555 888</span>
								</div>
							</div>
	        			</div>

	        			<div class="col-md-6" id="register">
							<div class="ewm-contact contact">

                                 <?php if(isset($message)){ ?>
                                     <p style="color: red; "> <?php echo $message; ?></p>
                                 <?php } ?>

                                <form class="contact-form" id="contactform" method="post" action="index.php#register">
                                        <div class="input-wrap name">
                                            <input type="text" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" placeholder='Họ và tên *' required oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')"/>
                                        </div>
                                        <div class="input-wrap email">
                                            <input type="text" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" class='insert-attr' placeholder='Địa chỉ email' required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Email không chính xác!')" oninput="setCustomValidity('')"/>
                                        </div>
                                        <div class="input-wrap phone">
                                            <input type="text" id="phone" name="phone" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>" placeholder='Số điện thoại *' required pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')"/>
                                        </div>
                                        <div class="textarea-wrap">
                                            <textarea class="" tabindex="4" placeholder="Thông tin liên hệ" name="note" id="message"><?php if(isset($_POST['note'])) { echo $_POST['note']; } ?></textarea>
                                        </div>
                                        <div class="submit-wrap">
                                            <input type="hidden" name="aff_source" id="aff_source" class="aff_source" value=""/>
                                            <input type="hidden" name="aff_sid" id="aff_sid" class="aff_sid" value=""/>
                                            <input type="submit" value="GỬI" id="submit" name="submit" class="btn-colores">
                                        </div>
                                    </form><!-- /.comment-form -->
							</div>
	        			</div>
	        		</div>
        		</div>
    		</section>

			<section class="ewm-section ewm-pots" style="background-color: #eaeaea;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 ewm-center">
							<div class="textwidget margin-bottom-40px">
								<h3>Sản phẩm khác</h3>
							</div>
						</div>

						<div class="col-md-3">
							<div class="ewm-post">
								<div class="wpb_single_image">
									<img width="307" height="307" src="images/car1.jpg" alt="1" sizes="(max-width: 307px) 100vw, 307px">
								</div>

								<div class="textwidget"><p>Chất xử lý Treatment</p></div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="ewm-post">
								<div class="wpb_single_image">
									<img width="307" height="307" src="images/car2.jpg" alt="1" sizes="(max-width: 307px) 100vw, 307px">
								</div>

								<div class="textwidget"><p>Dầu động cơ Motor oil</p></div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="ewm-post">
								<div class="wpb_single_image">
									<img width="307" height="307" src="images/car3.jpg" alt="1" sizes="(max-width: 307px) 100vw, 307px">
								</div>

								<div class="textwidget"><p>Hệ thống điều hòa Blue Ice</p></div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="ewm-post">
								<div class="wpb_single_image">
									<img width="307" height="307" src="images/car4.png" alt="1" sizes="(max-width: 307px) 100vw, 307px">
								</div>

								<div class="textwidget"><p>Mỡ & dầu chuyên dụng (Grease & lube)</p></div>
							</div>
						</div>

						<div class="ewm-showmore ewm-center margin-top-30px"><a class="read-more ewm-text-link" href="#" title="XEM TẤT CẢ">XEM TẤT CẢ</a></div>
					</div>
				</div>
			</section>

    		<div class="footer-menu">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <ul id="menu-menu-footer" class="menu">
			                    <li><a href="#">Trang chủ</a></li>
			                    <li><a href="#">Tài khoản</a></li>
			                    <li><a href="#">Giới thiệu</a></li>
			                    <li><a href="#">Tin tức</a></li>
			                    <li><a href="#">Về Đại Lý</a></li>
			                    <li><a href="#">Liên hệ</a></li>
			                </ul>
			            </div>
                        <!-- /.col-md-12 -->
			        </div>
                    <!-- /.row -->
			    </div>
                <!-- /.container -->
			</div>

			<footer id="colophon" class="site-footer bottom" role="contentinfo">
				<div class="site-info container">
					<div class="row">
		                <div class="col-md-12">

		                	Công ty TNHH thương mại và đầu tư iVESCOM - Nhà phân phối độc quyền tại Việt Nam
		                </div><!-- /.col-md-12 -->
					</div><!-- /.row -->
				</div><!-- /.site-info -->
			</footer>

            <!-- Javascript -->
            <script type="text/javascript" src="thank/javascript/jquery.min.js"></script>
            <script type="text/javascript" src="thank/javascript/bootstrap.min.js"></script>
            <script type="text/javascript" src="thank/javascript/matchMedia.js"></script>
            <script type="text/javascript" src="thank/javascript/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="thank/javascript/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="thank/javascript/main.js"></script>
        </body>
    </html>

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
