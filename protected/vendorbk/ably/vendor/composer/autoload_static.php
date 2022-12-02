<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0447531f12d3d62bfae137fab465cebc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ably\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ably\\' => 
        array (
            0 => __DIR__ . '/..' . '/ably/ably-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0447531f12d3d62bfae137fab465cebc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0447531f12d3d62bfae137fab465cebc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}