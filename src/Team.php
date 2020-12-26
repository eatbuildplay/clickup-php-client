<?php

namespace ClickUp\PhpClient;

class Team {

  private $client;

  public function setClient( $client ) {
    $this->client = $client;
  }

  /*
   * @return List of all teams in the account
   */
  public function getAll() {

    $response = $this->client->request('GET', 'team');

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

  /*
   * @return Returns one specific team
   */
  public function getById( $teamId ) {

  }

}
