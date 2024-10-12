<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testHomePage()
    {
        $output = file_get_contents('http://localhost/my-php-project/index.php');
        $this->assertStringContainsString('Hello, this is a simple PHP project!', $output);
    }
}
