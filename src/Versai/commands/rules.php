<?php

declare(strict_types=1);

namespace rules\commands;


use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use rules\main;

class rules extends PluginCommand {
    private $plugin;

    public function __construct(main $plugin) {
        parent::__construct("rules", $plugin);
        $this->plugin = $plugin;
        $this->description = "Versai Network's official Rules";
        $this->setAliases("ptime");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $sender->sendMessage("§b§lVersai Rules:");
        $sender->sendMessage("§r§b1: §9No Advertising or spam");
        $sender->sendMessage("§r§b2: §9No cheating / hacking / modding");
        $sender->sendMessage("§r§b3: §9No double clicking / auto clicking");
        $sender->sendMessage("§r§b4: §9No ddos / dox threats");
        $sender->sendMessage("§r§b5: §9No debouce time lower than 10");
        $sender->sendMessage("§r§b6: §9No exploiting bugs / glitches");
        $sender->sendMessage("§r§b7: §9No offensive / 4D / invisible skins");
        $sender->sendMessage("§r§b8: §9No racism / discrimination");
        $sender->sendMessage("§r§b9: §9No staff disrespect");
        $sender->sendMessage("§r§b10: §9No teaming / 2v1ing");
        $sender->sendMessage("§r§b11: §9No toxicity (including ez, L, etc.)");
        $sender->sendMessage("§r§b12: §9No using tape for clicking");
        $sender->sendMessage("§r§bNote: §9Don't attempt to bend the rules, not all are posted here!");
    }
}