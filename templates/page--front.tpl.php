<div class="wrapper">
	<div class="header">
		<div class="container">
			<div class="header-top">
				<div class="ht-logo">
					<a href="/" class="l-link">
						<img src="<?php print $path_to_theme; ?>/img/logo.png" alt="Логотип">
					</a>
				</div>
				<nav>
					<!--
					<a href="#" id="hamburger">МЕНЮ
					</a>
					-->
					<?php
					$menu = menu_tree ('main-menu');
					echo render ($menu);
					?>
				</nav>
				<div class="ht-phone">
					<i class="p-ico"></i>
					<a href="tel:7(4212)24-27-77" title="Позвонить">
						+7 (4212) <span>24-27-77</span>
					</a>
					<span class="p-lable">Единая справочная служба</span>
				</div>
			</div>
			<?php
			$block = module_invoke ('views', 'block_view', 'countries-block');
			echo render ($block['content']);
			?>
		</div>
	</div>

	<div class="banner">
		<div class="container">
			<div class="swiper-container swiper-container-horizontal">
				<div class="swiper-wrapper">
					<?php
					$block = module_invoke ('views', 'block_view', 'slider-block');
					echo render ($block['content']);
					?>
				</div>
				<div class="s-controls">
				</div>
			</div>
		</div>
	</div>
	<div class="block block-red">
		<div class="container">
			<div class="b-title">
				<h2>
					Самые <span>актуальные</span> туры
				</h2>
			</div>
			<div class="block-list">
				<?php
				$block = module_invoke ('views', 'block_view', 'tours-block');
				echo render ($block['content']);
				?>
			</div>
		</div>
	</div>

	<div class="block block-blue">
		<div class="container">
			<div class="b-title">
				<h2>
					Самые <span>интересные</span> экскурсии
				</h2>
			</div>
			<div class="block-list">
				<?php
				$block = module_invoke ('views', 'block_view', 'excursion-block');
				echo render ($block['content']);
				?>
			</div>
		</div>
	</div>

	<div class="block block-about">
		<div class="container">
			<?php
			$block = block_load ('block', '1');
			$block = _block_render_blocks (array($block));
			$block_build = _block_get_renderable_array ($block);
			echo drupal_render ($block_build);
			?>
		</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="f-countries">
				<?php
				$block = module_invoke ('views', 'block_view', 'countries-block');
				echo render ($block['content']);
				?>
			</div>

			<div class="f-bottom">
				<div class="fb-logo">
					<a href="/"><img src="<?php print $path_to_theme; ?>/img/footer-logo.png" alt="логотип"></a>
				</div>
				<?php
				$menu = menu_tree ('main-menu');
				echo render ($menu);
				?>
				<div class="f-phone">
					<a href="tel:+7 (4212) 24-27-77">+7 (4212) <b>24-27-77</b></a>
				</div>
			</div>
		</div>
	</div>
</div>