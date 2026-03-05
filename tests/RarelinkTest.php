<?php
/**
 * Tests for RareLink
 */

use PHPUnit\Framework\TestCase;
use Rarelink\Rarelink;

class RarelinkTest extends TestCase {
    private Rarelink $instance;

    protected function setUp(): void {
        $this->instance = new Rarelink(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Rarelink::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
