<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ba1e5c2699249a545443f4f54d339ae
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PhpGenerator\\Tests\\' => 29,
            'WsdlToPhp\\PhpGenerator\\' => 23,
            'WsdlToPhp\\PackageGenerator\\' => 27,
            'WsdlToPhp\\PackageBase\\' => 22,
            'WsdlToPhp\\DomHandler\\' => 21,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Console\\' => 26,
            'Seld\\PharUtils\\' => 15,
            'Seld\\JsonLint\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
        'C' => 
        array (
            'Composer\\XdebugHandler\\' => 23,
            'Composer\\Spdx\\' => 14,
            'Composer\\Semver\\' => 16,
            'Composer\\CaBundle\\' => 18,
            'Composer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PhpGenerator\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/phpgenerator/tests',
        ),
        'WsdlToPhp\\PhpGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/phpgenerator/src',
        ),
        'WsdlToPhp\\PackageGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagegenerator/src',
        ),
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'WsdlToPhp\\DomHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/domhandler/src',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Seld\\PharUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/phar-utils/src',
        ),
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'Composer\\XdebugHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/xdebug-handler/src',
        ),
        'Composer\\Spdx\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/spdx-licenses/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/composer/src/Composer',
        ),
    );

    public static $classMap = array (
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ba1e5c2699249a545443f4f54d339ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ba1e5c2699249a545443f4f54d339ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ba1e5c2699249a545443f4f54d339ae::$classMap;

        }, null, ClassLoader::class);
    }
}