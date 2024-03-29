<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c7a53eeda79e2adf106a04f193bdc9a
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wechat\\Test\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wechat\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wechat/Test',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c7a53eeda79e2adf106a04f193bdc9a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c7a53eeda79e2adf106a04f193bdc9a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
