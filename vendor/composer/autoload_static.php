<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite72a7a9f07f2e681277bbdc2e892793d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sunnytree\\Acorn\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sunnytree\\Acorn\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite72a7a9f07f2e681277bbdc2e892793d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite72a7a9f07f2e681277bbdc2e892793d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
