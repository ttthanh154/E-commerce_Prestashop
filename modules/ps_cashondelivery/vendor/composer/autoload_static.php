<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit949895a983cfea8514f9f53bb1127b75
{
    public static $classMap = array (
        'Ps_Cashondelivery' => __DIR__ . '/../..' . '/ps_cashondelivery.php',
        'Ps_CashondeliveryValidationModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit949895a983cfea8514f9f53bb1127b75::$classMap;

        }, null, ClassLoader::class);
    }
}
