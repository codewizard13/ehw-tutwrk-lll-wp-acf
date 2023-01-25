<?php
/**
 * Block Name: Fun Facts
 */

$id = 'fun-facts-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<div class="fun-facts <?php echo $align_class; ?>" id="<?php echo $id; ?>">
    <h4><?php the_field( 'fact_title' ); ?></h4>
	<div class="fact-description"><?php the_field( 'fact_description' ); ?></div>
</div>

<style type="text/css">
.fun-facts {
	background: #CFCFCF;
	border: 1px solid #666666;
	margin: 15px;
	padding: 15px;
}

.fun-facts h4 {
	border-bottom: #666666;
}
</style>