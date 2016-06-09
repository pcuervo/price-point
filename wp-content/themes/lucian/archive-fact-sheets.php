<?php get_header(); ?>
	<div id="img-header" class="vc_row wpb_row vc_custom_bg-image vc_row-has-fill vc_row-fluid" style="">
		<div class="container-fluid">
			<div class="row vc_row ">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner " style="">
						<div class="wpb_wrapper">
							<h2 style="margin-bottom: 40px; font-size: 60px;line-height: 1.3;text-align: center;font-family:Open Sans;font-weight:400;font-style:normal" class="vc_custom_heading vc_custom_1465419667436 default">FACT SHEETS</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="[ container ][ margin-top--xlarge margin-bottom--xxxlarge ]" id="fact_sheet">
		<div class="[ row ]">
			<div class="[ col-xs-12 ][ margin-bottom--xlarge ]">
				<p class="[ text-center ]">Download our fact sheet to learn more about what Price Point can do for your organization.</p>
			</div>
			<div class="[ clearfix ]"></div>
			<?php $fact_sheets = get_fact_sheets(); ?>
			<?php foreach ( $fact_sheets as $key => $paper ) :?>
				<div class="[ col-xs-12 col-sm-4 ][ text-center ][ margin-auto ]">
					<a href="<?php echo site_url( 'fact-sheet-download' ); ?>/?fspdfid=<?php echo $paper['id'] ?>">
						<img class="[ block ]" src="<?php echo THEMEPATH; ?>images/pdf.png" alt="image pdf">
						<br>
						<?php echo $paper['title']; ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

<?php get_footer(); ?>