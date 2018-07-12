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

class ClassHaveOptionalConstructorParameter
{
    public $name;

    public $org;

    public function __construct($name = 'Yaroslav')
    {
        $this->name = $name;
    }

    public function setOrg($org = 'Tlumx')
    {
        $this->org = $org;
    }
}
