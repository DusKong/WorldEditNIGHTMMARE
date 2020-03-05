<?php

namespace edit;

use pocketmine\item\Item;

use edit\command\tool\Tool;

class ToolItem extends Item{

    private $tool = null;

    public function setTool(Tool $tool) {
        $this->tool = $tool;
    }

    public function getTool() :?Tool{
        return $this->tool;
    }
}