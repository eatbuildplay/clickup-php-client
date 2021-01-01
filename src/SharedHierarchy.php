<?php

namespace ClickUp\PhpClient;

class SharedHierarchy {

  private $client;
  private $teamId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setTeamId( $teamId ) {
    $this->teamId = $teamId;
  }

  public function getAll() {

    $endpoint = 'team/' . $this->teamId . '/shared';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

}
