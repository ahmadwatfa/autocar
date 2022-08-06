<?php

namespace App\Http\Controllers;

use App\Models\admin\ShowroomsAdmin;
use App\Http\Requests\StoreShowroomsAdminRequest;
use App\Http\Requests\UpdateShowroomsAdminRequest;
use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showrooms = Showroom::get();
        return view('Admin-Dashboard.pages.showrooms.showrooms' , [
            'showrooms' => $showrooms,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShowroomsAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowroomsAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin\ShowroomsAdmin  $showroomsAdmin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $showroom = showroom::find($id);
        $showroom->status = !$showroom->status;
        $showroom->save();
        return redirect(route('showrooms.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin\ShowroomsAdmin  $showroomsAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowroomsAdmin $showroomsAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShowroomsAdminRequest  $request
     * @param  \App\Models\admin\ShowroomsAdmin  $showroomsAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowroomsAdminRequest $request, ShowroomsAdmin $showroomsAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin\ShowroomsAdmin  $showroomsAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $showroom = Showroom::findOrFail($id);
        $showroom->delete();
        return redirect()
        ->route('showrooms.index')
        ->with('delete', "تم حذف المعرض بنجاح");
    }
}
