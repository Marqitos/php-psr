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
    public function testPhrasesMethod(): void {
        // Validate from StatusCode::cases
        foreach (StatusCode::cases() as $case) {
            $this->assertIsString($case->name);
            $phrase = StatusCode::getPhrase($case);
            $this->assertIsString($phrase);
            $this->assertNotEmpty($phrase);
        }
        // Validate from status code (numbers)
        for ($code=100; $code <= 599; $code++) {
            $statusCode = StatusCode::tryFrom($code);
            if ($statusCode !== null) {
                $phrase = StatusCode::getPhrase($statusCode);
                $this->assertIsString($phrase);
                $this->assertNotEmpty($phrase);
            }
        }
    }

    /**
     * Test that all StatusCode cases has phrase
     *
     * @return void
     *
     * @covers Rodas\Psr\Http\Message\StatusCode::phrase
    public function testPhraseProperty(): void {
        // Validate from StatusCode::cases
        foreach (StatusCode::cases() as $case) {
            $phrase = $case->phrase;
            $this->assertIsString($phrase);
            $this->assertNotEmpty($phrase);
        }
        // Validate from status code (numbers)
        for ($code=100; $code <= 599; $code++) {
            $statusCode = StatusCode::tryFrom($code);
            if ($statusCode !== null) {
                $phrase = $statusCode->phrase;
                $this->assertIsString($phrase);
                $this->assertNotEmpty($phrase);
            }
        }
    }
     */
}
