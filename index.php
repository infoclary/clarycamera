<?php 
	include('header.php');
 ?>


<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 video">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mar" >
					  <!--<img src="clary-demo-stream-assets/demo-html-assets/images/video.jpg" width="625" height="340" alt="Video" />--> 
            <!-- Required libraries to be included preferentially in page head. -->
<script src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
<script src="//manage.hdrelay.com/js/hdrelay.js" type="text/javascript"></script>


<!-- Div that is going to hold web player. Size set to keep player space before load. -->
<div style="width: 100%; height: 100%;" id="webcam_holder"></div>


<!-- Code to show web player. Must go after div tag. -->
<script type="text/javascript">
HDRelay.create({target:'webcam_holder',id:'eca8bbf4-de53-49ac-b4d8-b1a57e8f27e4'});
</script>
         
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-con1" >
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<p>Conoce mas de nostros en:</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="https://plus.google.com/+ClaryColombiaBogotá"><img src="images/google+.png" class="img-con"></a>
						</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="https://facebook.com/claryiconla"><img src="images/facebook.png" class="img-con"></a>
						</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="https://twitter.com/claryicon_la"><img src="images/twitter.png" class="img-con"></a>
						</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="https://youtube.com/ClaryColombiaBogotá"><img src="images/youtube.png" class="img-con"></a>
						</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
							<a href="https://linkedin.com/company/3055949?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A3055949%2Cidx%3A2-1-3%2CtarId%3A1453828958201%2Ctas%3Aclary%20icon"><img src="images/linkedin.png" class="img-con"></a>
						</div>	
					</div>	
 				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 con">
				<?php include('contacto.php'); ?>
			</div>
		</div>
</div>