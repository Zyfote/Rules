<?php

declare(strict_types=1);

namespace rules\commands;


use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use rules\main;

class punishtime extends PluginCommand
{
    private $plugin;

    public function __construct(main $plugin)
    {
        parent::__construct("punishtime", $plugin);
        $this->plugin = $plugin;
        $this->description = "Versai Network's Staff Punishment Time";
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if (!$sender->hasPermission("punish.list")) {
            $sender->sendMessage("§9Versai Rules developed by JoshyM44");
        }
        else {
            $sender->sendMessage("§b§lVersai Staff Punishment Guide:");
            $sender->sendMessage("§9Cheating §b| §91st Ban = 30d §b| §92nd Ban = 90d §b| §93rd Ban = Permanent");
            $sender->sendMessage("§9Ban Evasion §b| §9Original Punishment's Length");
            $sender->sendMessage("§9Hack Client Spam §b| §915d Ban");
            $sender->sendMessage("§Bug Exploitation §b| §9Warnings = 2 3d Ban");
            $sender->sendMessage("§9Inappropriate & Invalid Skin / Cape §b| §9Warnings = 2 §b| §91d Ban");
            $sender->sendMessage("§9Teaming & Interrupting Fights §b| §9Warnings = 2 §b| §91d Ban");
            $sender->sendMessage("§9Inappropriate Username = Permanent Ban");
            $sender->sendMessage("§9Toxicity (Toxic Behaviour) = Warnings = 2 §b| §91d Mute");
            $sender->sendMessage("§9Staff Disrespect & Unsuitable Advertisements §b| §91d Mute");
            $sender->sendMessage("§9Chat Spam §b| §9Warnings = 2 §b| §92h Mute");
            $sender->sendMessage("§9Discrimination & Suicidal Encouragement §b| §97d Mute");
            $sender->sendMessage("§9DDoS/Dox Threats §b| §9Permanent Ban");
        }
    }
}