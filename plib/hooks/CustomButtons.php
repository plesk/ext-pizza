<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

class Modules_Pizza_CustomButtons extends pm_Hook_CustomButtons
{
	public function getButtons()
	{
		$pizza_link = 'http://www.deliveryhero.com/';

		if(pm_Settings::get('pizzalink'))
		{
			$pizza_link = pm_Settings::get('pizzalink');
		}

		$buttons = [[
			'place' => self::PLACE_DOMAIN,
			'title' => 'GET Your Pizza',
			'description' => 'One click away from a delicious pizza!',
			'icon' => pm_Context::getBaseUrl() . 'images/icons/pizza-icon.png',
			'link' => $pizza_link,
			'newWindow' => true,
		]];

		return $buttons;
	}
}
