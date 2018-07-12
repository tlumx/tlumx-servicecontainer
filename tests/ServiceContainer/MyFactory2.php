<?php
/**
 * Tlumx (https://tlumx.com/)
 *
 * @author    Yaroslav Kharitonchuk <yarik.proger@gmail.com>
 * @link      https://github.com/tlumx/tlumx-servicecontainer
 * @copyright Copyright (c) 2016-2018 Yaroslav Kharitonchuk
 * @license   https://github.com/tlumx/tlumx-servicecontainer/blob/master/LICENSE  (MIT License)
 */
namespace Tlumx\Tests\ServiceContainer;

use Tlumx\ServiceContainer\FactoryInterface;
use Psr\Container\ContainerInterface;

class MyFactory2 implements FactoryInterface
{
    public function __invoke(ContainerInterface $container)
    {
        $val = $container->has('a') ? $container->get('a') : 0;
        $val++;
        return $val++;
    }
}
