<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34dac7294ba72700b5a297d5aa3741ca
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit34dac7294ba72700b5a297d5aa3741ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34dac7294ba72700b5a297d5aa3741ca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34dac7294ba72700b5a297d5aa3741ca::$classMap;

        }, null, ClassLoader::class);
    }
}