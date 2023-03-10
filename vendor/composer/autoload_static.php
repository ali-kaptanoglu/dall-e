<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb30241010a33a77d48f51353231c9747
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb30241010a33a77d48f51353231c9747::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb30241010a33a77d48f51353231c9747::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb30241010a33a77d48f51353231c9747::$classMap;

        }, null, ClassLoader::class);
    }
}
