<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16a205f66d7181e0d2072e143b3b2977
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Belka\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Belka\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Modules/Belka',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16a205f66d7181e0d2072e143b3b2977::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16a205f66d7181e0d2072e143b3b2977::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
