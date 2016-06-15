<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 15-6-16
 * Time: 22:21
 */

namespace CLEMobile\Controller;


use Symfony\Component\DependencyInjection\ContainerBuilder;

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
    }
}