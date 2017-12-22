<?php

namespace geo\geosystem;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class GeoSystemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'geo');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'icon'    => 'file',
                'text'    => 'GeoGraph',
                'url'     => '#',
                'submenu' => [

                    [
                        'text' => 'Zones',
                        'url'  => route('admin.zones.index'),
                    ],
                    [
                        'text' => 'Countries',
                        'url'  => route('admin.countries.index'),
                    ],
                     [
                        'text' => 'Regions',
                        'url'  => route('admin.regions.index'),
                    ],
                    
                    [
                        'text' => 'Subregions',
                        'url'  => route('admin.subregions.index'),
                    ],


                ],

            ]);
        });

    }

    public function register()
    {
        $this->app->make('geo\geosystem\CountriesController');
        $this->app->make('geo\geosystem\RegionsController');
        $this->app->make('geo\geosystem\SubregionsController');
        $this->app->make('geo\geosystem\ZonesController');

    }
}
