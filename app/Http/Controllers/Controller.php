<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="Todo App", version="0.1")
 * @OA\PathItem(path="/api")
 * @OA\Components(
 *     schemas={
 *         @OA\Schema(
 *             schema="Task",
 *             type="object",
 *             @OA\Property(property="name", type="string"),
 *             @OA\Property(property="description", type="text"),
 *             @OA\Property(property="finished", type="boolean"),
 *         )
 *     }
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
