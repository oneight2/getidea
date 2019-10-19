</div>
<!-- footer area start-->
<footer>
	<div class="footer-area">
		<p>© Copyright 2019. All right reserved.</p>
	</div>
</footer>
<!-- footer area end-->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/js/scriptsAdmin.js"></script>
<script src="<?= base_url(); ?>assets/js/dropzone.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
	$(document).ready(function() {
		var slider = $('.slider').bxSlider({
			mode: 'horizontal', //mode: 'fade',         
			speed: 300,
			//不要自動
			auto: false,
			infiniteLoop: true,
			hideControlOnEnd: true,
			useCSS: false,
			onSliderLoad: function(currentIndex) {
				//初始是第一張
				$('.menu a').filter('[data-picindex="' + (currentIndex + 1) + '"]').addClass('active').siblings().removeClass('active');
			},
			onSlideAfter: function($slideElement, oldIndex, newIndex) {
				//切換後
				$('.menu a').filter('[data-picindex="' + (newIndex + 1) + '"]').addClass('active').siblings().removeClass('active');
			}
		});

		$('.menu a').click(function(event) {
			event.preventDefault();
			var $this = $(this);
			slider.goToSlide($this.data('picindex') - 1);
		});

	});
</script>

</body>

</html>