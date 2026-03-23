<?php

/**
 * @apiGroup           CategoryProduct
 * @apiName            Update
 *
 * @api                {PATCH} /v1/category-products/:id Invoke
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\CategoryProduct\UI\API\Controllers\UpdateCategoryProductController;
use Illuminate\Support\Facades\Route;

Route::patch('category-products/{id}', UpdateCategoryProductController::class)
    ->middleware(['auth:api']);

