<?php

declare(strict_types=1);

namespace creeperplayer20\discord;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

public function onEnable() : void{

    $this->reloadConfig();
    $this->saveDefaultConfig();
    $this->getConfig()->save();

}

public function onDisable() : void{

    $this->getLogger()->info("[§aC20§r - §bDiscord§r] §4Plugin is disabled!");

}

public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) : bool{

    if($cmd->getName() == "discord"){
        $sender->sendMessage($keyFromConfig = $this->getConfig()->get("message"));

}

    if($cmd->getName() == "dc"){
        $sender->sendMessage($keyFromConfig = $this->getConfig()->get("message"));

} return true;

}
}
