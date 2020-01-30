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

//        $result['first'] = $collection->first();
//        $result['last'] = $collection->last();
       //dd($result);

//        $result['where']['data'] = $collection
//            ->where('category_id', 10)
//            ->values()
//            ->keyBy('id');
//
//
//        $result['where']['count'] = $result['where']['data']->count();
//        $result['where']['isEmpty'] = $result['where']['data']->isEmpty();
//        $result['where']['isNotEmpty'] = $result['where']['data']->isNotEmpty();
//        dd($result);

//        $result['where_first'] = $collection
//            ->firstWhere('created_at', '>', '2019-01-17 01:35:20');
//        dd($result);

        $result['map']['all'] = $collection->map(function (array $item) {
            $newItem = new \stdClass();
            $newItem->item_id = $item['id'];
            $newItem->title_name = $item['title'];
            $newItem->exists = is_null($item['deleted_at']);

            return $newItem;
        });
        dd($result);

    }
}
