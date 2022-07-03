<?php

namespace src\model;

enum MovieGender {
    case HORROR;
    case ACTION;
    case ADVENTURE;
    case COMEDY;
    case FANTASY;

    public function toString()
    {
        return $this->name;
    }
}