<?php

declare(strict_types=1);

namespace Modules\Warehouse\Services\Discount;

use Illuminate\Support\Facades\DB;
use Modules\Warehouse\Contracts\DiscountRelationInterface;
use Modules\Warehouse\DTO\Discount\ProductDiscountDto as DiscountDto;
use Modules\Warehouse\Http\Exceptions\VariationToApplyDiscountDoesNotExists;
use Modules\Warehouse\Models\Discount;

final class AddDiscountService extends AbstractDiscountService implements DiscountProcessingInterface
{
    /**
     * @param  DiscountDto  $dto
     * @return void
     * @throws VariationToApplyDiscountDoesNotExists
     */
    public function process(DiscountDto $dto): void
    {
        if (is_null($this->product->hasCombinedAttributes())) {
            $this->createDiscount(
                relation: $this->product->warehouse,
                dto: $dto,
                oldPrice: (float) $this->product->warehouse->getRawOriginal('default_price'),
            );

            return;
        }

        $variation = $this->getVariationForCurrentDiscount($dto);

        $this->createDiscount(
            relation: $variation,
            dto: $dto,
            oldPrice: (float) $variation->getRawOriginal('price'),
        );
    }

    private function createDiscount(DiscountRelationInterface $relation, DiscountDto $dto, float $oldPrice): void
    {
        DB::transaction(function () use ($relation, $dto, $oldPrice) {
            $discount = Discount::query()->create([
                'percentage' => $dto->percentage,
                'original_price' => $oldPrice,
                'discount_price' => $this->calculateDiscountPrice($oldPrice, $dto),
                'start_date' => $dto->startFrom,
                'end_date' => $dto->endAt,
            ]);

            $relation->discount()->update(['is_cancelled' => true]);

            $relation->discount()->attach($discount);
        });
    }

    private function getVariationForCurrentDiscount(DiscountDto $dto): DiscountRelationInterface
    {
        $variation = $this->productVariations
            ->where('id', $dto->variationId)
            ->first();

        if (! $variation) {
            throw new VariationToApplyDiscountDoesNotExists();
        }

        return $variation;
    }
}