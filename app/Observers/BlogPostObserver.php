<?php

namespace App\Observers;

use App\Models\BlogPost;
use Carbon\Carbon;

class BlogPostObserver
{

    /**
     * Отработка перед созданием записи
     *
     * @param BlogPost $blogPost
     */
    public function creating(BlogPost $blogPost)
    {
        $this->setPublishedAt($blogPost);

        $this->setSlug($blogPost);

        $this->setHtml($blogPost);

        $this->setUser($blogPost);
    }

    /**
     * Handle the blog post "created" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function created(BlogPost $blogPost)
    {
        //dd(123);
    }

    /**
     * Handle the blog post "updated" event.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function updated(BlogPost $blogPost)
    {
//        // Была ли изминена модель (true = если изменилось)
//        $test[] = $blogPost->isDirty();
//        // Было ли изменен атрибут модели
//        $test[] = $blogPost->isDirty('is_published');
//
//        // получить атрибут поля
//        $test[] = $blogPost->getAttribute('is_published');
//        $test[] = $blogPost->is_published;
//
//        // Получить старое значение атрибуа
//        $test[] = $blogPost->getoroginal('is_published');
//        dd($test);
//
//        $this->setPublishedAt($blogPost);
//
//        $this->setSlug($blogPost);
    }

    /**
     * Оброботка перед обновлением записи.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return void
     */
    public function updating (BlogPost $blogPost)
    {
//        // Была ли изминена модель (true = если изменилось)
//        $test[] = $blogPost->isDirty();
//        // Было ли изменен атрибут модели
//        $test[] = $blogPost->isDirty('is_published');
//
//        // получить атрибут поля
//        $test[] = $blogPost->getAttribute('is_published');
//        $test[] = $blogPost->is_published;
//
//        // Получить старое значение атрибуа
//        $test[] = $blogPost->getOriginal('is_published');
//        dd($test);

        //dd($blogPost->getAttribute('slug'));
        //dd($blogPost->getOriginal('slug'));

        $this->setPublishedAt($blogPost);

        $this->setSlug($blogPost);
    }

    /**
     * Handle the blog post "deleted" event.
     *
     * @param  \App\BlogPost  $blogPost
     * @return void
     */
    public function deleted(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "restored" event.
     *
     * @param  \App\BlogPost  $blogPost
     * @return void
     */
    public function restored(BlogPost $blogPost)
    {
        //
    }

    /**
     * Handle the blog post "force deleted" event.
     *
     * @param  \App\BlogPost  $blogPost
     * @return void
     */
    public function forceDeleted(BlogPost $blogPost)
    {
        //
    }

    /**
     * Если дата публикации не уставнолена и проихсодит установка флага - Опубликовано
     * то устанвалем дату публикациина текущую
     *
     * @param BlogPost $blogPost
     */
    protected function setPublishedAt (BlogPost $blogPost)
    {
        if (empty($blogPost->is_published) && $blogPost->is_published) {
            $blogPost->is_published = Carbon::now();
        }
    }

    /**
     * Установка slug
     *
     * @param BlogPost $blogPost
     */
    protected function setSlug(BlogPost $blogPost)
    {
        if (empty($blogPost->slug)) {
            $blogPost->slug = \Str::slug($blogPost->title);
        }
    }

    /**
     * @param BlogPost $blogPost
     */
    protected function setUser(BlogPost $blogPost)
    {
        $blogPost->user_id = auth()->id() ?? BlogPost::UNKNOWN_USER;
    }

    /**
     * @param BlogPost $blogPost
     */
    protected function setHtml(BlogPost $blogPost)
    {
        if ($blogPost->isDirty('content_raw')) {
            // TODO: Тут должен быть спец обработчик
            $blogPost->content_html = $blogPost->content_raw;
        }
    }

}
