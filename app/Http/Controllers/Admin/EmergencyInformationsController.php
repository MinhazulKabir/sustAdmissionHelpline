<?php

namespace App\Http\Controllers\Admin;

use App\EmergencyInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEmergencyInformationsRequest;
use App\Http\Requests\Admin\UpdateEmergencyInformationsRequest;

class EmergencyInformationsController extends Controller
{
    /**
     * Display a listing of EmergencyInformation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('emergency_information_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('emergency_information_delete')) {
                return abort(401);
            }
            $emergency_informations = EmergencyInformation::onlyTrashed()->get();
        } else {
            $emergency_informations = EmergencyInformation::all();
        }

        return view('admin.emergency_informations.index', compact('emergency_informations'));
    }

    /**
     * Show the form for creating new EmergencyInformation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('emergency_information_create')) {
            return abort(401);
        }
        return view('admin.emergency_informations.create');
    }

    /**
     * Store a newly created EmergencyInformation in storage.
     *
     * @param  \App\Http\Requests\StoreEmergencyInformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmergencyInformationsRequest $request)
    {
        if (! Gate::allows('emergency_information_create')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::create($request->all());



        return redirect()->route('admin.emergency_informations.index');
    }


    /**
     * Show the form for editing EmergencyInformation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('emergency_information_edit')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::findOrFail($id);

        return view('admin.emergency_informations.edit', compact('emergency_information'));
    }

    /**
     * Update EmergencyInformation in storage.
     *
     * @param  \App\Http\Requests\UpdateEmergencyInformationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmergencyInformationsRequest $request, $id)
    {
        if (! Gate::allows('emergency_information_edit')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::findOrFail($id);
        $emergency_information->update($request->all());



        return redirect()->route('admin.emergency_informations.index');
    }


    /**
     * Display EmergencyInformation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('emergency_information_view')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::findOrFail($id);

        return view('admin.emergency_informations.show', compact('emergency_information'));
    }


    /**
     * Remove EmergencyInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('emergency_information_delete')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::findOrFail($id);
        $emergency_information->delete();

        return redirect()->route('admin.emergency_informations.index');
    }

    /**
     * Delete all selected EmergencyInformation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('emergency_information_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = EmergencyInformation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore EmergencyInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('emergency_information_delete')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::onlyTrashed()->findOrFail($id);
        $emergency_information->restore();

        return redirect()->route('admin.emergency_informations.index');
    }

    /**
     * Permanently delete EmergencyInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('emergency_information_delete')) {
            return abort(401);
        }
        $emergency_information = EmergencyInformation::onlyTrashed()->findOrFail($id);
        $emergency_information->forceDelete();

        return redirect()->route('admin.emergency_informations.index');
    }
}
