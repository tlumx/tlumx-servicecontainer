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

use Tlumx\ServiceContainer\ServiceContainer;

class ANotFactoryNotCallable
{
    protected $some;

    protected $c;

    public function __construct($some)
    {
    }

    public function getSome()
    {
        return $this->some;
    }

    public function setContainer(ServiceContainer $c)
    {
        $this->c = $c;
    }

    public function getContainer()
    {
        return $this->c;
    }
}
