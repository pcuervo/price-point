<?php get_header(); ?>

	<section class="[ container ][ margin-top--xxl ]" id="fact_sheet">
		<div class="[ row ]">
			<div class="[ wpb_column vc_column_container vc_col-sm-12 ][ margin-bottom--large ]">
				<p>Download our fact sheet to learn more about what Price Point can do for your organization.</p>
			</div>
			<div class="[ clearfix ]"></div>
			<?php $fact_sheets = get_fact_sheets(); ?>
			<?php foreach ( $fact_sheets as $key => $paper ) :?>
				<div class="[ wpb_column vc_column_container vc_col-sm-4 ][ text-center ][ margin-auto ]">
					<a href="<?php echo site_url('fact-sheet-download'); ?>/?fspdfid=<?php echo $paper['id'] ?>">
						<img class="[ block ]" src="<?php echo THEMEPATH; ?>images/pdf.jpg" alt="image pdf">
						<br>
						<?php echo $paper['title']; ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

<?php get_footer(); ?>