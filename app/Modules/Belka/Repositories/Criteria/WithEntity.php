<?php namespace Modules\Belka\Repositories\Criteria;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Contracts\RepositoryInterface as Repository;
use App\Repositories\Contracts\RepositoryInterface;

/**
 * Class WithEntity
 * @package Modules\Belka\Repositories\Criterias\WithEntity
 */
class WithEntity extends Criteria {

    /**
     * @var array
     */
    protected $entities;

    /**
     * WithEntity constructor.
     * @param array $entities
     */
    public function __construct(array $entities)
    {
        $this->entities = $entities;
    }

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, Repository $repository)
    {
        $query = $model->with($this->entities);
        return $query;
    }
}