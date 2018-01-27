<?php

namespace App\Http\Controllers\Admin;

use App\RestaurantInfomation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRestaurantInfomationsRequest;
use App\Http\Requests\Admin\UpdateRestaurantInfomationsRequest;

class RestaurantInfomationsController extends Controller
{
    /**
     * Display a listing of RestaurantInfomation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('restaurant_infomation_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('restaurant_infomation_delete')) {
                return abort(401);
            }
            $restaurant_infomations = RestaurantInfomation::onlyTrashed()->get();
        } else {
            $restaurant_infomations = RestaurantInfomation::all();
        }

        return view('admin.restaurant_infomations.index', compact('restaurant_infomations'));
    }

    /**
     * Show the form for creating new RestaurantInfomation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('restaurant_infomation_create')) {
            return abort(401);
        }
        return view('admin.restaurant_infomations.create');
    }

    /**
     * Store a newly created RestaurantInfomation in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantInfomationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantInfomationsRequest $request)
    {
        if (! Gate::allows('restaurant_infomation_create')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::create($request->all());



        return redirect()->route('admin.restaurant_infomations.index');
    }


    /**
     * Show the form for editing RestaurantInfomation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('restaurant_infomation_edit')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::findOrFail($id);

        return view('admin.restaurant_infomations.edit', compact('restaurant_infomation'));
    }

    /**
     * Update RestaurantInfomation in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantInfomationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantInfomationsRequest $request, $id)
    {
        if (! Gate::allows('restaurant_infomation_edit')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::findOrFail($id);
        $restaurant_infomation->update($request->all());



        return redirect()->route('admin.restaurant_infomations.index');
    }


    /**
     * Display RestaurantInfomation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('restaurant_infomation_view')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::findOrFail($id);

        return view('admin.restaurant_infomations.show', compact('restaurant_infomation'));
    }


    /**
     * Remove RestaurantInfomation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('restaurant_infomation_delete')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::findOrFail($id);
        $restaurant_infomation->delete();

        return redirect()->route('admin.restaurant_infomations.index');
    }

    /**
     * Delete all selected RestaurantInfomation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('restaurant_infomation_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = RestaurantInfomation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore RestaurantInfomation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('restaurant_infomation_delete')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::onlyTrashed()->findOrFail($id);
        $restaurant_infomation->restore();

        return redirect()->route('admin.restaurant_infomations.index');
    }

    /**
     * Permanently delete RestaurantInfomation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('restaurant_infomation_delete')) {
            return abort(401);
        }
        $restaurant_infomation = RestaurantInfomation::onlyTrashed()->findOrFail($id);
        $restaurant_infomation->forceDelete();

        return redirect()->route('admin.restaurant_infomations.index');
    }
}
