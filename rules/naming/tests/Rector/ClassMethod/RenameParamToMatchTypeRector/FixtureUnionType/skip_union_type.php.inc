<?php

namespace Rector\Naming\Tests\Rector\ClassMethod\RenameParamToMatchTypeRector\FixtureUnionType;

use Rector\Naming\Tests\Rector\ClassMethod\RenameParamToMatchTypeRector\Source\EliteManager;

class SkipUnionType
{
    public function __construct(EliteManager|int $eventManager)
    {
        $this->eventManager = $eventManager;
    }
}

