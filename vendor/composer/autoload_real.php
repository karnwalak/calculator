<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite1b129d936f4a8da0a317265bd6ea479
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInite1b129d936f4a8da0a317265bd6ea479', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite1b129d936f4a8da0a317265bd6ea479', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite1b129d936f4a8da0a317265bd6ea479::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
