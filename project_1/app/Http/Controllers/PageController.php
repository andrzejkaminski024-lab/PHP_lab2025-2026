<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($drive)
    {
        // $drives = [
        //     'fdd' => 'Dyskietka',
        //     'hdd' => 'Dysk HDD',
        //     'ssd' => 'Dysk SSD',
        //     'default_' => 'Nieznany typ dysku',
        // ];
        // $drives = match ($drive) {
        //     'fdd' => fn($d) => 'Dyskietka',
        //     'hdd' => fn($d) => 'Dysk HDD',
        //     'ssd' => fn($d) => 'Dysk SSD',
        //     default => fn($d) => 'Nieznany typ dysku',
        // };
        // return $drives($drive);
        $drives = match ($drive) {
            'fdd' => 'Dyskietka',
            'hdd' => 'Dysk HDD',
            'ssd' => 'Dysk SSD',
            default => 'Nieznany typ dysku',
        };
        return $drives;
    }
}
