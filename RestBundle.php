<?php
/**
 * Class RestBundle
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 13.07.13
 */
namespace Flame\CMS\RestBundle;

use Flame\Bundles\Bundle;
use Flame\Rest\DI\RestExtension;

class RestBundle extends Bundle
{

	/**
	 * @return array
	 */
	public function getConfigFiles()
	{
		return array(
			$this->getCurrentPath() . '/config/config.neon'
		);
	}

	protected function beforeSetUp()
	{
		RestExtension::install($this->getConfigurator());
	}
}