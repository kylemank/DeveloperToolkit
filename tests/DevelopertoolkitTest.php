<?php
/**
 * Tests for DeveloperToolkit
 */

use PHPUnit\Framework\TestCase;
use Developertoolkit\Developertoolkit;

class DevelopertoolkitTest extends TestCase {
    private Developertoolkit $instance;

    protected function setUp(): void {
        $this->instance = new Developertoolkit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Developertoolkit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
