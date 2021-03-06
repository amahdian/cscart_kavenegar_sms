<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59ede5d55ee66fb8795db7117cc9b06d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kavenegar\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kavenegar\\' => 
        array (
            0 => __DIR__ . '/..' . '/kavenegar/php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59ede5d55ee66fb8795db7117cc9b06d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59ede5d55ee66fb8795db7117cc9b06d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
