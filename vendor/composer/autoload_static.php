<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c9a9e21eee2e955a2f263a9e770c67c
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQLAPI\\ExtensionDemo\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQLAPI\\ExtensionDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GraphQLAPI\\ExtensionDemo\\Component' => __DIR__ . '/../..' . '/src/Component.php',
        'GraphQLAPI\\ExtensionDemo\\GraphQLAPIExtension' => __DIR__ . '/../..' . '/src/GraphQLAPIExtension.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c9a9e21eee2e955a2f263a9e770c67c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c9a9e21eee2e955a2f263a9e770c67c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c9a9e21eee2e955a2f263a9e770c67c::$classMap;

        }, null, ClassLoader::class);
    }
}