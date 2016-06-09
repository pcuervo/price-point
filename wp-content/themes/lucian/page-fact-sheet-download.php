<?php
/*
Template Name: pinnacle_premium
*/
?>
<?php
	if( ! isset( $_GET['fspdfid'] ) ) wp_redirect( site_url( 'fact-sheet' ) );
	$pdf = get_fact_sheet_pdf( $_GET['fspdfid']  );
?>
<?php get_header(); ?>
<?php get_template_part('templates/page', 'header'); ?>
	<div class="[ container ][ margin-top--xxl ]">
		<div class="[ row ]">
			<div class="[ wpb_column vc_column_container vc_col-sm-4 ]"></div>
			<div class="[ wpb_column vc_column_container vc_col-sm-4 ]">
				<script type="text/javascript">
				jQuery(document).ready(function($) {
			    	$.extend($.validator.messages, {
				        required: "This field is required.",
						email: "Please enter a valid email address.",
					});
			    	$(".js-fact-sheet-form").validate();
				});
				</script>
				<script type="text/javascript" src="<?php echo JSPATH; ?>jquery.validate-ck.js"></script>
				<div class="testimonial-form-container">
					<p class="[ margin-bottom--large ]"><strong>File to download:</strong><span> <?php echo $pdf['title'] ?></span></p>
					<div>
						<form class="[ js-fact-sheet-form ]" name="new_post" method="post" enctype="multipart/form-data" novalidate="novalidate">
							<p>
								<label>Name</label>
								<input type="text" class="full required requiredField" value="" id="kt-feedback-post-title" name="name">
							</p>
							<p>
								<label>Email</label>
								<input type="email" class="full required requiredField" value="" id="kt-feedback-post-email" name="email">
							</p>
							<p>
								<label>Position</label>
								<input type="text" class="full required requiredField" id="kt-feedback-post-position" value="" name="position">
							</p>
							<p>
								<label>Company</label>
								<input type="text" class="full required requiredField" value="" id="kt-feedback-post-company" name="company">
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