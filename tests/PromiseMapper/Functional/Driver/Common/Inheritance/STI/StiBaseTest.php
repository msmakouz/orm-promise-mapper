<?php

declare(strict_types=1);

namespace Cycle\ORM\PromiseMapper\Tests\Functional\Driver\Common\Inheritance\STI;

use Cycle\ORM\Collection\ArrayCollectionFactory;
use Cycle\ORM\Config\RelationConfig;
use Cycle\ORM\Factory;
use Cycle\ORM\Schema;
use Cycle\ORM\PromiseMapper\Tests\Functional\Driver\Common\BaseTest;
use Cycle\ORM\PromiseMapper\Tests\Traits\TableTrait;

abstract class StiBaseTest extends BaseTest
{
    use TableTrait;

    public function setUp(): void
    {
        parent::setUp();

        $factory = (new Factory(
            $this->dbal,
            RelationConfig::getDefault(),
            null,
            new ArrayCollectionFactory()
        ));

        $this->orm = $this->withSchema(new Schema($this->getSchemaArray()))->with(factory: $factory);
    }

    abstract protected function getSchemaArray(): array;
}
