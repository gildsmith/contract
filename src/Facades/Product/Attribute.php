<?php

namespace Gildsmith\Contract\Facades\Product;

use Gildsmith\Contract\Product\AttributeInterface;
use Gildsmith\Support\Utils\ValidationRules;
use Illuminate\Support\Collection;

/**
 * Facade for managing product attributes.
 */
interface Attribute
{
    /**
     * Retrieve an attribute by its unique code.
     *
     * Trashed attributes are excluded by default. Set
     * $withTrashed to true to include them in the search.
     */
    public function find(string $code, bool $withTrashed = false): ?AttributeInterface;

    /**
     * Retrieve all attributes.
     *
     * Trashed attributes are excluded by default. Set
     * $withTrashed to true to include them in the search.
     *
     * @return Collection<int, AttributeInterface>
     */
    public function all(bool $withTrashed = false): Collection;

    /**
     * Retrieve only soft-deleted attributes.
     *
     * @return Collection<int, AttributeInterface>
     */
    public function trashed(): Collection;

    /**
     * Create a new attribute using the provided data array.
     *
     * The array must contain a valid, unique `code`.
     *
     * @see ValidationRules::CODE
     */
    public function create(array $data): AttributeInterface;

    /**
     * Update an existing attribute by its code. The code itself
     * is immutable and must not be included in $data.
     */
    public function update(string $code, array $data): AttributeInterface;

    /**
     * Create or update an attribute based on the given code.
     *
     * If an attribute exists, it will be updated;
     * otherwise a new one is created.
     */
    public function updateOrCreate(string $code, array $data): AttributeInterface;

    /**
     * Delete an attribute by its code. If $force is true,
     * the attribute will be permanently deleted.
     */
    public function delete(string $code, bool $force = false): bool;

    /**
     * Restore a soft-deleted attribute by its code.
     */
    public function restore(string $code): bool;
}
