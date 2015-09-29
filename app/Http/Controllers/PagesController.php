<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Module;
use App\Assignment;


class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboard');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function module($id)
    {
        $module = Module::find($id);
        return view('pages.module', compact('module'));
    }

    public function assignment($id)
    {
        $assignment = Assignment::find($id);
        return view('pages.assignment', compact('assignment'));
    }

        /**
     * Loads modules view
     * @return \Illuminate\View\View
     */
    public function modules()
    {
        $modules = Module::all();
        return view('pages.modules', compact('modules'));
    }

    /**
     * Loads assignments view
     * @return \Illuminate\View\View
     */
    public function assignments()
    {
        $assignments = Assignment::all();
        return view('pages.assignments', compact('assignments'));
    }

    public function newAssignment()
    {
        $modules = Module::lists('name', 'id')->all();
        return view('pages.newAssignment', compact('modules'));
    }

    public function newModule()
    {
        return view('pages.newModule');
    }

    public function saveModule(Request $request)
    {
        Module::create($request->all());
        return redirect('/modules');
    }

    public function saveAssignment(Request $request)
    {
        Assignment::create($request->all());
        return redirect('/assignments');
    }
}
