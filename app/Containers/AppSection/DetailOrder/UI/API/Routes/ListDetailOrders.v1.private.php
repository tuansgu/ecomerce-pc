<?php

/**
 * @apiGroup           DetailOrder
 * @apiName            List
 *
 * @api                {GET} /v1/detail-orders Invoke
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

use App\Containers\AppSection\DetailOrder\UI\API\Controllers\ListDetailOrdersController;
use Illuminate\Support\Facades\Route;

Route::get('detail-orders', ListDetailOrdersController::class)
    ->middleware(['auth:api']);

