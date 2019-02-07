<?php

namespace YaZrHoD;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\tile\Tile;
use pocketmine\utils\TextFormat as TE;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;

class Zirconium extends PluginBase implements Listener
{
  public function onLoad()
  {
   $this->getlogger()->info(TE::RED . "Chargé avec succèes");
  }
  public function onEnable()
{
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getLogger()->info(TE::RED . "Plugin de YaZrHoD ");
    $this->getLogger()->info(TE::RED . "Activé avec succèes");
}
  public function onDisable()
{
}
public function onCommand(CommandSender $player, Command $command, string $label, array $arguments): bool{
  switch($command->getName()){

case "discord":
$player->sendMessage(TE::RED . "--------------------------");
$player->sendMessage(TE::BLUE . "https://discord.gg/XXfr7DV");
$player->sendMessage(TE::RED . "--------------------------");
break;
case "boutique":
$player->sendMessage(TE::RED . "--------------------------");
$player->sendMessage(TE::BLUE . "La boutique est pour l'instant sur discord (/discord)");
$player->sendMessage(TE::RED . "--------------------------");
 break;
}

return true;
}
  public function onPlayerJoin(PlayerJoinEvent $event)
 {
 $player = $event->getPlayer();
 $player->sendMessage(TE::YELLOW . "Bienvenue sur Zirconia");
 $player->sendMessage(TE::BLUE . "Nouveautés:");
 $player->sendMessage(TE::RED . "Ouverture du serveur (date :)");
 }
}
