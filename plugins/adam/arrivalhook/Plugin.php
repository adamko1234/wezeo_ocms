<?php namespace Adam\ArrivalHook;

use Backend;
use System\Classes\PluginBase;

/**
 * ArrivalHook Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ArrivalHook',
            'description' => 'No description provided yet...',
            'author'      => 'Adam',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Arrival::extend(function ($arrival) {
            $arrival->bindEvent('model.afterCreate', function () use ($arrival){
                Log::info("{$arrival->name} was created!");
            });
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Adam\ArrivalHook\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'adam.arrivalhook.some_permission' => [
                'tab' => 'ArrivalHook',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'arrivalhook' => [
                'label'       => 'ArrivalHook',
                'url'         => Backend::url('adam/arrivalhook/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['adam.arrivalhook.*'],
                'order'       => 500,
            ],
        ];
    }
}
