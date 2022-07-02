<?php

namespace src\Model;

enum MovieGender {
    case HORROR;
    case ACTION;
    case ADVENTURE;
    case COMEDY;

    public function toString()
    {
        return $this->name;
    }
}