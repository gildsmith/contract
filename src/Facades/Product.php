<?php

namespace Gildsmith\Contract\Facades;

use Gildsmith\Contract\Facades\Product\Attribute as AttributeFacade;
use Gildsmith\Contract\Facades\Product\AttributeValue as AttributeValueFacade;
use Gildsmith\Contract\Facades\Product\Blueprint as BlueprintFacade;
use Gildsmith\Contract\Facades\Product\ProductCollection as ProductCollectionFacade;
use Gildsmith\Contract\Product\ProductInterface;
use Gildsmith\Support\Utils\ValidationRules;
use Illuminate\Support\Collection;

/**
 * Product Facade serves as a programmatic interface for managing products.
 *
 * It mimics an internal API, allowing consumers to perform product
 * operations without knowledge of the underlying implementation.
 */
interface Product
{
    /**
     * Access the attribute management facade.
     */
    public function attribute(): AttributeFacade;

    /**
     * Access the attribute value management facade.
     */
    public function attributeValue(): AttributeValueFacade;

    /**
     * Access the blueprint management facade.
     */
    public function blueprint(): BlueprintFacade;

    /**
     * Access the product collection management facade.
     */
    public function collection(): ProductCollectionFacade;

    /**
     * Retrieve a product by its unique code.
     *
     * Trashed products are excluded by default. Set
     * $withTrashed to true to include them in the search.
     */
    public function find(string $code, bool $withTrashed = false): ?ProductInterface;

    /**
     * Retrieve all products.
     *
     * Trashed products are excluded by default. Set
     * $withTrashed to true to include them in the search.
     *
     * @return Collection<int, ProductInterface>
     */
    public function all(bool $withTrashed = false): Collection;

    /**
     * Retrieve only soft-deleted products.
     *
     * @return Collection<int, ProductInterface>
     */
    public function trashed(): Collection;

    /**
     * Create a new product using the provided data array.
     *
     * The array must contain a valid, unique `code`. Additional fields
     * will depend on system configuration and blueprint expectations.
     *
     * @see ValidationRules::CODE
     */
    public function create(array $data): ProductInterface;

    /**
     * Update an existing product by its code. The code itself
     * is immutable and must not be included in $data.
     */
    public function update(string $code, array $data): ProductInterface;

    /**
     * Create or update a product based on the given code.
     *
     * If a product exists, it will be updated;
     * otherwise a new one is created.
     */
    public function updateOrCreate(string $code, array $data): ProductInterface;

    /**
     * Delete a product by its code. If $force is true,
     * the product will be permanently deleted.
     */
    public function delete(string $code, bool $force = false): bool;

    /**
     * Restore a soft-deleted product by its code.
     */
    public function restore(string $code): bool;
}
