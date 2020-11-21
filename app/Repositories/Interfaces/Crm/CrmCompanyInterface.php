<?php


namespace App\Repositories\Interfaces\Crm;


use stdClass;

interface CrmCompanyInterface
{
    /**
     * @param stdClass $data
     *
     * @return mixed
     */
    public function storeOrUpdate(stdClass $data);

    /**
     * @return mixed
     */
    public function destroy();

}
