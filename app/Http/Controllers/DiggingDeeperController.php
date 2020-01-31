<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Carbon\Carbon;
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

//        $result['map']['all'] = $collection->map(function (array $item) {
//            $newItem = new \stdClass();
//            $newItem->item_id = $item['id'];
//            $newItem->title_name = $item['title'];
//            $newItem->exists = is_null($item['deleted_at']);
//
//            return $newItem;
//        });
//        dd($result);

//        $result['map']['not_exists'] = $result['map']['all']->where('exists', '=', false);
//        dd($result);

        // Базовая переменная измениться (трафнсформируеться))
        $collection->transform(function (array $item) {
            $newItem = new \stdClass();
            $newItem->item_id = $item['id'];
            $newItem->item_name = $item['title'];
            $newItem->exists = is_null($item['deleted_at']);
            $newItem->created_at = Carbon::parse($item['created_at']);

            return $newItem;
        });
//
//        dd($collection);
//        $newItem = new \stdClass();
//        $newItem->id = 9999;
//
//        $newItem2 = new \stdClass();
//        $newItem2->id = 8888;
        //dd($newItem, $newItem2);

        // Утсановить элемент в начало коллекии
//        $collection->prepend($newItem);
//        $collection->push($newItem2);
//        dd($collection);

//        $newItemFirst = $collection->prepend($newItem)->first();
//        $newItemLast = $collection->push($newItem2)->last();
//        $pulledItem = $collection->pull(1); // Забрать первый элемент (удлаиться из коллекции)
//
//        dd(compact('collection', 'newItemFirst', 'newItemLast', 'pulledItem'));


        // Фильтрация. Хамена orWhere

//        $filtered = $collection->filter(function ($item) {
//            $byDay = $item->created_at->isFriday();
//            $byDate = $item->created_at->day == 8;
//
//            $result = $byDay && $byDate;
//
//            return $result;
//        });
//
//        dd($filtered);

//         $sortedSimpleCollection = collect([5, 3, 1, 2, 4])->sort();
//         $sortedAscCollection = $collection->sortBy('create_at');
//         $sortedDescCollection = $collection->sortByDesc('item_id');
//
//        dd(compact('sortedSimpleCollection', 'sortedAscCollection', 'sortedDescCollection'));

    }
}
