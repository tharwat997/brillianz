<?php

namespace App\Http\Controllers;

use App\City;
use App\Course;
use App\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function createFeedback(Request $request)
    {
        $feedback = DB::table('agent_feedback')->where('agent_id', '=', $request->agentId)
            ->where('feedback_giver_id', '=', $request->studentId)->first();

        if (isset($feedback)) {
            return response()->json(['status' => 'error', 'error' => 'Feedback already given for that agent'], 200);
        } else {

            DB::table('agent_feedback')->insert([
                'feedback_giver_id' => $request->studentId,
                'agent_id' => $request->agentId,
                'feedback' => $request->feedback,
            ]);

            return response()->json(['status' => 'success'], 200);
        }


    }
}
