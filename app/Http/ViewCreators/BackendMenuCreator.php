<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator
{

    /**
     * The user model.
     *
     * @var \App\Models\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('admin/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
        array_push($menu, [
            'class' => false,
            'route' => route('menu.index'),
            'icon'  => 'md md-menu',
            'title' => 'Menu',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('page.index'),
            'icon'  => 'md md-pages',
            'title' => 'Page',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('slider.index'),
            'icon'  => 'md md-image',
            'title' => 'Homepage Slider',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('shop.index'),
            'icon'  => 'md md-folder',
            'title' => 'Shops',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('food.index'),
            'icon'  => 'md md-folder',
            'title' => 'Foods',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('news.index'),
            'icon'  => 'md md-description',
            'title' => 'News',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('event.index'),
            'icon'  => 'md md-description',
            'title' => 'Upcoming Events',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('service.index'),
            'icon'  => 'md md-folder',
            'title' => 'Services',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('floorinfo.index'),
            'icon'  => 'md md-folder',
            'title' => 'Floor Info',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('gallery.index'),
            'icon'  => 'md md-image',
            'title' => 'Popup/Ads/Cover',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('album.index'),
            'icon'  => 'md md-photo-album',
            'title' => 'Gallery',
        ]);

        $view->with('allMenu', $menu);
    }
}
