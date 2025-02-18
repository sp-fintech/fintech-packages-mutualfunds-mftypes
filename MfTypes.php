<?php

namespace Apps\Fintech\Packages\Mf\Types;

use System\Base\BasePackage;

class MfTypes extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'mftypes';

    public $mftypes;

    public function getMfTypesById($id)
    {
        $mftypes = $this->getById($id);

        if ($mftypes) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addMfTypes($data)
    {
        //
    }

    public function updateMfTypes($data)
    {
        $mftypes = $this->getById($id);

        if ($mftypes) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeMfTypes($data)
    {
        $mftypes = $this->getById($id);

        if ($mftypes) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}