<?php

use LukeWaite\PagerDuty\Event;

class EventTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_construct_with_defaults()
    {
        $event = new Event();
        $this->assertArrayHasKey('source', $event->toArray()['payload']);
        $this->assertTrue(is_string($event->toArray()['payload']['source']));
        $this->assertEquals('critical', $event->toArray()['payload']['severity']);
    }

    /** @test */
    public function it_should_construct_allowing_override()
    {
        $event = new Event(['payload'=>['source' => 'testEventSource']]);
        $this->assertEquals(['payload'=>['severity'=>'critical', 'source'=>'testEventSource']], $event->toArray());
    }

    /** @test */
    public function it_should_allow_complex_overrides()
    {
        $event = new Event([
            'routing_key' => 'testRoutingKey',
            'payload' => [
                'summary' => 'this is a test error alert',
                'source' => 'testEventSource',
                'component' => 'testComponent',
                'custom_details' => [
                    'custom_key_1' => 'custom_value_1'
                ]
            ]
        ]);

        $this->assertEquals([
            'routing_key' => 'testRoutingKey',
            'payload' => [
                'source' => 'testEventSource',
                'summary' => 'this is a test error alert',
                'severity' => 'critical',
                'component' => 'testComponent',
                'custom_details' => [
                    'custom_key_1' => 'custom_value_1'
                ]
            ]
        ], $event->toArray());
    }

    /** @test */
    public function it_should_allow_chaining()
    {
        $event = new Event();
        $arr = $event->setRoutingKey('testRoutingKey')
            ->setSource('hostname')
            ->setSeverity('info')
            ->setClass('application')
            ->setComponent('app server')
            ->setGroup('prod-servers')
            ->setDedupKey('dedup01')
            ->setSummary('Stuff is really needing alerting')
            ->setTimestamp('timestamp')
            ->addCustomDetail('custom1', 'val1')
            ->addCustomDetail('custom2', 'val2')
            ->toArray();

        $this->assertEquals([
            'routing_key' => 'testRoutingKey',
            'dedup_key' => 'dedup01',
            'payload' => [
                'summary' => 'Stuff is really needing alerting',
                'source' => 'hostname',
                'severity' => 'info',
                'class' => 'application',
                'component' => 'app server',
                'group' => 'prod-servers',
                'timestamp' => 'timestamp',
                'custom_details' => [
                    'custom1' => 'val1',
                    'custom2' => 'val2'
                ]
            ]
        ], $arr);
    }
}
