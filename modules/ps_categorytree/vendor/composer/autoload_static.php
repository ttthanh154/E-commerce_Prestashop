<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01948c7a1ab265d54abbe10b652f4367
{
    public static $classMap = array (
        'Ps_CategoryTree' => __DIR__ . '/../..' . '/ps_categorytree.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit01948c7a1ab265d54abbe10b652f4367::$classMap;

        }, null, ClassLoader::class);
    }
}
