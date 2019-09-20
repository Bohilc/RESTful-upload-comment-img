<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

use App\Contracts\Repository as Contract;
use App\Exceptions\ConfigurationException;

abstract class Repository implements Contract
{
    /**
     * Reference to Entitly class.
     *
     * @var \Illuminate\Database\Eloquent\Model string
     */
    protected $entityClass;

    public function __construct()
    {
        if (!(new $this->entityClass) instanceof Model) {
            throw new ConfigurationException(
                sprintf('Eloquent Model is required as [$entityClass] in %s.', get_class($this))
            );
        }
    }

    public function all(array $columns = ['*'])
    {
        return $this->entityClass::all($columns);
    }

    public function create(array $fields)
    {
        return $this->entityClass::create($fields);
    }

    public function delete($id): void
    {
        // TODO: Implement delete() method.
    }

    public function entityClass(): string
    {
        // TODO: Implement entityClass() method.
    }

    public function exists($scope = null): bool
    {
        // TODO: Implement exists() method.
    }

    public function find($id, $scope = null, array $columns = ['*'])
    {
        // TODO: Implement find() method.
    }

    public function first($scope = null, array $columns = ['*'])
    {
        // TODO: Implement first() method.
    }

    public function get($scope = null, array $columns = ['*'])
    {
        // TODO: Implement get() method.
    }

    public function update($id, array $fileds)
    {
        return $this->entityClass::where('active', $id)->update($fileds);
    }
}
