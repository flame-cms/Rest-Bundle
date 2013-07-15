<?php
/**
 * Class RouterFactory
 *
 * @author: Jiří Šifalda <sifalda.jiri@gmail.com>
 * @date: 13.07.13
 */
namespace Flame\CMS\RestBundle;

use Flame\Bundles\Router\IRouter;
use Nette\Application\Routers\RouteList;
use AdamStipak\RestRoute;

class RestRouter implements IRouter
{

	/**
	 * @return array
	 */
	public function getRouteList()
	{
		$router = new RouteList();
		$router[] = new RestRoute('Api:V1', 'json', true);
		return $router;
	}
}