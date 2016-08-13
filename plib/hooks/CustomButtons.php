<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

class Modules_Pizza_CustomButtons extends pm_Hook_CustomButtons
{
	public function getButtons()
	{
		$buttons = [[
			'place' => self::PLACE_DOMAIN,
			'title' => 'GET Your Pizza',
			'description' => 'One click away from a delicious pizza!',
			'icon' => pm_Context::getBaseUrl() . 'images/icons/pizza-icon.png',
			'link' => pm_Settings::get('pizzalink'),
			'newWindow' => true,
		]];

		return $buttons;
	}
}
