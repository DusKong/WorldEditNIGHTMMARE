<?php

declare(strict_types=1);

namespace edit\command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\defaults\VanillaCommand;
use pocketmine\Player;

use edit\Main;

class IdCommand extends VanillaCommand{

    public function __construct(string $name){
        parent::__construct(
            $name,
            "id",
            "/id"
        );
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$this->testPermission($sender)){
            return true;
        }

        if(!($sender instanceof Player)){
            return true;
        }

        if(!Main::$canUseNotOp && !$sender->isOp()){
            return false;
        }

        $item = $sender->getInventory()->getItemInHand();

        $sender->sendMessage("§a".$item->getId()." : ".$item->getDamage());
    }
}