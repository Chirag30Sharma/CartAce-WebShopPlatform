<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd08e0e40ec948bdd075aa151abd42d7c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd08e0e40ec948bdd075aa151abd42d7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd08e0e40ec948bdd075aa151abd42d7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd08e0e40ec948bdd075aa151abd42d7c::$classMap;

        }, null, ClassLoader::class);
    }
}
