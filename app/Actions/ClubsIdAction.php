<?php

namespace App\Actions;

class ClubsIdAction
{
public function __invoke($clubsId):array
{
    $ids=[];
    foreach ($clubsId as $m) {
        $ids[]=$m->id;
    }
    return $ids;
}
}
