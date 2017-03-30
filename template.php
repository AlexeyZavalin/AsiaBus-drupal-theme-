<?php

function bus_preprocess_page(&$variables)
{
	$variables['path_to_theme'] = '/' . path_to_theme();
}