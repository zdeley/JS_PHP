<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit71461623b2a58508fc7a99c7f8c58c8c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Cadastrodepresenca\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Cadastrodepresenca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit71461623b2a58508fc7a99c7f8c58c8c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit71461623b2a58508fc7a99c7f8c58c8c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit71461623b2a58508fc7a99c7f8c58c8c::$classMap;

        }, null, ClassLoader::class);
    }
}
