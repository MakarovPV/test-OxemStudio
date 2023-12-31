<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c76b6e69866eb9f608dd2f2a36ab095
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c76b6e69866eb9f608dd2f2a36ab095::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c76b6e69866eb9f608dd2f2a36ab095::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c76b6e69866eb9f608dd2f2a36ab095::$classMap;

        }, null, ClassLoader::class);
    }
}
