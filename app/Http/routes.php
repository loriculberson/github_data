<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('repos');
});
//organization's repos
Route::get('/orgs/waybetterdev/repos', ['uses' => 'GithubController@index', 'as' => 'index']);

Route::get('/finder', ['uses' => 'GithubController@finder', 'as' => 'finder']);

Route::get('/commits', ['uses' => 'GithubController@commits', 'as' => 'commits']);


/*
For all an organizations repos, by each repo for a given calendar month
  ex....if today is July 30 --> see July 1 to July 30  data
  ex....if today is July 1 --> see only July 1
number of commits per repo
number of lines of code added per repo
number of lines of code deleted per repo

Total for the organization
*/