<?php

declare(strict_types=1);

namespace Modules\Product\Http\Management\Exceptions;

use Illuminate\Http\JsonResponse;
use Throwable;

class FailedToRetrieveImagesException extends \Exception
{
    protected Throwable $originalException;

    public function __construct(string $message, Throwable $exception)
    {
        parent::__construct($message);
        $this->originalException = $exception;
    }

    public function report(): bool
    {
        return false;
    }

    public function render(): JsonResponse
    {
        return response()->json([
            'message' => 'Failed to retrieve product images. Try again or contact us.'
        ], 500);
    }
}