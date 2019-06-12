<?php

namespace App\Http\Controllers;

use App\Boat;
use App\Http\Resources\Boat as BoatResource;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Html\Builder;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $builder)
    {
        // todo replace with own api url
        if ($request->ajax()) {
            // https://datatables.yajrabox.com/eloquent/add-edit-remove-column

            $boats = Boat::select(['id', 'year', 'make', 'model', 'updated_at', 'created_at']);

            return Datatables::of($boats)
                ->addColumn('action', function ($boat) {
                    return '<a href="/new-order/'.$boat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i>Create Order</a>';
                })
                ->make(true);
        }

        $html = $builder->columns([
            ['data' => 'id', 'footer' => 'Id', 'title' => 'Id'],
            ['data' => 'year', 'footer' => 'Year', 'title' => 'Year'],
            ['data' => 'make', 'footer' => 'Make', 'title' => 'Make'],
            ['data' => 'model', 'footer' => 'Model', 'title' => 'Model'],
            ['data' => 'created_at', 'footer' => 'Created At', 'title' => 'Created At'],
            ['data' => 'updated_at', 'footer' => 'Updated At', 'title' => 'Updated At'],
            ['data' => 'action', 'name' => 'action', 'orderable' => 'false', 'searchable' => 'false', 'footer' => 'Action', 'title' => 'Action']
        ]);

        return view('index', compact('html'));
    }

}
