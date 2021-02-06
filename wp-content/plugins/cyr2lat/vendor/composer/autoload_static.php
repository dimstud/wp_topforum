<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66aae1050084c32980bd69853e156383
{
    public static $files = array (
        '344a0f93a05b8ca362c22e39586db500' => __DIR__ . '/../..' . '/lib/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Cyr_To_Lat\\ACF' => __DIR__ . '/../..' . '/classes/class-acf.php',
        'Cyr_To_Lat\\Admin_Notices' => __DIR__ . '/../..' . '/classes/class-admin-notices.php',
        'Cyr_To_Lat\\Conversion_Process' => __DIR__ . '/../..' . '/classes/background-processes/class-conversion-process.php',
        'Cyr_To_Lat\\Conversion_Tables' => __DIR__ . '/../..' . '/classes/class-conversion-tables.php',
        'Cyr_To_Lat\\Converter' => __DIR__ . '/../..' . '/classes/class-converter.php',
        'Cyr_To_Lat\\KAGG\\WP_Background_Processing\\WP_Async_Request' => __DIR__ . '/../..' . '/lib/wp-background-processing/class-wp-async-request.php',
        'Cyr_To_Lat\\KAGG\\WP_Background_Processing\\WP_Background_Process' => __DIR__ . '/../..' . '/lib/wp-background-processing/class-wp-background-process.php',
        'Cyr_To_Lat\\Main' => __DIR__ . '/../..' . '/classes/class-main.php',
        'Cyr_To_Lat\\Post_Conversion_Process' => __DIR__ . '/../..' . '/classes/background-processes/class-post-conversion-process.php',
        'Cyr_To_Lat\\Requirements' => __DIR__ . '/../..' . '/classes/class-requirements.php',
        'Cyr_To_Lat\\Settings' => __DIR__ . '/../..' . '/classes/class-settings.php',
        'Cyr_To_Lat\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/../..' . '/lib/polyfill-mbstring/Mbstring.php',
        'Cyr_To_Lat\\Term_Conversion_Process' => __DIR__ . '/../..' . '/classes/background-processes/class-term-conversion-process.php',
        'Cyr_To_Lat\\WP_CLI' => __DIR__ . '/../..' . '/classes/class-wp-cli.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66aae1050084c32980bd69853e156383::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66aae1050084c32980bd69853e156383::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66aae1050084c32980bd69853e156383::$classMap;

        }, null, ClassLoader::class);
    }
}
