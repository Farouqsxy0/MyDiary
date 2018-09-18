<?php

namespace App\Http\Controllers;
use App\Diary;
use Illuminate\Http\Request;

class diariesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $diaries = diary::all();
        return view ('diaries.index', ['diaries' => $diaries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('diaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $diaryNewEntry = diary::create([
            'title' => $request ->input('title'),
            'description' => $request ->input('description'),
        ]);
        if ($diaryNewEntry){
            return redirect()->route('diaries.index');
        }

        //redirect
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function show(diary $diary)
    {
        //
        $diary = diary::find($diary->id);

        return view ('diaries.show', ['diary' => $diary]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function edit(diary $diary)
    {
        //
        $diary = diary::find($diary->id);

        return view ('diaries.edit', ['diary'=>$diary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diary $diary)
    {
        //
        $diaryUpdate = diary::find($diary->id)
        ->update([
            'title' => $request ->input('title'),
            'description' => $request ->input('description'),
        ]);
        if ($diaryUpdate){
            return redirect()->route('diaries.show',['diary'=> $diary->id]);
        }

        //redirect
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\diary  $diary
     * @return \Illuminate\Http\Response
     */
    public function destroy(diary $diary)
    {
        //
        $diaryDelete = diary::find($diary->id);
        if($diaryDelete->delete()){
            return redirect()->route('diaries.index');
        }
        return back()->withInput();
    }
}
