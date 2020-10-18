<?php

namespace App\Http\Controllers\Api\Crm;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Interfaces\ApiControllerInterface;
use App\Http\Requests\Api\Crm\CrmCompanyType as CrmCompanyTypeRequest;
use App\Http\Resources\Api\Crm\CrmCompanyType as CrmCompanyTypeResource;
use App\Models\Crm\CrmCompanyType;
use App\Repositories\Crm\CrmCompanyTypeRepo;
use DB;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Symfony\Component\HttpFoundation\Response as HttpCode;

class CrmCompanyTypeController extends Controller implements ApiControllerInterface
{

    public function index()
    {
        return response()->json(CrmCompanyTypeResource::make(CrmCompanyType::all()));
    }

    public function show(int $id)
    {
        return response()->json(new CrmCompanyTypeResource(CrmCompanyType::findOrFail($id)));
    }

    /**
     * @param Request|CrmCompanyTypeRequest $request
     *
     * @return Application|ResponseFactory|JsonResponse|Response|object
     */
    public function store($request)
    {
        $request->validated();

        $crmCompanyType = new CrmCompanyTypeRepo();
        $data           = (object)$request->only('type');

        DB::beginTransaction();

        try {
            $crmCompanyType = $crmCompanyType->storeOrUpdate($data);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()
                ->setStatusCode(HttpCode::HTTP_BAD_REQUEST)
                ->json(['msg' => 'Could not save new Type']);
        }

        DB::commit();

        return response()
            ->json(new CrmCompanyTypeResource($crmCompanyType))
            ->setStatusCode(HttpCode::HTTP_CREATED);
    }

    /**
     * @param CrmCompanyTypeRequest|Request $request
     * @param int                           $id
     *
     * @return mixed|void
     */
    public function update($request, int $id)
    {
        $request->validated();

        $crmCompanyType = new CrmCompanyTypeRepo($id);
        $data           = (object)$request->only('type');

        DB::beginTransaction();

        try {
            $crmCompanyType = $crmCompanyType->storeOrUpdate($data);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()
                ->setStatusCode(HttpCode::HTTP_BAD_REQUEST)
                ->json(['msg' => 'Could not update a company Type']);
        }

        DB::commit();

        return response()->json(new CrmCompanyTypeResource($crmCompanyType));
    }

    /**
     * @param int $id
     *
     * @return Application|ResponseFactory|JsonResponse|Response|mixed|object
     */
    public function destroy(int $id)
    {
        $crmCompanyType = new CrmCompanyTypeRepo($id);

        DB::beginTransaction();

        try {
            $crmCompanyType->destroy();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()
                ->setStatusCode(HttpCode::HTTP_BAD_REQUEST)
                ->json(['msg' => 'Could not delete a company Type']);
        }

        return response()->setStatusCode(HttpCode::HTTP_NO_CONTENT);
    }
}
