<?php

class GithubController extends Controller
{

  private $client;
  private $organization;

  public function __construct(\Github\Client $client)
  {
    $this->client = $client;
    $this->organization = env('GITHUB_ORGANIZATION_NAME')

  }

  public function index()
  {
    try {
      $repos = $this->client->api('organization')->repositories($organization);
    
    return View::make('repos', ['repos' => $repos]);
    } catch (\RuntimeException $e) {
      $this->handleAPIException($e);
    }
  }//index
}
