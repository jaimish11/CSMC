<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Milestone;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('pages.admindashboard',compact('projects'));
    }
    public function viewMilestones(Milestone $milestones){

        //$milestones = Project::first()->milestones;
        //return $milestones;
        //$milestones = Milestone::find($id);
        $milestones = Milestone::all();
        return view('pages.adminmil',compact('milestones'));
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
        $mile = Milestone::find($id);
        return view('pages.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $mile = Milestone::find($id);
        $mile->name = $request->get('name');
        $mile->description = $request->get('description');
        $mile->start_date = $request->get('start_date');
        $mile->end_date = $request->get('end_date');
        $mile->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        Milestone::find($id)->delete();
        //$project->delete();
        return redirect('/dashboard')->with('success','Information has been  deleted');
    }
}
