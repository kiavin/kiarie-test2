<?php
namespace Mail;

/**
 * @license Apache 2.0
 */
/**
 * @OA\Info(
 *     description="API documentation for Mail module",
 *     version="1.0.0",
 *     title="Mail Module",
 *     @OA\Contact(
 *         email="admin@crackit.co.ke",
 *         name="Ananda Douglas"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */ 

class Module extends \helpers\ApiModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'Mail\controllers';
    public $name = 'Mail';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

    }
}

/**
 * @OA\SecurityScheme(
 *   securityScheme="bearerAuth",
 *   type="http",
 *   scheme="bearer",
 *   bearerFormat="JWT",
 * )
 */

/**
 * @OA\OpenApi(
 *   security={
 *      {
 *          "bearerAuth":{
 *
 *          }
 *      }
 *   }
 * )
 */

/**
 * @OA\Tag(
 *     name="MAIL",
 *     description="Endpoints for the MAIL module"
 * )
 */

/**
 * @OA\Get(path="/about",
 *   summary="Module Info. ",
 *   tags={"MAIL"},
 *   security={{}},
 *   @OA\Response(
 *     response=200,
 *     description="success",
 *      @OA\JsonContent(
 *          @OA\Property(property="data", type="array",@OA\Items(ref="#/components/schemas/About")),
 *          
 *      )
 *   ),
 * )
 */
/**
 *@OA\Schema(
 *  schema="About",
 *  @OA\Property(property="id", type="string",title="Module ID", example="MAIL"),
 *  @OA\Property(property="name", type="string",title="Module Name", example="MAIL Module"),
 * )
 */