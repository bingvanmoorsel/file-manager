<?php


namespace VictoryCms\FileManager;

use Illuminate\Contracts\Routing\Registrar;
use Victory\Contracts\Menu\Manager as MenuManager;
use Victory\Contracts\Resource\Manager;
use VictoryCms\FileManager\Http\Resources\FileResource;

class Package extends \Victory\Support\Package {

    /**
     * @return array
     */
    public function permissions()
    {
        // TODO: Implement permissions() method.
    }

    /**
     * @param Registrar $router
     *
     * @return void
     */
    public function routes(Registrar $router, Manager $resourceManager)
    {
        /** @var MenuManager $menuManager */
        $menuManager = $this->app->make(MenuManager::class);

        $router->group(['prefix' => 'file-manager'], function(Registrar $router) use ($resourceManager, $menuManager){

            // Register Resource
            $resourceManager->bind($router, FileResource::class, $this);
        });
    }

    public function navigation(MenuManager $manager)
    {
        // Register to Menu
        $manager->add('Files', $this->model->name.'::resource.file.index');
    }
}