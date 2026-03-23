<?php

/**
 * @apiGroup           DetailOrder
 * @apiName            Create
 *
 * @api                {POST} /v1/detail-orders Invoke
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

use App\Containers\AppSection\DetailOrder\UI\API\Controllers\CreateDetailOrderController;
use Illuminate\Support\Facades\Route;

Route::post('detail-orders', CreateDetailOrderController::class)
    ->middleware(['auth:api']);

