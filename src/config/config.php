<?php
  return array(
    // Campfire room credentials
    'username'     => '',
    'channel'          => '',
    'hook-url'           => '',

    // Message
    // You can use the following variables :
    // 1: User deploying
    // 2: Branch
    // 3: Connection and stage
    // 4: Host
    'before_deploy' => '{1} started deploying on "{3}" ({4})',
    'after_deploy'  => '{1} finished deploying on "{3}" ({4})',
  );