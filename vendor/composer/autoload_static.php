<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc542433c49243385d0ea3a6bb7a1c08
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Helling\\Unifiapi\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Helling\\Unifiapi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc542433c49243385d0ea3a6bb7a1c08::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc542433c49243385d0ea3a6bb7a1c08::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc542433c49243385d0ea3a6bb7a1c08::$classMap;

        }, null, ClassLoader::class);
    }
}
