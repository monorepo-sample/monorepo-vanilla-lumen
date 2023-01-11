<?php

declare(strict_types=1);

use Symplify\MonorepoBuilder\ComposerJsonManipulator\ValueObject\ComposerJsonSection;
use Symplify\MonorepoBuilder\Config\MBConfig;
use Symplify\MonorepoBuilder\ValueObject\Option;

return static function (MBConfig $mbConfig): void {
    echo __DIR__;
    // where are the packages located?
    $mbConfig->packageDirectories([
        // default value

        __DIR__ . '/packages',
        // custom
//        __DIR__ . '/projects',
    ]);

    // how to skip packages in loaded directories?
//    $mbConfig->packageDirectoriesExcludes([__DIR__ . '/packages/secret-package']);

    // "merge" command related

    // what extra parts to add after merge?
//    $mbConfig->dataToAppend([
//        ComposerJsonSection::AUTOLOAD_DEV => [
//            'psr-4' => [
//                'Symplify\Tests\\' => 'tests',
//            ],
//        ],
//        ComposerJsonSection::REQUIRE_DEV => [
//            'phpstan/phpstan' => '^0.12',
//        ],
//    ]);

//    $mbConfig->dataToRemove([
//        ComposerJsonSection::REQUIRE => [
//            // the line is removed by key, so version is irrelevant, thus *
//            'phpunit/phpunit' => '*',
//        ],
//        ComposerJsonSection::REPOSITORIES => [
//            // this will remove all repositories
//            Option::REMOVE_COMPLETELY,
//        ],
//    ]);
};