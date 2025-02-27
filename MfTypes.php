<?php

namespace Apps\Fintech\Packages\Mf\Types;

use Apps\Fintech\Packages\Mf\Types\Model\AppsFintechMfTypes;
use System\Base\BasePackage;

class MfTypes extends BasePackage
{
    protected $modelToUse = AppsFintechMfTypes::class;

    protected $packageName = 'mftypes';

    public $mftypes;

    public function getMfTypeByName($name)
    {
        if ($this->config->databasetype === 'db') {
            $conditions =
                [
                    'conditions'    => 'name = :name:',
                    'bind'          =>
                        [
                            'name'  => $name
                        ]
                ];
        } else {
            $conditions =
                [
                    'conditions'    => [
                        ['name', '=', $name]
                    ]
                ];
        }

        $mftype = $this->getByParams($conditions);

        if ($mftype && count($mftype) > 0) {
            return $mftype[0];
        }

        return false;
    }

    public function addMfHouses($data)
    {
        //
    }

    public function updateMfHouses($data)
    {
        $mftypes = $this->getById($id);

        if ($mftypes) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeMfHouses($data)
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