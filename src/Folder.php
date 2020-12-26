<?php

namespace ClickUp\PhpClient;

class Folder {

  private $client;
  private $spaceId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setSpaceId( $spaceId ) {
    $this->spaceId = $spaceId;
  }

  public function getAll() {

    $endpoint = 'space/' . $this->spaceId . '/folder?archived=false';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }



}
