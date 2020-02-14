<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<!-- <div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="#">Click here for nomination for best student papers</a>
			</span>
		</p>
</div> -->

<div class="text">

<!-- 	<div style="font-size:30px;color:red;padding:20px; line-height: 30px;"> Paper Submission Deadline Extended to March 10!</div> -->

The African Conference on Software Engineering (ACSE) is a forum for researchers, innovators, and leading professionals to discuss the state and future of software engineering in Africa. The event provides a platform for exchanging ideas on the role of software engineering in socio-economic development of the continent, the future directions of software engineering research and education in Africa, creating networks with the global software engineering community, and sharing exciting results with the global community.

<br>
<br>
ACSE conference includes keynote talks from prominent software engineering professionals, entrepreneurs, innovators and researchers; experience and scientific paper presentations; demonstrations; posters; and focussed meetings.


	<br><br>
	ACSE 2020 will be held at Jomo Kenyatta University of Agriculture and Technology, Nairobi, Kenya.
	
	<br><br>
	

Nairobi is famed for being the "The World's only Widlife City". Just a short drive out of Nairobi’s central business district is <a target="_blank" style="color:red" href="http://www.kws.go.ke/parks/nairobi-national-park">the Nairobi National Park </a>.
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/home/image1.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/home/image2.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/home/image3.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/home/image6.jpg) 150px 150px"></div>
	<div class="about-image" style="background: url(images/home/image5.jpg) 150px 150px"></div>
</div>	


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>