<?php

declare(strict_types=1);

namespace Modules\Brand\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Brand\Http\Exceptions\FailedToDeleteBrandException;
use Modules\Brand\Http\Requests\BrandRequest;
use Modules\Brand\Http\Resources\BrandResource;
use Modules\Brand\Models\Brand;

class ManipulationBrandController extends Controller
{
    /**
     * Create brand.
     *
     * Usage place - Admin section.
     *
     * @param  BrandRequest  $request
     * @return BrandResource
     */
    public function create(BrandRequest $request): BrandResource
    {
        $brand = Brand::query()->create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return new BrandResource($brand);
    }

    /**
     * Edit brand data.
     *
     * Usage place - Admin section.
     *
     * @param  Brand  $brand
     * @param  BrandRequest  $request
     * @return JsonResponse
     */
    public function edit(Brand $brand, BrandRequest $request): JsonResponse
    {
        $brand->update(['name' => $request->name, 'description' => $request->description]);

        if ($brand->wasChanged()) {
            return response()->json([
                'message' => 'Brand was updated.',
                'data' => [
                    'slug' => $brand->slug
                ]
            ]);
        }

        return response()->json(['message' => 'Brand information is up-to-date.']);
    }

    /**
     * Delete brand.
     *
     * Usage place - Admin section.
     *
     * @param  Brand  $brand
     * @return JsonResponse
     * @throws FailedToDeleteBrandException
     */
    public function delete(Brand $brand): JsonResponse
    {
        if ($brand->hasProducts()) {
            throw FailedToDeleteBrandException::brandHasProducts();
        }

        $brand->delete();

        return response()->json(['message' => 'Brand was deleted.']);
    }
}