<?php

declare(strict_types=1);

namespace Modules\Product\Http\Management\Resources\Product;

use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;
use TiMacDonald\JsonApi\Link;

class ProductsPreviewByCategory extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'id' => $this->category_id,
            'name' => $this->name,
            'slug' => $this->slug,
        ];
    }

    public function toRelationships(Request $request)
    {
        return [
            'products' => fn() => ProductCartResource::collection($this->products)
        ];
    }

    public function toLinks(Request $request): array
    {
        return $this->pagination->next ? [Link::self($this->pagination->next)] : [];
    }

    public function toMeta(Request $request): array
    {
        return [
            'total' => $this->pagination->total,
        ];
    }

    public function toId(Request $request): string
    {
        return (string)$this->category_id;
    }

    public function toType(Request $request): string
    {
        return 'products';
    }
}