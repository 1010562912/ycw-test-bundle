<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/14
 * Time: 15:17
 */

namespace Ycw\TestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class YcwTestExtension extends Extension
{
    /**
     * bundle注入容器 服务配置
     * Time: 15:44
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(\dirname(__DIR__) . '/Resources/config')
        );
        $loader->load('services.yaml');
    }
}