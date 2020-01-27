<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BlogPostRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Получить список статей для вывовда в списке (Админка)
     *
     * @param int | null $perPage
     * @return LengthAwarePaginator
     */
    public function getAllWithPaginate(int $perPage = 25) : LengthAwarePaginator
    {
        $columns = ['id', 'title', 'slug', 'is_published', 'published_at', 'user_id', 'category_id'];

//        $result = $this
//            ->startConditions()
//            ->select($columns)
//            ->orderBy('id', 'DESC')
//            ->paginate($perPage);

        $result = $this->startConditions()
            ->select()
            ->orderBy('id', 'DESC')
            ->with(['category', 'user'])
            ->with([
                'category' => function ($query) {
                    $query->select(['id', 'title']);
                },
                'user:id,name'
            ])
            //->with(['category:id,title'])
            ->paginate($perPage);


        //dd($result);
        return $result;
    }
}
