<?php

namespace App\Observers;

use App\Models\BlogCategory;

class BlogCategoryObserver
{

    protected function setSlug(BlogCategory $blogCategory)
    {
        if (empty($blogCategory->slug)) {
            $blogCategory->slug = \Str::slug($blogCategory->title);
        }
    }

    public function creating(BlogCategory $blogCategory)
    {
        $this->setSlug($blogCategory);
    }

    /**
     * Handle the models blog category "created" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function created(BlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * @param BlogCategory $blogCategory
     */
    public function updating(BlogCategory $blogCategory)
    {
        $this->setSlug($blogCategory);
    }

    /**
     * Handle the models blog category "updated" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function updated(ModelsBlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function deleted(ModelsBlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "restored" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function restored(ModelsBlogCategory $modelsBlogCategory)
    {
        //
    }

    /**
     * Handle the models blog category "force deleted" event.
     *
     * @param  \App\ModelsBlogCategory  $modelsBlogCategory
     * @return void
     */
    public function forceDeleted(ModelsBlogCategory $modelsBlogCategory)
    {
        //
    }
}
