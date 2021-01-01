<?php

namespace ClickUp\PhpClient;

class Members {

  private $client;
  private $listId;
  private $taskId;

  public function setClient( $client ) {
    $this->client = $client;
  }

  public function setListId( $listId ) {
    $this->listId = $listId;
  }

  public function setTaskId( $taskId ) {
    $this->taskId = $taskId;
  }

  public function getTaskMembers() {

    $endpoint = 'task/' . $this->taskId . '/member';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

  public function getListMembers() {

    $endpoint = 'list/' . $this->listId . '/member';
    $response = $this->client->request('GET', $endpoint);

    $body = $response->getBody();
    $json = (string) $body;
    $responseObject = json_decode( $json );
    return $responseObject;

  }

}
