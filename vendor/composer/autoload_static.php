<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit023d74e1a97159f09844b4a6671b07ea
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Asset\\' => 24,
        ),
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Asset\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/asset',
        ),
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit023d74e1a97159f09844b4a6671b07ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit023d74e1a97159f09844b4a6671b07ea::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit023d74e1a97159f09844b4a6671b07ea::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
