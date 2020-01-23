<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository extends CoreRepository
{

//    public function __construct()
//    {
//        dd(2);
//    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Получить модель для редактирования в админке
     *
     * @param int $id
     * @return mixed
     */
    public function getEdit(int $id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Получить список категорий для вывода в выпадающем списке
     *
     * @return mixed
     */
    public function getForComBox()
    {
        $columns = implode(', ', [
            'id',
            'CONCAT(id, ". ", title) AS id_title',
        ]);

//        $result[] = $this->startConditions()->all();
//        $result[] = $this
//            ->startConditions()
//            ->select('blog_categories.*',
//                \DB::raw('CONTACT (id, ". " title) AS id_title'))
//            ->toBase()
//            ->get();

        $result = $this
            ->startConditions()
            ->selectRaw($columns)
            ->toBase()
            ->get();

        //dd($result);
        return $result;

    }

    /**
     * @param int | null $perPage
     * @return mixed
     */
    public function getAllWithPaginate(int $perPage = null)
    {
        $columns = ['id', 'title', 'parent_id'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->paginate($perPage);

        return $result;
    }
}
