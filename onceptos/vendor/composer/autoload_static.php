<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a6fd10bb28bac8ade46957961921729
{
    public static $files = array (
        '9267fb2e63701c6394155f9282048564' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a6fd10bb28bac8ade46957961921729::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a6fd10bb28bac8ade46957961921729::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a6fd10bb28bac8ade46957961921729::$classMap;

        }, null, ClassLoader::class);
    }
}
