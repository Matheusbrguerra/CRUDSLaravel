<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Carbon\Carbon;
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request){
            //dd($request->q);
            $people = Person::where('nome','like','%'.$request->q.'%')
            ->orWhere('cpf','like','%'.$request->q.'%')
            ->orWhere('rg','like','%'.$request->q.'%')
            ->orWhere('logradouro','like','%'.$request->q.'%')
            ->orWhere('cidade','like','%'.$request->q.'%')
            ->orWhere('estado','like','%'.$request->q.'%')
            ->orWhere('bairro','like','%'.$request->q.'%')
            ->orWhere('numeroecompl','like','%'.$request->q.'%')
            ->orWhere('email','like','%'.$request->q.'%')
            ->paginate(10);
            //dd($people);
        }else{
            $people = Person::paginate(10);
        }     
        return view('people.index',compact('people'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people = new Person();
        $people->cpf = $request->cpf;

        $people->nome = $request->nome;
        $date = Carbon::parse($request->datanasc)->format('Y-m-d');
        $people->datanasc = $date;
        //$people->datanasc = $request->datanasc;
        $people->rg = $request->rg;
        $people->cep = $request->cep;
        $people->logradouro = $request->logradouro;
        $people->bairro = $request->bairro;
        $people->cidade = $request->cidade;
        $people->estado = $request->estado;
        $people->email = $request->email;
        $people->sexo = $request->sexo;
        $people->numeroecompl = $request->numeroecompl;
        $people->save();
        return redirect('/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);
        return view('people.edit',compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::find($id);
        return view('people.edit',compact('person'));
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
        $people= Person::find($id);
        $people->cpf = $request->cpf;
        $people->nome = $request->nome;
        $people->datanasc = $request->datanasc;
        $people->rg = $request->rg;
        $people->cep = $request->cep;
        $people->logradouro = $request->logradouro;
        $people->bairro = $request->bairro;
        $people->cidade = $request->cidade;
        $people->estado = $request->estado;
        $people->email = $request->email;
        $people->sexo = $request->sexo;
        $people->numeroecompl = $request->numeroecompl;
        $people->save();
        return redirect('/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Person::find($id)->delete();
        return redirect('/people');
    }
}
