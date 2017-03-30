<div class="wrapper">
	<div class="header">
		<div class="container">
			<div class="header-top">
				<div class="ht-logo">
					<a href="/" class="l-link">
						<img src="<?php print $path_to_theme; ?>/img/logo.png" alt="Логотип">
					</a>
				</div>
				<?php
				$menu = menu_tree('main-menu');
				echo render($menu);
				?>
				<div class="ht-phone">
					<i class="p-ico"></i>
					<a href="tel:7(4212)24-27-77" title="Позвонить">
						+7 (4212) <span>24-27-77</span>
					</a>
					<span class="p-lable">Единая справочная служба</span>
				</div>
			</div>
			<div class="header-countries">
				<?php
				$block = module_invoke('views', 'block_view', 'countries-block');
				echo render($block['content']);
				?>
			</div>
		</div>
	</div>
	<div class="block">
		<div class="container">
			<?php print $breadcrumb; ?>
			<?php print $messages; ?>
			<div class="b-title b-title_left b-title_blue">
				<h2><?php print $title; ?></h2>
			</div>
			<?php print render($page['content']); ?>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="f-countries">
				<?php
				$block = module_invoke('views', 'block_view', 'countries-block');
				echo render($block['content']);
				?>
			</div>
			<div class="f-bottom">
				<div class="fb-logo">
					<a href="/"><img src="<?php print $path_to_theme; ?>/img/footer-logo.png" alt="логотип"></a>
				</div>
				<?php
				$menu = menu_tree('main-menu');
				echo render($menu);
				?>
				<div class="f-phone">
					<a href="tel:+7 (4212) 24-27-77">+7 (4212) <b>24-27-77</b></a>
				</div>
			</div>
		</div>
	</div>
</div>
