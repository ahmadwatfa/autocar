<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Http\Requests\StoreListsRequest;
use App\Http\Requests\UpdateListsRequest;
use Illuminate\Http\Request;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Lists::get();
        return view('Admin-Dashboard.pages.list.list_table', [
        // return view('Admin-Dashboard.lists', [
            'list' => $list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin-Dashboard.pages.list.add_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $item = Lists::create($input);

        return redirect()->route('lists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function show(Lists $lists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = Lists::findOrFail($id);
        return view('Admin-Dashboard.pages.list.edit_list' , [
            'list'=>$list,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListsRequest  $request
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = Lists::findOrFail($id);

        $list->update($request->all());

        return redirect()->route('lists.index')->with('success' , 'تم تعديل الثابت بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lists  $lists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $list = Lists::findOrFail($id);
        $list->delete();

        return redirect()
        ->route('lists.index')
        ->with('delete', "تم حذف الثابت بنجاح");
    }

    public function itemList(Request $request) {
        $data = Lists::where('list_type', $request->type)->get();
        if($request->local == 'ar') {
            foreach($data as $i) {
                $i->name = $i->name_ar;
            }
        } else {
            foreach($data as $i) {
                $i->name = $i->name_en;
            }
        }
        return response()->json($data);
    }

}
