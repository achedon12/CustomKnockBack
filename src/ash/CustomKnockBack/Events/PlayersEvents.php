<?php

namespace ash\CustomKnockBack\Events;

use ash\CustomKnockBack\Main;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Player;

class PlayersEvents implements Listener{

    public function onDamage(EntityDamageEvent $event){
        $entity = $event->getEntity();
        $db = Main::config();
        if($entity instanceof Player){
            $event->setAttackCooldown($db->get("AttackCooldown"));
            $event->setKnockBack($db->get("AttackKnockBack"));
        }
    }
}