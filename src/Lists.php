<?php

namespace ClickUp\PhpClient;

class Lists {

  private $client;
  private $spaceId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setSpaceId( $spaceId ) {
    $this->spaceId = $spaceId;
  }

  public function getAllFolderLess() {

    $endpoint = 'space/' . $this->spaceId . '/list?archived=false';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }



}
