<?php


namespace App\Http\Controllers\Interfaces;


use App\Http\Requests\Api\Crm\CrmCompanyType;
use Illuminate\Http\Request;

interface ApiControllerInterface
{
    /**
     *
     * @return mixed
     */
    public function index();

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id);

    /**
     * @param Request|CrmCompanyType $request
     *
     * @return mixed
     */
    public function store($request);

    /**
     * @param Request|CrmCompanyType $request
     * @param int                    $id
     *
     * @return mixed
     */
    public function update($request, int $id);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function destroy(int $id);
}
