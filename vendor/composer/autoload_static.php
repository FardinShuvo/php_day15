<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac25c1cc654dd950988f92d1cdf3843f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac25c1cc654dd950988f92d1cdf3843f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac25c1cc654dd950988f92d1cdf3843f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac25c1cc654dd950988f92d1cdf3843f::$classMap;

        }, null, ClassLoader::class);
    }
}
