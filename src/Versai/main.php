<?php

declare(strict_types=1);

namespace rules;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use rules\commands\punishtime;
use rules\commands\rules;

class main extends PluginBase implements Listener {
    public function onEnable()
    {
        $this->getServer()->getCommandMap()->register("rules", new rules($this));
        $this->getServer()->getCommandMap()->register("punishtime", new punishtime($this));
    }
}