<?php

namespace App\Http\Controllers;

use App\City;
use App\University;
use App\User;
use Illuminate\Http\Request;

class UniversityController extends Controller
{

    public function all()
    {
        $universities = [];
        $universitiesUn = University::all();

        foreach ($universitiesUn as $university) {
            $city = City::find($university->city_id);
            $university->city = $city->id;
            array_push($universities, $university);
        }

        return response()->json([
            'status' => 'success',
            'universities' => $universities
        ], 200);
    }

    public function add(Request $request)
    {
        $cityId = $request->cityId;
        $universityName = $request->name;

        University::create([
            'name' => $universityName,
            'city_id' => $cityId
        ]);

        return response()->json([
            'status' => 'success',
        ], 200);
    }

    public function update(Request $request)
    {
        $uni = University::find($request->id);
        if ($uni) {
            $uni->name = $request->name;
            $uni->city_id = $request->city_id;
            $uni->update();
            return response()->json([
                'status' => 'success',
            ], 200);
        }

    }

    public function delete(Request $request)
    {
        $uni = University::find($request->id);
        if ($uni) {
            $uni->delete();
            return response()->json([
                'status' => 'success',
            ], 200);
        }
    }

    public function universities()
    {
        $universities = University::all();

        return response()->json([
            'status' => 'success',
            'universities' => $universities,
        ]);

    }

    public function agentRegister(Request $request)
    {
        $user = User::find($request->userId);
        if (isset($user)) {
            $user->university_id = $request->id;
            $user->update();
            return response()->json([
                'status' => 'success',
                'user' => $user
            ]);
        }
    }
}
