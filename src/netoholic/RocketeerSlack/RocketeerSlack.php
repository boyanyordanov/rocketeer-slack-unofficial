<?php

namespace netoholic\RocketeerSlack;

use Illuminate\Container\Container;
use Maknz\Slack\Client;
use Rocketeer\Plugins\AbstractNotifier;

class RocketeerSlack extends AbstractNotifier {

  /**
   * Setup the plugin
   *
   * @param Container $app
   */
  public function __construct(Container $app)
  {
    parent::__construct($app);
    $this->configurationFolder = __DIR__.'/../../config';
  }

  public function register(Container $app) {
    $settings = [
      'username' => $app['config']->get('rocketeer-slack-unofficial::config')['url'],
      'channel' => $app['config']->get('rocketeer-slack-unofficial::config')['channel'],
      'link_names' => true,
      'icon' => ':rocket:'
    ];

    $app->bind('slack', function ($app) use ($settings) {
        return new Client($app['config']->get('rocketeer-slack-unofficial::config')['hook-url'], $settings);
      });

    return $app;
  }

  /**
   * Send a given message
   *
   * @param string $message
   *
   * @return void
   */
  public function send($message)
  {
    $this->app['slack']->send($message);
  }

  /**
   * Get the default message format
   *
   * @param string $message The message handle
   *
   * @return string
   */
  public function getMessageFormat($message)
  {
    return $this->app['config']->get('rocketeer-slack-unofficial::config')[$message];
  }
}