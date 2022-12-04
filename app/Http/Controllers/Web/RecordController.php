<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Models\Record;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Record\CreateRecordRequest;
use App\Http\Requests\Report\CreateReportRequest;

class RecordController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == User::ROLE_DOCTOR) {
            $records = Record::where('doctor_id', $user->id)->get();
        }
        else if ($user->role == User::ROLE_PATIENT) {
            $records = Record::where('patient_id', $user->id)->get();
        }

        return view('records.index', compact('records'));
    }

    public function info(int $id)
    {
        $user = Auth::user();

        $record = Record::find($id);

        return view('records.info', compact('record'));
    }

    public function create(CreateRecordRequest $request)
    {
        $data = $request->validated();
        $user = Auth::user();

        $data['doctor_id'] = $user->id;

        $record = Record::create($data);

        // TODO data scraping logic

        return redirect()->back()->with('message', 'Запись создана');
    }

    public function createReport(CreateReportRequest $request, int $id)
    {
        $data = $request->validated();
        $user = Auth::user();

        // TODO report logic

        return redirect()->back()->with('message', 'Отчет создан');
    }
}
