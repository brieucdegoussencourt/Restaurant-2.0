<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit097f9706c077068943e360e2fb664e46
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brieuc\\Restaurant20\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brieuc\\Restaurant20\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit097f9706c077068943e360e2fb664e46::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit097f9706c077068943e360e2fb664e46::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit097f9706c077068943e360e2fb664e46::$classMap;

        }, null, ClassLoader::class);
    }
}
