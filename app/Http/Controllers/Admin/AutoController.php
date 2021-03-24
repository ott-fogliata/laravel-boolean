<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Auto;
use App\Http\Controllers\Controller;

class AutoController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('public.auto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        $data = $request->all();
        $auto = new Auto();
        $auto->fill($data);
        $auto->save();

        $newAuto = Auto::orderBy('id', 'desc')->first();

        return redirect()->route('auto.show', $newAuto);
    }

    /**
     * Display the specified resource.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        return redirect()->route('public.auto.show', $auto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        return view('auto.edit', compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Auto $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auto $auto)
    {
        $this->validateForm($request);

        $data = $request->all();

        $auto->update($data);

        return redirect()->route('auto.show', compact('auto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Auto $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        $auto->delete();

        return redirect()->route('auto.index');
    }

    protected function validateForm(Request $request) {
         $request->validate([
            'model_name' => 'required|max:255',
            'cubic_capacity' => 'required|numeric|between:1000,10000',
            'max_speed' => 'required|numeric|between:50,500'
        ]);
    }
}
