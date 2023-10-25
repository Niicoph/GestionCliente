<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cf134d11f259636a3c20846a08de80d
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Niicop\\GestionCliente\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Niicop\\GestionCliente\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cf134d11f259636a3c20846a08de80d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cf134d11f259636a3c20846a08de80d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4cf134d11f259636a3c20846a08de80d::$classMap;

        }, null, ClassLoader::class);
    }
}
