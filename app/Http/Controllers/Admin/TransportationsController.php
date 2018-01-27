<?php

namespace App\Http\Controllers\Admin;

use App\Transportation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTransportationsRequest;
use App\Http\Requests\Admin\UpdateTransportationsRequest;

class TransportationsController extends Controller
{
    /**
     * Display a listing of Transportation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('transportation_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('transportation_delete')) {
                return abort(401);
            }
            $transportations = Transportation::onlyTrashed()->get();
        } else {
            $transportations = Transportation::all();
        }

        return view('admin.transportations.index', compact('transportations'));
    }

    /**
     * Show the form for creating new Transportation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('transportation_create')) {
            return abort(401);
        }
        return view('admin.transportations.create');
    }

    /**
     * Store a newly created Transportation in storage.
     *
     * @param  \App\Http\Requests\StoreTransportationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransportationsRequest $request)
    {
        if (! Gate::allows('transportation_create')) {
            return abort(401);
        }
        $transportation = Transportation::create($request->all());



        return redirect()->route('admin.transportations.index');
    }


    /**
     * Show the form for editing Transportation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('transportation_edit')) {
            return abort(401);
        }
        $transportation = Transportation::findOrFail($id);

        return view('admin.transportations.edit', compact('transportation'));
    }

    /**
     * Update Transportation in storage.
     *
     * @param  \App\Http\Requests\UpdateTransportationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransportationsRequest $request, $id)
    {
        if (! Gate::allows('transportation_edit')) {
            return abort(401);
        }
        $transportation = Transportation::findOrFail($id);
        $transportation->update($request->all());



        return redirect()->route('admin.transportations.index');
    }


    /**
     * Display Transportation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('transportation_view')) {
            return abort(401);
        }
        $transportation = Transportation::findOrFail($id);

        return view('admin.transportations.show', compact('transportation'));
    }


    /**
     * Remove Transportation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('transportation_delete')) {
            return abort(401);
        }
        $transportation = Transportation::findOrFail($id);
        $transportation->delete();

        return redirect()->route('admin.transportations.index');
    }

    /**
     * Delete all selected Transportation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('transportation_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Transportation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Transportation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('transportation_delete')) {
            return abort(401);
        }
        $transportation = Transportation::onlyTrashed()->findOrFail($id);
        $transportation->restore();

        return redirect()->route('admin.transportations.index');
    }

    /**
     * Permanently delete Transportation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('transportation_delete')) {
            return abort(401);
        }
        $transportation = Transportation::onlyTrashed()->findOrFail($id);
        $transportation->forceDelete();

        return redirect()->route('admin.transportations.index');
    }
}
