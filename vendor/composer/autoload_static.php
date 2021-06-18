<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03d58a6bf29671be33995296b197f796
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03d58a6bf29671be33995296b197f796::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03d58a6bf29671be33995296b197f796::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03d58a6bf29671be33995296b197f796::$classMap;

        }, null, ClassLoader::class);
    }
}
