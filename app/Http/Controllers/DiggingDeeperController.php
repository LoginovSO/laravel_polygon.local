<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class DiggingDeeperController extends Controller
{

    /**
     * Базовая информация:
     * @url https://host
     */
    public function collections()
    {
        $result = [];

        $eloquentCollections = BlogPost::withTrashed()->get();

        $collection = collect($eloquentCollections->toArray());

//        dd(
//            __METHOD__,
//            get_class($eloquentCollections),
//            get_class($collection),
//            $collection
//        );


    }
}
