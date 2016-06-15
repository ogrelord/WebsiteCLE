<?php

require_once implode(DIRECTORY_SEPARATOR, array(__DIR__, 'settings.php',));

use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

$container
    ->register('albumRepository')
    ->addArgument(DB_HOST)
    ->addArgument(DB_USER)
    ->addArgument(DB_PASS)
    ->addArgument(DB_NAME);

$container
    ->register('albumService', 'CLEMobile\Service\AlbumServiceWrapper')
    ->addArgument(new Reference('albumRepository'))
    ->addArgument(new Definition('CLEMobile\Utils\Image'));

$container
    ->register('spotifyService', 'CLEMobile\Service\SpotifyServiceWrapper');