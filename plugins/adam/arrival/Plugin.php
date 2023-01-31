<?php namespace Adam\Arrival;

use Backend;
use System\Classes\PluginBase;

/**
 * Arrival Plugin Information File
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
            'name'        => 'Arrival',
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
            'Adam\Arrival\Components\MyComponent' => 'myComponent',
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
            'adam.arrival.some_permission' => [
                'tab' => 'Arrival',
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

        return [
            'arrival' => [
                'label'       => 'Arrival',
                'url'         => Backend::url('adam/arrival/arrivals'),
                'icon'        => 'icon-calendar-check-o',
                'permissions' => ['adam.arrival.*'],
                'order'       => 500,
            ],
        ];
    }
}
