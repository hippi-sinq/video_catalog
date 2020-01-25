<?php


namespace App\Servises;
use App\Film;
use GuzzleHttp\Client;
use http\Client\Response;

class FilmService implements FilmServiceface
{
    public $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client(
            [
                'base_url' =>'http://www.omdbapi.com'
            ]
        );
    }
    public function getFilm(string $title): Film{

        $film =Film::where('title','like,''%'.$title.'%')->first();
        if($film){
            return $film;
        }
    }

    private function getApiFilm(string $title){
        $request= $this->httpClient->get(
            url''
        [
        'query' => [
            'apikey' =>config('app.omdb_api_key'),
            't' => $title
        ]
            ]
        );
        if (!$request->getStatusCode() == Response::Http_OK){
            throw new \Exception('Film not found');


        }
    }

}
