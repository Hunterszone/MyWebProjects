<!DOCTYPE html>
<head>
	<style>
	* {
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-ms-box-sizing: border-box;
		-o-box-sizing: border-box;
		box-sizing: border-box;
		margin:0;
		padding:0;
	}
	html {
		font-size: 16px;
		background-color:#000;
	}
	body {
		font-family: Arial, sans-serif;
		color: #fff;
		max-width:600px;
		margin:10px auto;
	}
	/* Additionnal styles */
	.video-slider {
		width: 100%;
		height: 20em;
		background: #444;
		position: relative;
		overflow: hidden;
	}
	.slide {
		position: absolute;
		top: 0;
		left: 100%;
		height: 100%;
		width: 100%;
		text-align: center;
		overflow: hidden;
	}
	.slide:first-child{
		left: 0;
	}
	.video{
		height: 100%;
		width: 100%;
		border:0;
	}
	.slide-arrow{
		position: absolute;
		top: 0;
		left: 0;
		height: 45%;
		width: 15%;
		cursor: pointer;
		opacity: .2;
	}
	.slide-arrow:hover{
		opacity: 1;
	}
	.slide-arrow:after{
		content: "\003c";
		text-align: center;
		display: block;
		height: 10%;
		width: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		font-size: 3em;
	}
	.slide-arrow.right:after{
		content: "\003e";
	}
	.slide-arrow.right{
		left: auto;
		right: 0;
	}
	</style>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://www.youtube.com/iframe_api"></script>
	<script>
	$(document).ready(function () {
		var pos = 0,
			slides = $('.slide'),
			numOfSlides = slides.length;

		function nextSlide() {
			// `[]` returns a vanilla DOM object from a jQuery object/collection
			slides[pos].video.stopVideo()
			slides.eq(pos).animate({ left: '-100%' }, 500);
			pos = (pos >= numOfSlides - 1 ? 0 : ++pos);
			slides.eq(pos).css({ left: '100%' }).animate({ left: 0 }, 500);
		}

		function previousSlide() {
			slides[pos].video.stopVideo()
			slides.eq(pos).animate({ left: '100%' }, 500);
			pos = (pos == 0 ? numOfSlides - 1 : --pos);
			slides.eq(pos).css({ left: '-100%' }).animate({ left: 0 }, 500);
		}

		$('.left').click(previousSlide);
		$('.right').click(nextSlide);
	})

	function onYouTubeIframeAPIReady() {
		$('.slide').each(function (index, slide) {
			// Get the `.video` element inside each `.slide`
			var iframe = $(slide).find('.video')[0]
			// Create a new YT.Player from the iFrame, and store it on the `.slide` DOM object
			slide.video = new YT.Player(iframe)
		})
	}
	</script>
</head>
<body>
	<div class="video-slider">
		<!-- SLIDE 1 -->
		<div class="slide">
			<iframe class="video" src="https://www.youtube.com/embed/YE7VzlLtp-4?ecver=2&enablejsapi=1"></iframe>
		</div>
		<!-- SLIDE 2 -->
		<div class="slide">
			<iframe class="video" src="https://www.youtube.com/embed/YE7VzlLtp-4?ecver=2&enablejsapi=1"></iframe>
		</div>
		<!-- END OF SLIDES -->
		<div class="slide-arrow left"></div>
		<div class="slide-arrow right"></div>
	</div>
</body>
