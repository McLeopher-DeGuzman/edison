<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcec812cad4c358816cfae3a7b5b2af1f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcec812cad4c358816cfae3a7b5b2af1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcec812cad4c358816cfae3a7b5b2af1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcec812cad4c358816cfae3a7b5b2af1f::$classMap;

        }, null, ClassLoader::class);
    }
}