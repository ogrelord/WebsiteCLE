<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 15-6-16
 * Time: 22:21
 */

namespace CLEMobile\Controller;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\Config\FileLocator;

class BaseController
{
    /**
     * @var ContainerBuilder
     */
    protected $container;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->container = new ContainerBuilder();
        $loader = new PhpFileLoader($this->container, new FileLocator(
            implode(DIRECTORY_SEPARATOR, array(__DIR__, '..', '..', 'app'))
        ));
        $loader->load('services.php');
    }
}