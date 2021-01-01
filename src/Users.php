<?php

namespace ClickUp\PhpClient;

class Users {

  private $client;
  private $teamId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setTeamId( $teamId ) {
    $this->teamId = $teamId;
  }

  public function getUser( $userId ) {

    $endpoint = 'team/' . $this->teamId . '/user/' . $userId;
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

}
