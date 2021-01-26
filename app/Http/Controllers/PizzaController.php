<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza ;

class PizzaController extends Controller
{
    public function index(){
        
        $pizzas=Pizza::all();
        return view("layouts/pizzas",['pizzas'=>$pizzas]);
    }

    public function show($id){

        $pizza=Pizza::find($id);

        return view('layouts.pizzas_show',['pizza'=>$pizza]);
    }

    public function create(){
        return view('layouts.create');
    }
    public function store(){
         $pizza=new Pizza();
         $pizza->name=request('name');
         $pizza->type=request('type');
         $pizza->base=request('base');

         $pizza->save();
        return redirect('/')->with('msg','Thanks for your order');
    }
    public function destory($id){
        $pizza=Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizza');
    }

    public function edit($id){
        $pizza= Pizza::find($id);
        return view('layouts.edit',['pizza'=>$pizza]);
    }

    public function update(Request $req){
        $pizza=Pizza::find($req->id);
        $pizza->name=$req->name;
        $pizza->type=$req->type;
        $pizza->base=$req->base;
        $pizza->save();
        return redirect('/pizza')->with('msg','Thanks for your order Update');
    }
}
