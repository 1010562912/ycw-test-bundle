<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 14:30
 */

namespace Ycw\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class YcwTestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}