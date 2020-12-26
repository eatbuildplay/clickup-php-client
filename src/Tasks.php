<?php

namespace ClickUp\PhpClient;

class Tasks {

  private $client;
  private $listId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setListId( $listId ) {
    $this->listId = $listId;
  }

  public function getAll() {

    $endpoint = 'list/' . $this->listId . '/task';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }



}
