<?php

namespace Gildsmith\Contract\Facades;

use Illuminate\Support\Collection;

/**
 * CRUD facade with soft-delete support.
 *
 * @template TModel
 * @extends CrudFacade<TModel>
 */
interface TrashableFacade extends CrudFacade
{
    /**
     * Retrieve a model by code, including soft-deleted models.
     *
     * @return TModel|null
     */
    public function findIncludingTrashed(string $code);

    /**
     * Retrieve all models including soft-deleted ones.
     *
     * @return Collection<int, TModel>
     */
    public function allIncludingTrashed(): Collection;

    /**
     * Retrieve only soft-deleted models.
     *
     * @return Collection<int, TModel>
     */
    public function trashed(): Collection;

    /**
     * Restore a soft-deleted model by its code.
     */
    public function restore(string $code): bool;

    /**
     * Permanently delete a model by its code.
     */
    public function forceDelete(string $code): bool;
}
