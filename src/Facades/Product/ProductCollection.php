<?php

namespace Gildsmith\Contract\Facades\Product;

use Gildsmith\Contract\Product\ProductCollectionInterface;
use Gildsmith\Support\Utils\ValidationRules;
use Illuminate\Support\Collection;

/**
 * Facade for managing product collections.
 */
interface ProductCollection
{
    /**
     * Retrieve a product collection by its unique code.
     *
     * Trashed collections are excluded by default. Set
     * $withTrashed to true to include them in the search.
     */
    public function find(string $code, bool $withTrashed = false): ?ProductCollectionInterface;

    /**
     * Retrieve all product collections.
     *
     * Trashed collections are excluded by default. Set
     * $withTrashed to true to include them in the search.
     *
     * @return Collection<int, ProductCollectionInterface>
     */
    public function all(bool $withTrashed = false): Collection;

    /**
     * Retrieve only soft-deleted product collections.
     *
     * @return Collection<int, ProductCollectionInterface>
     */
    public function trashed(): Collection;

    /**
     * Create a new product collection using the provided data array.
     *
     * The array must contain a valid, unique `code`.
     *
     * @see ValidationRules::CODE
     */
    public function create(array $data): ProductCollectionInterface;

    /**
     * Update an existing product collection by its code. The code itself
     * is immutable and must not be included in $data.
     */
    public function update(string $code, array $data): ProductCollectionInterface;

    /**
     * Create or update a product collection based on the given code.
     *
     * If a collection exists, it will be updated;
     * otherwise a new one is created.
     */
    public function updateOrCreate(string $code, array $data): ProductCollectionInterface;

    /**
     * Delete a product collection by its code. If $force is true,
     * the collection will be permanently deleted.
     */
    public function delete(string $code, bool $force = false): bool;

    /**
     * Restore a soft-deleted product collection by its code.
     */
    public function restore(string $code): bool;
}
