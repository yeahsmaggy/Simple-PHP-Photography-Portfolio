<?php require('includes/header.php');?>
<div class="jumbotron">
	<div class="html_carousel">
		<div id="slideshow">
			<?php
			$imgarray =[['path' => '**filename**','alt' => '****alt text*****']];
			shuffle($imgarray);
			foreach($imgarray as $img) {
				if(isset($img['portrait']) && $img['portrait'] == true) {
					print $markup = '<div class="slide">
						<div class="col-xs-6" style="padding-left:0px;padding-right:10px;"><img src="/images/photo_category_foldername/' . $img['path'][0] . '" alt="' . $img['alt'][0] . '" /></div>
						<div class="caption">
							<h4></h4>
							<p></p>
						</div>
					</div>';
				}
				else
				{
					print $markup = '<div class="slide"><img src="/images/photo_category_foldername/' . $img['path'] . '.jpg" alt="' . $img['alt'] . '" /><div class="caption">
						<h4>***caption heading***</h4>
						<p>***paragraph text***</p>
					</div>
				</div>';
			}
		}
		?>
	</div>
</div>
</div>
</div>
<?php require('includes/footer.php');?>