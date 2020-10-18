<?php


namespace App\Repositories\Crm;


use App\Models\Crm\CrmCompanyType;
use App\Repositories\Interfaces\Crm\CrmCompanyInterface;
use Exception;
use stdClass;

class CrmCompanyTypeRepo implements CrmCompanyInterface
{
    protected CrmCompanyType $crmCompanyType;

    public function __construct(int $id = null)
    {
        if (empty($id)) {
            $this->crmCompanyType = new CrmCompanyType();
        } else {
            $this->crmCompanyType = CrmCompanyType::findOrFail($id);
        }
    }

    /**
     * Store or update CRM Company Type
     *
     * @param stdClass $data
     *
     * @return CrmCompanyType
     */
    public function storeOrUpdate(stdClass $data): CrmCompanyType
    {
        $this->crmCompanyType->type = $data->type;

        $this->crmCompanyType->save();

        return $this->crmCompanyType;
    }

    /**
     * @throws Exception
     */
    public function destroy()
    {
        $this->crmCompanyType->delete();
    }
}
