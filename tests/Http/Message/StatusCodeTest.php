<?php
/**
 * This file is part of the Rodas\Psr library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2025 Marcos Porto <php@marcospor.to>
 * @license https://opensource.org/license/MIT MIT
 * @link https://marcospor.to/repositories/psr
 */

declare(strict_types=1);

namespace Rodas\Psr\Test\Http\Message;

use PHPUnit\Framework\TestCase;
use Rodas\Psr\Http\Message\StatusCode;

class StatusCodeTest extends TestCase {

    /**
     * Test that all StatusCode cases has phrase
     *
     * @return void
     *
     * @covers Rodas\Psr\Http\Message\StatusCode::getPhrase
     */
    public function testPhrases(): void {
        foreach (StatusCode::cases() as $case) {
            $this->assertIsString($case->name);
            $phrase = StatusCode::getPhrase($case);
            $this->assertIsString($phrase);
            $this->assertNotEmpty($phrase);
        }
    }
}
