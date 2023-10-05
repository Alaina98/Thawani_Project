<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TestCase;


class TestCaseController extends Controller
{

    protected $testcase;
    public function __construct(){
        $this->testcase = new TestCase();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->testcase->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->testcase->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        {
            $testcase = testcase::find($id);
            if(!$testcase)
            {
                return response()->json([
                    'success' => false,
                    'message' => " Not found"
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => " successfully",
                'data' => $id
            ]);

            return new  testcase($id);
        }
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
        $testcase = $this->testcase->find($id);
        $testcase->update($request->all());
        return $testcase;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testcase = $this->testcase->find($id);
        if(!$id)
        {
            return response()->json([
                'success' => false,
                'message' => "TestCase Not found"
            ]);
        }

         $id->delete();
         return response()->json([
            'success' => true,
            'message' => "TestCase deleted successfully"
        ]);
    }
}
