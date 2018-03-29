<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validate;
use DB;
use App\Project;
use Auth;
use Carbon\Carbon as Carbon;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[

            'file' => 'required|mimes:csv,txt'
        ]);

        if(($handle = fopen($_FILES['file']['tmp_name'],"r")) !== FALSE){
        fgetcsv($handle); // remove first row of excel file such as product name,price,code
        
            while(($data = fgetcsv($handle,1000,",")) !==FALSE){
                if(!Project::find($id)==$data[0]){
                    return "unsuccessful";
                }
                // $sdate = $data[2];
                // $edate  = $data[3];
                // $pdate = $data[4];
                $details =  DB::table('projects')->insert([

                    'id' => $data[0],
                    'name' => $data[1],
                    'description' => $data[2],
                    'start_date' => Carbon::now()->toDateString(),
                    'end_date' => Carbon::now()->todateString(),
                    'proposal_date' => Carbon::now()->todateString(),
                    'budget' => $data[6],
                    'requested_amount' => $data[7],
                    'approved_amount' => $data[8],
                    'noof_milestones' => $data[9],
                    'comp_milestones' => $data[10],
                    'updated_by' => Auth::user()->name,
                    'location' => $data[12],
                    'contractor_id' => $data[13],
                    'created_at' => \Carbon\Carbon::now()->toDateString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateString()
                 ]);
            }
        }
        return redirect('/dashboard');
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
}
