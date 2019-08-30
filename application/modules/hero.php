<?php

/* HERO */

function module_hero($module){
  ?>
  <style>
  /* Zoom in Keyframes */
@-webkit-keyframes zoomin {
  0% {transform: scale(1);}
  50% {transform: scale(1.5);}
  100% {transform: scale(1);}
}
@keyframes zoomin {
  0% {transform: scale(1);}
  50% {transform: scale(1.5);}
  100% {transform: scale(1);}
} /*End of Zoom in Keyframes */
</style>
  <div id="home" class="hero">
    <div class="hero__bg" style="background: url(<?= $module['image'] ?>) center center; background-size: cover;">
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div class="container">
      <div class="hero__text">
        <h4><?= $module['heading'] ?></h4>
        <h1><?= $module['text'] ?></h1>
      </div>
    </div>
	</div>
  <?php
}
