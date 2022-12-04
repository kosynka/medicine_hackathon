<?php

namespace App\Http\Controllers\eb;

use App\Http\Controllers\Controller;
use App\Http\Requests\Disease\UpdateDiseaseRequest;
use App\Models\Disease;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiseaseController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == User::ROLE_DOCTOR) {
            $diseases = Disease::where('doctor_id', $user->id)->get();
        }
        else if ($user->role == User::ROLE_PATIENT) {
            $diseases = Disease::where('patient_id', $user->id)->get();
        }

        return view('diseases.index', compact('diseases'));
    }

    public function info(int $id)
    {
        $user = Auth::user();

        $disease = Disease::find($id);

        return view('diseases.info', compact('disease'));
    }

    public function update(int $id, UpdateDiseaseRequest $request)
    {
        $data = $request->validated();

        Disease::find($id)->update($data);

        return redirect()->back()->with('message', 'Данные изменены');
    }

    public function analyze(int $id)
    {
        $disease = Disease::find($id);
        $file = File::create($disease);         // CREATE FILE

        return response()->download(storage_path($file->path));
    }
}
