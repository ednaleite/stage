

<link rel="stylesheet" href="public/style.css"/>


<span class="chart" data-percent="67" >
		<div>Total</div>
		<div>R$ 1.750</div>
		<div style="margin-top: 66%;font-size: 10px;">Ano de 2020</div>
	</span>


	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="../js/jquery.easypiechart.min.js"></script>
	<script>
	$(function() {
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
			scaleColor:false,
			size:90,
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
	});
	</script>