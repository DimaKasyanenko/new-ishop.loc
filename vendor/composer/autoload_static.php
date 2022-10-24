<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita10bdb858e3693b9086229a900fff7c4
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita10bdb858e3693b9086229a900fff7c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita10bdb858e3693b9086229a900fff7c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita10bdb858e3693b9086229a900fff7c4::$classMap;

        }, null, ClassLoader::class);
    }
}
