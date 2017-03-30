<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
	<div class="b-title">
		<h2><?php print $title; ?></h2>
	</div>
<?php endif; ?>
<?php $cols = array_chunk($rows, 4, TRUE); ?>
<?php foreach ($cols as $col): ?>
	<div class="row">
		<?php foreach ($col as $id => $row): ?>
			<div class="col-md-3 col-sm-6">
				<?php print $row; ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endforeach; ?>