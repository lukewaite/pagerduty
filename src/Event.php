<?php
/**
 * PagerDuty v2 Events API Library.
 *
 * @author    Luke Waite <lwaite@gmail.com>
 * @copyright 2017 Luke Waite
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 *
 * @link      https://github.com/lukewaite/pagerduty
 */

namespace LukeWaite\PagerDuty;

class Event
{
    protected $event;

    public function __construct($event = [])
    {
        foreach (array_keys($event) as $key) {
            $this->event[$key] = $event[$key];
        }

        $this->setDefaults();
    }

    protected function setDefaults()
    {
        if (!isset($this->event['payload']['severity'])) {
            $this->event['payload']['severity'] = 'critical';
        }


        if (!isset($this->event['payload']['source'])) {
            $this->event['payload']['source'] = gethostname();
        }
    }

    public function setRoutingKey($value)
    {
        return $this->setMeta('routing_key', $value);
    }

    public function resolve()
    {
        // TODO: Implement resolve
    }

    public function trigger()
    {
        // TODO: Implement trigger
    }

    public function acknowledge()
    {
        // TODO: Implement acknowledge
    }

    public function setDedupKey($key)
    {
        return $this->setMeta('dedup_key', $key);
    }

    public function setSummary($value)
    {
        return $this->setPayload('summary', $value);
    }

    public function setSource($value)
    {
        return $this->setPayload('source', $value);
    }

    public function setSeverity($value)
    {
        return $this->setPayload('severity', $value);
    }

    public function setTimestamp($value)
    {
        return $this->setPayload('timestamp', $value);
    }

    public function setComponent($value)
    {
        return $this->setPayload('component', $value);
    }

    public function setGroup($value)
    {
        return $this->setPayload('group', $value);
    }

    public function setClass($value)
    {
        return $this->setPayload('class', $value);
    }

    public function addCustomDetail($key, $value)
    {
        $this->event["payload"]["custom_details"][$key] = $value;

        return $this;
    }

    public function addLink()
    {
        // TODO: Implement addLink
    }

    public function addImage()
    {
        // TODO: Implement addImage
    }

    protected function setPayload($key, $value)
    {
        $this->event["payload"][$key] = $value;

        return $this;
    }

    protected function setMeta($key, $value)
    {
        $this->event[$key] = $value;

        return $this;
    }

    public function toArray()
    {
        return $this->event;
    }

    public function toJson()
    {
        return json_encode($this->event);
    }
}
