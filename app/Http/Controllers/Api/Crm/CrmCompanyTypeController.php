<?php

namespace App\Http\Controllers\Api\Crm;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Crm\CrmCompanyType as CrmCompanyTypeRequest;
use App\Http\Resources\Api\Crm\CrmCompanyType as CrmCompanyTypeResource;
use App\Models\Crm\CrmCompanyType;
use App\Repositories\Crm\CrmCompanyTypeRepo;
use DB;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Log;
use Symfony\Component\HttpFoundation\Response as HttpCode;
use Throwable;

class CrmCompanyTypeController extends Controller
{

    public function index()
    {
        return response()->json(CrmCompanyTypeResource::collection(CrmCompanyType::all()));
    }

    public function show(int $id)
    {
        return response()->json(new CrmCompanyTypeResource(CrmCompanyType::findOrFail($id)));
    }

    /**
     * @param CrmCompanyTypeRequest $request
     *
     * @return JsonResponse|Response
     * @throws Throwable
     */
    public function store(CrmCompanyTypeRequest $request)
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
            return response()->json(['msg' => 'Could not save new Type'], HttpCode::HTTP_BAD_REQUEST);
        }

        DB::commit();

        return response()->json(new CrmCompanyTypeResource($crmCompanyType), HttpCode::HTTP_CREATED);
    }

    /**
     * @param CrmCompanyTypeRequest $request
     * @param int                   $id
     *
     * @return mixed|void
     * @throws Throwable
     */
    public function update(CrmCompanyTypeRequest $request, int $id)
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
            return response()->json(['msg' => 'Could not update a company Type'], HttpCode::HTTP_BAD_REQUEST);
        }

        DB::commit();

        return response()->json(new CrmCompanyTypeResource($crmCompanyType));
    }

    /**
     * @param int $id
     *
     * @return JsonResponse|Response
     * @throws Throwable
     */
    public function destroy(int $id)
    {
        $crmCompanyType = new CrmCompanyTypeRepo($id);

        if ($crmCompanyType->model()->hasCompanies()){
            return response()->json(['msg' => 'Crm Company Type still has companies attached to it!'], HttpCode::HTTP_CONFLICT);
        }

        DB::beginTransaction();

        try {
            $crmCompanyType->destroy();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return response()->json(['msg' => 'Could not delete a company Type'], HttpCode::HTTP_BAD_REQUEST);
        }

        return response('', HttpCode::HTTP_NO_CONTENT);
    }
}