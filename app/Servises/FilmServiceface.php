<?php


namespace App\Servises;


use App\Film;
use http\Client\Response;
use http\Url;
use phpDocumentor\Reflection\Types\Collection

class FilmServiceface
{
    public function getFilm(string $title): Film;

    public function getFilm(string $titile): Collection;
}
