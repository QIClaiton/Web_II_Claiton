<?php
namespace src\Model;
class Movie { 
    public string $title;
    public int $duration;
    public MovieGender $movieGender;
    public int $yearOfRelease;
    public Producer $producer;
    public Director $director;

    public function __construct(
        string $title, 
        int $duration, 
        MovieGender $movieGender,
        int $yearOfRelease,
        Producer $producer,
        Director $director

    )
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->movieGender = $movieGender;
        $this->yearOfRelease = $yearOfRelease;
        $this->producer = $producer;
        $this->director = $director;
    }
}