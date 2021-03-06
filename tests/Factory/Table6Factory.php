<?php
declare(strict_types=1);

namespace App\Test\Factory;

use App\Test\FixturesMaker;
use Faker\Generator;
use CakephpFixtureFactories\Factory\BaseFactory as CakephpBaseFactory;

/**
 * Table6Factory
 */
class Table6Factory extends CakephpBaseFactory
{
    /**
     * Defines the Table Registry used to generate entities with
     * @return string
     */
    protected function getRootTableRegistryName(): string
    {
        return 'Table6s';
    }

    /**
     * Defines the default values of you factory. Useful for
     * not nullable fields. You may use methods of the factory here too.
     * @return void
     */
    protected function setDefaultTemplate(): void
    {
        $this->setDefaultData(function(Generator $faker) {
            return FixturesMaker::getRecord();
        });
    }

}