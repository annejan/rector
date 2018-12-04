<?php declare(strict_types=1);

namespace Rector\Tests\Rector\MethodBody\ReturnThisRemoveRector;

use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ReturnThisRemoveRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles(
            [__DIR__ . '/Wrong/wrong.php.inc', __DIR__ . '/Wrong/wrong2.php.inc', __DIR__ . '/Wrong/wrong3.php.inc']
        );
    }

    protected function provideConfig(): string
    {
        return __DIR__ . '/config.yml';
    }
}
