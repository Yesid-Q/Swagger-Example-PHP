<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * @OA\Get(
     *      tags={"Example"},
     *      path="api/v1/example",
     *      summary="Get list of example",
     *      description="Returns list of example",
     *      @OA\Response(
     *          response=200,
     *          description="Resource Example",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  @OA\Property(
     *                    property="title",
     *                    type="string",
     *                    example="example1",
     *                    description="Return title of example"
     *                  ),
     *                  @OA\Property(
     *                    property="description",
     *                    type="string",
     *                    example="description example",
     *                    description="Return description of example"
     *                  ),
     *                  @OA\Property(
     *                    property="counter",
     *                    type="integer",
     *                    description="Return number of example"
     *                  ),
     *                  @OA\Property(
     *                    property="created_at",
     *                    type="string",
     *                    format="date-time",
     *                    description="Return datetime created"
     *                  )
     *              )
     *          )
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
        return "List example";
    }

    /**
     * @OA\Post(
     *   tags={"Example"},
     *   path="/api/v1/example",
     *   summary="Create example",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(
     *       type="object",
     *       required={"title","counter"},
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=201,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *          description="Return title of example"
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *          description="Return description of example"
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *          description="Return number of example"
     *       ),
     *       @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Return datetime created"
     *       )
     *     )
     *   ),
     *   @OA\Response(response=401, description="Unauthorized"),
     *   @OA\Response(response=404, description="Not Found")
     * )
     */
    public function store()
    {
        return "Create example";
    }

    /**
     * @OA\Get(
     *   tags={"Example"},
     *   path="/api/v1/example/{id}",
     *   summary="Example show",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *          description="Return title of example"
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *          description="Return description of example"
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *          description="Return number of example"
     *       ),
     *       @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Return datetime created"
     *       )
     *     )
     *   ),
     *   @OA\Response(response=404, description="Not Found")
     * )
     */
    public function show(String $id)
    {
        return sprintf("Show example with $s", $id);
    }

    /**
     * @OA\Put(
     *   tags={"Example"},
     *   path="/api/path/{id}",
     *   summary="Example update",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\JsonContent(
     *       type="object",
     *       required={"title","counter"},
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *          description="Return title of example"
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *          description="Return description of example"
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *          description="Return number of example"
     *       ),
     *       @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Return datetime created"
     *       )
     *     )
     *   ),
     *   @OA\Response(response=404, description="Not Found"),
     *   @OA\Response(response=422, description="Unprocessable Entity")
     * )
     */
    public function update(String $id)
    {
        return sprintf("Update example with $s", $id);
    }

    /**
     * @OA\Patch(
     *   tags={"Example"},
     *   path="/api/v1/example/{id}",
     *   summary="Example edit",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       @OA\Property(
     *          property="title",
     *          type="string",
     *          example="example1",
     *          description="Return title of example"
     *       ),
     *       @OA\Property(
     *          property="description",
     *          type="string",
     *          example="description example",
     *          description="Return description of example"
     *       ),
     *       @OA\Property(
     *          property="counter",
     *          type="integer",
     *          description="Return number of example"
     *       ),
     *       @OA\Property(
     *         property="created_at",
     *         type="string",
     *         format="date-time",
     *         description="Return datetime created"
     *       )
     *     )
     *   ),
     *   @OA\Response(response=401, description="Unauthorized"),
     *   @OA\Response(response=404, description="Not Found")
     * )
     */
    public function edit(String $id)
    {
        return sprintf("Edit example with $s", $id);
    }

    /**
     * @OA\Delete(
     *   tags={"Example"},
     *   path="/api/v1/example/{id}",
     *   summary="Example destroy",
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     @OA\Schema(type="string")
     *   ),
     *   @OA\Response(
     *     response=204,
     *     description="OK"
     *   ),
     *   @OA\Response(response=404, description="Not Found")
     * )
     */
    public function destroy(String $id)
    {
        return sprintf("Delete example with $s", $id);
    }
}
