<?php
/**
 * Tests for RestfulQuantum
 */

use PHPUnit\Framework\TestCase;
use Restfulquantum\Restfulquantum;

class RestfulquantumTest extends TestCase {
    private Restfulquantum $instance;

    protected function setUp(): void {
        $this->instance = new Restfulquantum(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Restfulquantum::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
