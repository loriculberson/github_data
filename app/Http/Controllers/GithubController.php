<?php

class GithubController extends Controller
{

  private $client;
  private $username;

  public function __construct(\Giyhub\Client $client)
  {
    $this->client = $client;
    $this->username = env('GITHUB_USERNAME')

  }
}
