<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita54c5fd99f8fb7b7c8bf3047f0ad99e0
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static $prefixesPsr0 = array (
        'I' => 
        array (
            'Intervention\\Image' => 
            array (
                0 => __DIR__ . '/..' . '/intervention/image/src',
            ),
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita54c5fd99f8fb7b7c8bf3047f0ad99e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita54c5fd99f8fb7b7c8bf3047f0ad99e0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita54c5fd99f8fb7b7c8bf3047f0ad99e0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita54c5fd99f8fb7b7c8bf3047f0ad99e0::$classMap;

        }, null, ClassLoader::class);
    }
}