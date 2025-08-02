<?php

namespace Gildsmith\Contract\Facades\Product;

use Gildsmith\Contract\Product\AttributeValueInterface;
use Gildsmith\Support\Utils\ValidationRules;
use Illuminate\Support\Collection;

/**
 * Facade for managing attribute values.
 */
interface AttributeValue
{
    /**
     * Retrieve an attribute value by its unique code.
     *
     * Trashed values are excluded by default. Set
     * $withTrashed to true to include them in the search.
     */
    public function find(string $code, bool $withTrashed = false): ?AttributeValueInterface;

    /**
     * Retrieve all attribute values.
     *
     * Trashed values are excluded by default. Set
     * $withTrashed to true to include them in the search.
     *
     * @return Collection<int, AttributeValueInterface>
     */
    public function all(bool $withTrashed = false): Collection;

    /**
     * Retrieve only soft-deleted attribute values.
     *
     * @return Collection<int, AttributeValueInterface>
     */
    public function trashed(): Collection;

    /**
     * Create a new attribute value using the provided data array.
     *
     * The array must contain a valid, unique `code`.
     *
     * @see ValidationRules::CODE
     */
    public function create(array $data): AttributeValueInterface;

    /**
     * Update an existing attribute value by its code. The code itself
     * is immutable and must not be included in $data.
     */
    public function update(string $code, array $data): AttributeValueInterface;

    /**
     * Create or update an attribute value based on the given code.
     *
     * If a value exists, it will be updated;
     * otherwise a new one is created.
     */
    public function updateOrCreate(string $code, array $data): AttributeValueInterface;

    /**
     * Delete an attribute value by its code. If $force is true,
     * the value will be permanently deleted.
     */
    public function delete(string $code, bool $force = false): bool;

    /**
     * Restore a soft-deleted attribute value by its code.
     */
    public function restore(string $code): bool;
}
