<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pupukkimia;
class PupukkimiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pupukkimia::all();
        return view ('admin.tarif_lab.pupuk_kimia.index', compact('data'));
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
        $input = $request->all();
        Pupukkimia::create($input);
        return redirect('tarifpupukkimia')->with('action','Data berhasil di tambah');
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
        $ed = Pupukkimia::find($id);
        return view ('admin.tarif_lab.pupuk_kimia.edit',compact('ed'));
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
        $ed = Pupukkimia::findOrFail($id);
        $input = $request->all();
        
        $ed->update($input);
        return redirect('tarifpupukkimia')->with('action','Data berhasil di edit');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ed = Pupukkimia::find($id);
        $ed->delete($ed);
        return redirect('tarifpupukkimia')->with('action','Data berhasil di hapus');
    }
}