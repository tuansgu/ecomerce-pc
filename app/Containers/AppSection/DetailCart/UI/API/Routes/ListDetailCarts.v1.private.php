<?php

/**
 * @apiGroup           DetailCart
 * @apiName            List
 *
 * @api                {GET} /v1/detail-carts Invoke
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

use App\Containers\AppSection\DetailCart\UI\API\Controllers\ListDetailCartsController;
use Illuminate\Support\Facades\Route;

Route::get('detail-carts', ListDetailCartsController::class)
    ->middleware(['auth:api']);

