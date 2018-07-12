<?php
/**
 * Tlumx (https://tlumx.com/)
 *
 * @author    Yaroslav Kharitonchuk <yarik.proger@gmail.com>
 * @link      https://github.com/tlumx/tlumx-servicecontainer
 * @copyright Copyright (c) 2016-2018 Yaroslav Kharitonchuk
 * @license   https://github.com/tlumx/tlumx-servicecontainer/blob/master/LICENSE  (MIT License)
 */
namespace Tlumx\ServiceContainer\Exception;

use Psr\Container\ContainerExceptionInterface as PsrContainerException;

/**
 * Base interface representing a generic exception in a container.
 * PSR-11 implement the ContainerExceptionInterface.
 */
class ContainerException extends \RuntimeException implements PsrContainerException
{
}
