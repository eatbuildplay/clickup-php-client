<?php

namespace ClickUp\PhpClient;

class Space {

  private $client;
  private $teamId; // must be set for list calls

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setTeamId( $teamId ) {
    $this->teamId = $teamId;
  }

  public function getAll() {

    $endpoint = 'team/' . $this->teamId . '/space?archived=false';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

  public function getById( $spaceId ) {

    $endpoint = 'space/' . $spaceId;
    $client = $this->getClient();
    $response = $client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

}
