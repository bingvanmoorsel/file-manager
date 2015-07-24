<?php


namespace VictoryCms\FileManager\Http\Resources;


use Victory\Contracts\Resource\Repository as RepositoryContract;
use Victory\Resource\Repositories\EloquentRepository;
use Victory\Resource\Resource;
use VictoryCms\FileManager\Models\File as FileModel;

class FileResource extends Resource {

    /**
     * @return RepositoryContract
     */
    public function repository()
    {
        return EloquentRepository::from(FileModel::class);
    }

    public function form()
    {
        $form = parent::form();

        return $form;
    }

    public function overview()
    {
        $overview = parent::overview();

        return $overview;
    }

}