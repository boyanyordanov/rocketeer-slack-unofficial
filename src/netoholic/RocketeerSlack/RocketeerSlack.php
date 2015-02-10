<?php

namespace netoholic\RocketeerSlack;

use Illuminate\Container\Container;
use Rocketeer\Abstracts\AbstractPlugin;
use Rocketeer\Services\TasksHandler;

class RocketeerSlack extends AbstractPlugin {


  public function register(Container $app) {

  }

  /**
   * Register Tasks with Rocketeer
   *
   * @param \Rocketeer\Services\TasksHandler $queue
   *
   * @return void
   */
  public function onQueue(TasksHandler $queue)
  {
    // TODO: Implement onQueue() method.
  }
}