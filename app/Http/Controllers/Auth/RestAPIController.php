<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;

class RestAPIController extends Controller
{
    public function getRestData(Request $request){
        $input = $request->all();

        if($input['info'] == "get_classes") {
            $query = "select * from wp_utpe_usssa_sport_relationship where sport_id='".$input['sport_id']."' GROUP BY class_id";
            $classes = DB::select($query);
            $query = "select * from wp_utpe_usssa_sport_relationship where sport_id='".$input['sport_id']."' GROUP BY age_group_id";
            $age_group = DB::select($query);
            return response()->json(['classes'=>$classes, 'age_group'=>$age_group])->header('Content-Type', 'text/json');
        } else if($input['info'] == "get_teams_data") {
            $query = "select * from wp_utpe_usssa_teams where state_id='".$input['state_id']."'".
                " and sport_id='".$input['sport_id']."'".
                " and class_id='".$input['class_id']."'" .
                " and age_group_id='".$input['age_group_id']."'";
            $team_data = DB::select($query);
            return response()->json($team_data)->header('Content-Type', 'text/json');
        }


        return response()->json($input)->header('Content-Type', 'text/json');
    }
}