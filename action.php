<?php

use dokuwiki\Extension\ActionPlugin;
use dokuwiki\Extension\EventHandler;
use dokuwiki\Extension\Event;

class action_plugin_timezoneco extends ActionPlugin
{
    public function register(EventHandler $controller)
    {
        $controller->register_hook('DOKUWIKI_STARTED', 'BEFORE', $this, 'setTimezone');
    }

    public function setTimezone(Event $event, $param)
    {
        $tz = $this->getConf('timezone');
        if (!empty($tz)) {
            date_default_timezone_set($tz);
        }
    }
}
