<?php

namespace App\Http\Controllers\Admin;

use App\HotelInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreHotelInformationsRequest;
use App\Http\Requests\Admin\UpdateHotelInformationsRequest;

class HotelInformationsController extends Controller
{
    /**
     * Display a listing of HotelInformation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('hotel_information_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('hotel_information_delete')) {
                return abort(401);
            }
            $hotel_informations = HotelInformation::onlyTrashed()->get();
        } else {
            $hotel_informations = HotelInformation::all();
        }

        return view('admin.hotel_informations.index', compact('hotel_informations'));
    }

    /**
     * Show the form for creating new HotelInformation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('hotel_information_create')) {
            return abort(401);
        }
        return view('admin.hotel_informations.create');
    }

    /**
     * Store a newly created HotelInformation in storage.
     *
     * @param  \App\Http\Requests\StoreHotelInformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelInformationsRequest $request)
    {
        if (! Gate::allows('hotel_information_create')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::create($request->all());



        return redirect()->route('admin.hotel_informations.index');
    }


    /**
     * Show the form for editing HotelInformation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('hotel_information_edit')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::findOrFail($id);

        return view('admin.hotel_informations.edit', compact('hotel_information'));
    }

    /**
     * Update HotelInformation in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelInformationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelInformationsRequest $request, $id)
    {
        if (! Gate::allows('hotel_information_edit')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::findOrFail($id);
        $hotel_information->update($request->all());



        return redirect()->route('admin.hotel_informations.index');
    }


    /**
     * Display HotelInformation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('hotel_information_view')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::findOrFail($id);

        return view('admin.hotel_informations.show', compact('hotel_information'));
    }


    /**
     * Remove HotelInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('hotel_information_delete')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::findOrFail($id);
        $hotel_information->delete();

        return redirect()->route('admin.hotel_informations.index');
    }

    /**
     * Delete all selected HotelInformation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('hotel_information_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = HotelInformation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore HotelInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('hotel_information_delete')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::onlyTrashed()->findOrFail($id);
        $hotel_information->restore();

        return redirect()->route('admin.hotel_informations.index');
    }

    /**
     * Permanently delete HotelInformation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('hotel_information_delete')) {
            return abort(401);
        }
        $hotel_information = HotelInformation::onlyTrashed()->findOrFail($id);
        $hotel_information->forceDelete();

        return redirect()->route('admin.hotel_informations.index');
    }
}
