<?php
namespace Core;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onRespawn(PlayerRespawnEvent $ev)
    {
        $player = $ev->getPlayer();
        $player->getInventory()->clearAll();
    }
}
