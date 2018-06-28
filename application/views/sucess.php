<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MTUC - Survey</title>

<!-- Favicons
================================================== -->
<!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
<!-- / Favicons
================================================== -->

<!-- >> CSS
============================================================================== -->
<link href="<?php echo base_url('assets/front/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- Font Awesome -->
<link href="<?php echo base_url('assets/front/vendor/font-awesome/css/font-awesome.min.cs');?>" rel="stylesheet">
<!-- Nivo Lightbox -->
<link href="<?php echo base_url('assets/front/vendor/nivo-lightbox/nivo-lightbox.css');?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/front/vendor/nivo-lightbox/themes/default/default.css');?>" type="text/css" />
  <!-- /Nivo Lightbox -->
  <!-- Perfect ScrollBar -->
<link href="<?php echo base_url('assets/front/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css');?>" rel="stylesheet">
<!-- owl carousel -->
<link href="<?php echo base_url('assets/front/vendor/owl.carousel/owl-carousel/owl.carousel.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/front/vendor/owl.carousel/owl-carousel/owl.theme.css');?>" rel="stylesheet">
<!-- Main Styles -->
<link href="<?php echo base_url('assets/front/css/styles.css');?>" rel="stylesheet">
<style>
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
  /*  padding-top: 50px;*/
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}

</style>
<!-- >> /CSS
============================================================================== -->
</head>
<body>
<!-- Page Loader
========================================================= -->
<div class="loader-container" id="page-loader"> 
  <div class="loading-wrapper">
  	<div class="loader-animation" id="loader-animation">
  		<span class="loader"><span class="loader-inner"></span></span>
  	</div>    
    <!-- Edit With Your Name -->
    <div class="loader-name" id="loader-name">
      MTUC <strong>Survey 	</strong>
    </div>
    <!-- /Edit With Your Name -->
    <!-- Edit With Your Job -->
   <!--  <p class="loader-job" id="loader-job">Web Designer & Web Developer</p> -->
    <!-- /Edit With Your Job -->
  </div>   
</div>
<!-- /End of Page loader
========================================================= -->

<!-- Main Content
================================================== -->
<section id="body" style="overflow-x:scroll;">
<div class="alert success" id="success" style="display:none">
  <span class="closebtn">&times;</span>  
  <center><strong>Thank you voicing your needs with us!!!...</strong><br> 
  <strong>Terima kasih kerana menyuarakan keperluan anda dengan kami!!!...</strong> </center>
</div>
	<div class="container">


		<!-- MAIN MENU -->
		<div class="main-menu" id="main-menu">
			<ul class="main-menu-list">
				<!--<li><a href="#page-resume" class="link-home">Home</a></li>
				<li><a href="#page-resume" class="link-page">Survey</a></li>-->
				<!-- <li><a href="#page-skills" class="link-page">Skills</a></li> -->
				<!-- <li><a href="#page-portfolio" class="link-page">Portfolio</a></li> -->
				<!-- <li><a href="#page-blog" class="link-page">Blog</a></li> -->
				<!-- <li><a href="#page-contact" class="link-page">Contact</a></li> -->
			</ul>
		</div>
		<!-- /MAIN MENU -->
		
		<!-- SECTION: vCard Body  -->	
		<div class="section-vcardbody section-home " id="section-home">
			<!-- Profile pic-->
			<div class="vcard-profile-pic">
				<img src="<?php echo base_url('assets/front/img/2.jpeg');?>" id="profile2"  alt=""/>
				<img src="<?php echo base_url('assets/front/img/2.jpeg');?>" id="profile1" class="profileActive" alt=""/>
			</div>
			<!-- /Profile pic -->
			<!-- Description -->
			<div class="vcard-profile-description">
				<!-- Profile title -->
				<h4 class="profile-title"><span class="color1">Thank you for voicing your needs with us.</span></h4>
				<hr class="hr1">
				<h4 class="profile-title"><span style="color: #026637;">Terima kasih kerana menyuarakan keperluan anda dengan kami.</span></h4>
				
				<!-- /Profile Title -->
				<!-- Description Text -->
				<hr class="hr1">
				<!-- <div class="vcard-profile-description-text">
					<h5>MTUC fights for wage hike of RM800 per month.</h5>
					<h5>[MTUC perjuangkan peningkatan upah sehingga RM800 sebulan]</h5>
				</div>	 -->
				<!--/ Description Text -->	
				<!-- Description feature -->
				<div class="vcard-profile-description-feature">
					<!-- item -->
					<div class="vcard-profile-description-ft-item">
						<a href="http://www.mtuc.org.my/" class="link-pag1e"><p>Go back to Home</p></a>
					</div>
					<!-- item -->
				</div>	
				<!-- /Description feature -->		
			</div>
			<!-- /Description -->	
			<!-- Footer -->		
			
		</div>
		<!-- /SECTION: vCard Body  -->	

		<!-- PAGE: RESUME -->

	</div>

</section>
<!-- /Main Content
================================================== -->

<!-- Contact Form - Ajax Messages
========================================================= -->



<!-- Form Sucess -->
<div class="form-result modal-wrap" id="contactSuccess">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title"><i class="fa fa-check-circle"></i> Success!</h4>
    <center><strong>Thank you voicing your needs with us!!!...</strong><br> 
  <strong>Terima kasih kerana menyuarakan keperluan anda dengan kami!!!...</strong> </center>
  
  </div>
  <div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
  
</div>
<!-- /Form Sucess -->
<!-- form-error -->
<div class="form-result modal-wrap" id="contactError">
  <div class="modal-bg"></div>
  <div class="modal-content">
    <h4 class="modal-title" style="color:#000;"><i class="fa fa-times"></i> Error</h4>
   <p>Please answer all the Question.</p>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </div>
  
</div>

  <div class="form-result modal-wrap modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Please answer all the Question.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- /form-error -->

<!-- Contact Form - Ajax Messages
========================================================= -->


<!-- >> JS
============================================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/front/vendor/jquery.min.js');?>"></script>
<script>
 $(document).ready(function(){

	 $('#submit_enquiry').click(function()  
	 {
		 var no =0;
		if($('input[name=radios]:checked').length<=0)
		{
			no += 1;
			$("#contactError").fadeIn(300);
		}
		else if($('input[name=radios1]:checked').length<=0)
		{
			no += 1;
			$("#contactError").fadeIn(300);
		}
		else{
			if($('#checkboxes-0').attr('checked')) {
					$("#contactError").fadeIn(300);
					no += 1;
				}
			}
			
			
		
		if(no == 0)
		{

     //dataString = $(".cartForm").serialize();
      dataString = $("#survey").serialize();
      
         $.ajax({
          url:'<?php echo base_url(); ?>Front/survey',
          type:'POST',
           data: dataString,
		   error: function (request, error) {
				console.log(arguments);
				alert(error);
			},

          success: function(data) {
			//$('#success').show();
			 $("#contactSuccess").fadeIn(300);
			//document.getElementById("submit_enquiry").reset();
			// $('#submit_enquiry')[0].reset();
			 $("#survey").find('input:text, input:password, input:file, select, textarea, email').val('');
			$("#survey").find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
            //alert("Thanks for participanting our Survey!!!...");
			// location.reload(600);
          }
		  
        }); 
		}
      
     
  });
});
</script>
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

</script>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url('assets/front/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/front/vendor/validate.js');?>"></script>
<!-- Holder JS -->
<script src="<?php echo base_url('assets/front/vendor/holder.js');?>"></script>
<!-- Modal box-->
<script src="<?php echo base_url('assets/front/vendor/nivo-lightbox/nivo-lightbox.min.js');?>"></script>
<!-- /Modal Box -->
<!-- Perfect ScrolBar -->
<script src="<?php echo base_url('assets/front/vendor/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js');?>"></script>
<!-- /Perfect ScrolBar -->
<!-- Owl Caroulsel -->
<script src="<?php echo base_url('assets/front/vendor/owl.carousel/owl-carousel/owl.carousel.js');?>"></script>
<!-- Google Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- Cross-browser -->
<script src="<?php echo base_url('assets/front/vendor/cross-browser.js');?>"></script>
<!-- Main Scripts -->
<script src="<?php echo base_url('assets/front/js/main.js');?>"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68192027-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="vendor/html5shiv.js"></script>
  <script src="vendor/respond.min.js"></script>
<![endif]-->
<!-- >> /JS
============================================================================= -->
</body>


</html>