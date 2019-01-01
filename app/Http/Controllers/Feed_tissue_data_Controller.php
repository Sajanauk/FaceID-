<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feed_tissue_data;

class Feed_tissue_data_Controller extends Controller
{
    public function savetissuedata(Request $request){
        $data=new feed_tissue_data;
        $data->user_id=$request->user_id;
        $data->age_group=$request->age_group;
        $data->gender=$request->gender;
        $data->bregma=$request->bregma;
        $data->glabella=$request->glabella;
        $data->nasion=$request->nasion;
        $data->end_of_nasal_bone=$request->end_of_nasal_bone;
        $data->mid_philtrum=$request->mid_philtrum;
        $data->upper_lip_margin=$request->upper_lip_margin;
        $data->lower_lip_margin=$request->lower_lip_margin;
        $data->chin_lip_fold=$request->chin_lip_fold;
        $data->mental_emnince=$request->mental_emnince;
        $data->beneath_chin=$request->beneath_chin;
        $data->supra_orbital=$request->supra_orbital;
        $data->infra_orbital=$request->infra_orbital;
        $data->ectoconchion=$request->ectoconchion;
        $data->supra_canine=$request->supra_canine;
        $data->infra_canin=$request->infra_canin;
        $data->jugale=$request->jugale;
        $data->zygomatic_arch=$request->zygomatic_arch;
        $data->supra_glenoid=$request->supra_glenoid;
        $data->mastoiale=$request->mastoiale;
        $data->euryon=$request->euryon;
        $data->gonion=$request->gonion;
        $data->save();
        return redirect()->back();

    }


}
