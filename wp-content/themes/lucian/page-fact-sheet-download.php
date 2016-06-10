<?php

?>
<?php
	if( ! isset( $_GET['fspdfid'] ) ) wp_redirect( site_url( 'fact-sheets' ) );
	$pdf = get_fact_sheets_pdf( $_GET['fspdfid']  );
?>
<?php get_header(); ?>
<?php get_template_part('templates/page', 'header'); ?>
	<div id="img-header" class="vc_row wpb_row vc_custom_bg-image vc_row-has-fill vc_row-fluid [ margin-bottom ]" style="">
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
	<div class="[ container ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-3 ]"></div>
			<div class="[ col-xs-12 col-sm-6 ][ margin-bottom ]">
				<div class="testimonial-form-container">
					<p class="[ margin-bottom--large ]"><strong class="[ color-secondary ]">File to download:</strong><span> <?php echo $pdf['title'] ?></span></p>
					<div>
						<form class="[ js-fact-sheets-form ][ margin-bottom--large ]" name="new_post" method="post" enctype="multipart/form-data" novalidate="novalidate">
							<p>
								<label><strong>Name</strong></label>
								<input type="text" class="full required requiredField [ background-gray ]" value="" id="kt-feedback-post-title" name="name">
							</p>
							<p>
								<label><strong>Email</strong></label>
								<input type="email" class="full required requiredField [ background-gray ]" value="" id="kt-feedback-post-email" name="email">
							</p>
							<p>
								<label><strong>Position</strong></label>
								<input type="text" class="full required requiredField [ background-gray ]" id="kt-feedback-post-position" value="" name="position">
							</p>
							<p>
								<label><strong>Company</strong></label>
								<input type="text" class="full required requiredField [ background-gray ]" value="" id="kt-feedback-post-company" name="company">
							</p>
							<input type="hidden" name="pdf_url" value="<?php echo $pdf['url'] ?>">
							<input type="hidden" name="pdf_title" value="<?php echo $pdf['title'] ?>">
							<input type="hidden" name="action" value="send_pdf_by_email">
							<input id="submit" type="submit" class="vc_general vc_btn3 btn btn-primary " tabindex="3" value="Send by email">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>