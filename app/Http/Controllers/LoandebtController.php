<?php

namespace App\Http\Controllers;

use App\Loandebt;
use Illuminate\Http\Request;

class LoandebtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.loan_debt');
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
     * @param  \App\Loandebt  $loandebt
     * @return \Illuminate\Http\Response
     */
    public function show(Loandebt $loandebt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loandebt  $loandebt
     * @return \Illuminate\Http\Response
     */
    public function edit(Loandebt $loandebt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loandebt  $loandebt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loandebt $loandebt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loandebt  $loandebt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loandebt $loandebt)
    {
        //
    }
}
