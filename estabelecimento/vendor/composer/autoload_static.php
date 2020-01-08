<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita60b90576a3ed5509f9d6e319cc965b8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita60b90576a3ed5509f9d6e319cc965b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita60b90576a3ed5509f9d6e319cc965b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
