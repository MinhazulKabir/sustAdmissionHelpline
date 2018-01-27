<?php

namespace App\Http\Controllers\Admin;

use App\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAssociationsRequest;
use App\Http\Requests\Admin\UpdateAssociationsRequest;

class AssociationsController extends Controller
{
    /**
     * Display a listing of Association.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('association_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('association_delete')) {
                return abort(401);
            }
            $associations = Association::onlyTrashed()->get();
        } else {
            $associations = Association::all();
        }

        return view('admin.associations.index', compact('associations'));
    }

    /**
     * Show the form for creating new Association.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('association_create')) {
            return abort(401);
        }
        return view('admin.associations.create');
    }

    /**
     * Store a newly created Association in storage.
     *
     * @param  \App\Http\Requests\StoreAssociationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssociationsRequest $request)
    {
        if (! Gate::allows('association_create')) {
            return abort(401);
        }
        $association = Association::create($request->all());



        return redirect()->route('admin.associations.index');
    }


    /**
     * Show the form for editing Association.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('association_edit')) {
            return abort(401);
        }
        $association = Association::findOrFail($id);

        return view('admin.associations.edit', compact('association'));
    }

    /**
     * Update Association in storage.
     *
     * @param  \App\Http\Requests\UpdateAssociationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssociationsRequest $request, $id)
    {
        if (! Gate::allows('association_edit')) {
            return abort(401);
        }
        $association = Association::findOrFail($id);
        $association->update($request->all());



        return redirect()->route('admin.associations.index');
    }


    /**
     * Display Association.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('association_view')) {
            return abort(401);
        }
        $association = Association::findOrFail($id);

        return view('admin.associations.show', compact('association'));
    }


    /**
     * Remove Association from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('association_delete')) {
            return abort(401);
        }
        $association = Association::findOrFail($id);
        $association->delete();

        return redirect()->route('admin.associations.index');
    }

    /**
     * Delete all selected Association at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('association_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Association::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Association from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('association_delete')) {
            return abort(401);
        }
        $association = Association::onlyTrashed()->findOrFail($id);
        $association->restore();

        return redirect()->route('admin.associations.index');
    }

    /**
     * Permanently delete Association from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('association_delete')) {
            return abort(401);
        }
        $association = Association::onlyTrashed()->findOrFail($id);
        $association->forceDelete();

        return redirect()->route('admin.associations.index');
    }
}
