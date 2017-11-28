<?php
namespace JoinChat9 ;

use poketmine\plugin\PluginBase;
use poketmine\event\Listener;
use poketmine\player\PlayerJoinEvent;
class Main extends PluginBase implement Listener {
        public function onEnable () {
                $this ->getSever()->getLogger()->info("JoinMessage enabled!");
                $this ->getSever()->getManager() ->registerEvents($this, $this):
                
                
                
