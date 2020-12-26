<?php

namespace ClickUp\PhpClient;

class Client {

  private static $client = NULL;

  private function __construct( $key ) {

    self::$client = new \GuzzleHttp\Client(
      [
        'base_uri' => 'https://api.clickup.com/api/v2/',
        'headers' => [
          'Authorization' => $key
        ],
        'curl' => array( CURLOPT_SSL_VERIFYPEER => false )
      ]
    );

  }

  public static function getClient( $key ) {

    if( !self::$client ) {
      $client = new Client( $key );
      self::$client = $client::$client;
    }

    return self::$client;

  }

}
