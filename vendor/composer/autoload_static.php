<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit536447eac4ef8317709c22e22711ed7f
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit536447eac4ef8317709c22e22711ed7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit536447eac4ef8317709c22e22711ed7f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit536447eac4ef8317709c22e22711ed7f::$classMap;

        }, null, ClassLoader::class);
    }
}
