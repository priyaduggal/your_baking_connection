<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcabb9815c0dae72166ceaf4efd660b2d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'anlutro\\cURL\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'anlutro\\cURL\\' => 
        array (
            0 => __DIR__ . '/..' . '/anlutro/curl/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcabb9815c0dae72166ceaf4efd660b2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcabb9815c0dae72166ceaf4efd660b2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
