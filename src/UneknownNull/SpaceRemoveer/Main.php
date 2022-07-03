<?php
declare(strict_types = 1);

namespace UnknownNull\SpaceRemover;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener{

	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("Plugin Enabled.");
	}

	/**
	 * @param PlayerCreationEvent $event
	 */
	public function onPlayerCreation(PlayerCreationEvent $event){
		$event->setPlayerClass(CustomPlayer::class);
	}
}
