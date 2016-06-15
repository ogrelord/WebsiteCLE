<?php
/**
 * Created by PhpStorm.
 * User: darryl
 * Date: 15-6-16
 * Time: 22:23
 */

namespace CLEMobile\Controller;


use CLEMobile\Databases\AlbumRepository;

class AlbumController extends BaseController
{
    /**
     * AlbumController constructor.
     */
    public function __construct()
    {
        $this->container->get('albumRepository')
    }
}