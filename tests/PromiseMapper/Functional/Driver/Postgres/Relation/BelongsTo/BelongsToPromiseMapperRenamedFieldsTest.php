<?php

declare(strict_types=1);

namespace Cycle\ORM\PromiseMapper\Tests\Functional\Driver\Postgres\Relation\BelongsTo;

// phpcs:ignore
use Cycle\ORM\PromiseMapper\Tests\Functional\Driver\Common\Relation\BelongsTo\BelongsToPromiseMapperRenamedFieldsTest as CommonClass;

/**
 * @group driver
 * @group driver-postgres
 */
class BelongsToPromiseMapperRenamedFieldsTest extends CommonClass
{
    public const DRIVER = 'postgres';
}
