<?php
/**
 * Tests for ProtoGrid
 */

use PHPUnit\Framework\TestCase;
use Protogrid\Protogrid;

class ProtogridTest extends TestCase {
    private Protogrid $instance;

    protected function setUp(): void {
        $this->instance = new Protogrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Protogrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
