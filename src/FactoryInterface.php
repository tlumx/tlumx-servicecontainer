<?php
/**
 * Tlumx (https://tlumx.com/)
 *
 * @author    Yaroslav Kharitonchuk <yarik.proger@gmail.com>
 * @link      https://github.com/tlumx/tlumx-servicecontainer
 * @copyright Copyright (c) 2016-2018 Yaroslav Kharitonchuk
 * @license   https://github.com/tlumx/tlumx-servicecontainer/blob/master/LICENSE  (MIT License)
 */
namespace Tlumx\ServiceContainer;

use Psr\Container\ContainerInterface;
use Tlumx\ServiceContainer\Exception\ServiceNotCreatedException;
use Tlumx\ServiceContainer\Exception\ServiceNotFoundException;

interface FactoryInterface
{
    /**
    * Create an service object.
    *
    * @param ContainerInterface $container
    * @return $object Service.
    * @throws ServiceNotFoundException if unable to resolve the service.
    * @throws ServiceNotCreatedException if an exception is raised when creating a service.
    * @throws ContainerException if any other error occurs.
    */
    public function __invoke(ContainerInterface $container);
}
