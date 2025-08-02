<?php

namespace Gildsmith\Contract\Facades\Product;

use Gildsmith\Contract\Product\BlueprintInterface;
use Gildsmith\Support\Utils\ValidationRules;
use Illuminate\Support\Collection;

/**
 * Facade for managing product blueprints.
 */
interface Blueprint
{
    /**
     * Retrieve a blueprint by its unique code.
     *
     * Trashed blueprints are excluded by default. Set
     * $withTrashed to true to include them in the search.
     */
    public function find(string $code, bool $withTrashed = false): ?BlueprintInterface;

    /**
     * Retrieve all blueprints.
     *
     * Trashed blueprints are excluded by default. Set
     * $withTrashed to true to include them in the search.
     *
     * @return Collection<int, BlueprintInterface>
     */
    public function all(bool $withTrashed = false): Collection;

    /**
     * Retrieve only soft-deleted blueprints.
     *
     * @return Collection<int, BlueprintInterface>
     */
    public function trashed(): Collection;

    /**
     * Create a new blueprint using the provided data array.
     *
     * The array must contain a valid, unique `code`.
     *
     * @see ValidationRules::CODE
     */
    public function create(array $data): BlueprintInterface;

    /**
     * Update an existing blueprint by its code. The code itself
     * is immutable and must not be included in $data.
     */
    public function update(string $code, array $data): BlueprintInterface;

    /**
     * Create or update a blueprint based on the given code.
     *
     * If a blueprint exists, it will be updated;
     * otherwise a new one is created.
     */
    public function updateOrCreate(string $code, array $data): BlueprintInterface;

    /**
     * Delete a blueprint by its code. If $force is true,
     * the blueprint will be permanently deleted.
     */
    public function delete(string $code, bool $force = false): bool;

    /**
     * Restore a soft-deleted blueprint by its code.
     */
    public function restore(string $code): bool;
}
