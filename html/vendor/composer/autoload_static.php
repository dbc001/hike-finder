<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a7d86f547d1dabedcba9d77e41c44a4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\Views\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\Views\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/views',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a7d86f547d1dabedcba9d77e41c44a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a7d86f547d1dabedcba9d77e41c44a4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3a7d86f547d1dabedcba9d77e41c44a4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
