<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index()
    {


        $patients = Patient::all();
        return response()->json(['patients' => $patients], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:patients',
            'appointment_time' => 'required|time',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        }
        else
        {
            $patients = Patient::create([
                'name' => $request->name,
                'email' => $request->email,
                'time' => $request->time
            ]);

            if($patients) {

                return response()->json([
                    'status' => 200,
                    'message' => 'Appointment Added Successfully'
                ],200);
            }
            else
            {
                return response()->json([
                    'status' => 500,
                    'message' => 'Something went wrong'
                ], 500);
            }
        }

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:patients',
        //     'appointment_time' => 'required|time',
        //     // 'appointment_date' => 'required|date',
        //     // You can add more validation rules as needed
        // ]);



        // Create a new patient instance
        // $patient = new Patient();
        // $patient->name = $request->name;
        // $patient->email = $request->email;
        // $patient->email = $request->appointment_time;
        // $patient->appointment_date = $request->appointment_date;
        // // You can add more fields as needed
        // // Save the patient instance to the database
        // $patient->save();

        // // Return a success response
        // return response()->json(['message' => 'Patient created successfully', 'patient' => $patient], 201);
    }
}
