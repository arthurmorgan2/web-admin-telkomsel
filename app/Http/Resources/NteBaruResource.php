<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class NteBaruResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'witel' => $this->witel,
            'ONT_FIBERHOME_HG6145D2' => $this->ONT_FIBERHOME_HG6145D2,
            'ONT_FIBERHOME_HG6145F' => $this->ONT_FIBERHOME_HG6145F,
            'ONT_FIBERHOME_HG6245N' => $this->ONT_FIBERHOME_HG6245N,
            'ONT_FIBERHOME_HG6243C' => $this->ONT_FIBERHOME_HG6243C,
            'ONT_HUAWEI_HG8145V5' => $this->ONT_HUAWEI_HG8145V5,
            'ONT_HUAWEI_HG8245U' => $this->ONT_HUAWEI_HG8245U,
            'ONT_HUAWEI_HG8245W5_6T' => $this->ONT_HUAWEI_HG8245W5_6T,
            'ONT_HUAWEI_HG8245H5' => $this->ONT_HUAWEI_HG8245H5,
            'ONT_NOKIA_G240WL' => $this->ONT_NOKIA_G240WL,
            'ONT_NOKIA_G_2425G_A' => $this->ONT_NOKIA_G_2425G_A,
            'ONT_ZTE_F609_V5_3' => $this->ONT_ZTE_F609_V5_3,
            'ONT_ZTE_F670' => $this->ONT_ZTE_F670,
            'ONT_ZTE_F670_V2_0' => $this->ONT_ZTE_F670_V2_0,
            'ONT_ZTE_F670L' => $this->ONT_ZTE_F670L,
            'SetTopBoxIPTV_FIBERHOME_HG680FJ' => $this->SetTopBoxIPTV_FIBERHOME_HG680FJ,
            'SetTopBox_ZTE_ZX10_B866F_V1_1' => $this->SetTopBox_ZTE_ZX10_B866F_V1_1,
            'SetTopBox_ZTE_B860H_V5_0' => $this->SetTopBox_ZTE_B860H_V5_0,
            'ORBIT_REGULER' => $this->ORBIT_REGULER,
            'ORBIT_SS_ex_ROUTER_HKM0128a' => $this->ORBIT_SS_ex_ROUTER_HKM0128a,
            'Orbit_IP_ZTE_MF920US' => $this->Orbit_IP_ZTE_MF920US,
            'KARTU_PERDANA_SMOOA' => $this->KARTU_PERDANA_SMOOA,
        ];
    }
}
