<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nte_baru', function (Blueprint $table) {
            $table->id();
            $table->string('witel');
            $table->integer('ONT_FIBERHOME_HG6145D2');
            $table->integer('ONT_FIBERHOME_HG6145F');
            $table->integer('ONT_FIBERHOME_HG6245N');
            $table->integer('ONT_FIBERHOME_HG6243C');
            $table->integer('ONT_HUAWEI_HG8145V5');
            $table->integer('ONT_HUAWEI_HG8245U');
            $table->integer('ONT_HUAWEI_HG8245W5_6T');
            $table->integer('ONT_HUAWEI_HG8245H5');
            $table->integer('ONT_NOKIA_G240WL');
            $table->integer('ONT_NOKIA_G_2425G_A');
            $table->integer('ONT_ZTE_F609_V5_3');
            $table->integer('ONT_ZTE_F670');
            $table->integer('ONT_ZTE_F670_V2_0');
            $table->integer('ONT_ZTE_F670L');
            $table->bigInteger('grand_total_1');
            $table->integer('SetTopBoxIPTV_FIBERHOME_HG680FJ');
            $table->integer('SetTopBox_ZTE_ZX10_B866F_V1_1');
            $table->integer('SetTopBox_ZTE_B860H_V5_0');
            $table->bigInteger('grand_total_2');
            $table->integer('ORBIT_REGULER');
            $table->integer('ORBIT_SS_ex_ROUTER_HKM0128a');
            $table->integer('Orbit_IP_ZTE_MF920US');
            $table->integer('KARTU_PERDANA_SMOOA');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nte_baru');
    }
};
