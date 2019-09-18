<?php

namespace App\Http\Controllers;

use App\City;
use App\Course;
use App\University;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all()
    {
        $all = City::all();

        $agents = [];

        $users = User::all();
        foreach ($users as $user) {
            if ($user->hasRole('agent')) {
                array_push($agents, $user);
            }
        }

        foreach ($all as $a) {
            $universities = University::where('city_id', '=', $a->id)->get();
            if (isset($university)) {
                $a->universities = $universities;
            }

            foreach ($a->universities as $university) {
                $courses = Course::where('university_id', '=', $university->id)->get();
                $universityAgents = [];
                if (isset($courses)) {
                    $university->courses = $courses;
                }

                foreach ($agents as $agent) {
                    if ($agent->university_id == $university->id) {
                        array_push($universityAgents, $agent);
                    }
                }

                $university->agents = $universityAgents;
            }

        }
        return response()->json(['status' => 'success', 'all' => $all], 200);
    }

    public function enrollment(Request $request)
    {
        $user = User::find($request->userId);
        if (isset($user)) {
            $user->university_id = $request->uniId;
            $user->course_id = $request->courseId;
            $user->update();
        }

        return response()->json(['status' => 'success', 'user' => $user], 200);
    }
}
