<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
        $data = [
            'dSlider' => Slider::all(),
        ];
        return view('layout.slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.slider.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Upload dan simpan file foto
        $foto = $request->file('foto');
        $namaFoto = time()."_".$foto->getClientOriginalName();
        $foto->move('assets/slider', $namaFoto);

        Slider::create([
            'foto'  => $namaFoto,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'dSlider' => Slider::find($id),
        ];
        return view('layout.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $foto = $request->file('foto');
        
        if($foto != null){
            unlink('assets/slider/'.$slider->foto);
            $namaFoto = time()."_".$foto->getClientOriginalName();
            $foto->move('assets/slider', $namaFoto);
            $slider->update([
                'foto' => $namaFoto,
            ]);
        }
        $slider->update([
            'keterangan' => $request->keterangan,
        ]);
       return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        // Temukan user yang akan dihapus
        $slider = Slider::find($id);
        unlink('assets/slider/'.$slider->foto);
        $slider->delete();

        return redirect('/dashboard')->with('success', 'User has been deleted.');
    }
}
