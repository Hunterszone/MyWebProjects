<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9fd93505c62a2fc7794fe15eb4a14b9
{
    public static $files = array (
        '92c8763cd6170fce6fcfe7e26b4e8c10' => __DIR__ . '/..' . '/symfony/phpunit-bridge/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Bridge\\PhpUnit\\' => 23,
            'Sonata\\GoogleAuthenticator\\Tests\\' => 33,
            'Sonata\\GoogleAuthenticator\\' => 27,
        ),
        'G' => 
        array (
            'Google\\Authenticator\\Tests\\' => 27,
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Bridge\\PhpUnit\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/phpunit-bridge',
        ),
        'Sonata\\GoogleAuthenticator\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Sonata\\GoogleAuthenticator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Google\\Authenticator\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9fd93505c62a2fc7794fe15eb4a14b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9fd93505c62a2fc7794fe15eb4a14b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
