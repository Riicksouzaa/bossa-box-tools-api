<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0.0",
 *         title="VUTTR Rest Api",
 *         description="This is a sample server to VUTTR (Very Useful Tools To Remember).",
 *         @OA\Contact(
 *             email="souzaariick@gmail.com"
 *         ),
 *         @OA\License(
 *             name="Apache 2.0",
 *             url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *         )
 *     ),
 *     @OA\Server(
 *         description="VUTTR Host",
 *         url="https://vuttr-bossa.herokuapp.com"
 *     )
 * )
 */

/**
 * @OA\Tag(
 *     name="Tools",
 *     description="Access tools routes",
 * )
 *
 * Class Controller
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
