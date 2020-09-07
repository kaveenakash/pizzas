<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public  function index(){

      //$pizzas = pizza::all();
        //$pizzas = Pizza::orderBy('name')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
       $pizzas = Pizza::latest()->get();
        
        return view('pizzas.index',[
            'pizzas' => $pizzas
            ]);
    }
    public function show($id){
    
        $pizza = Pizza::findorFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    
    }
    public function create(){

        return view('pizzas.create');
    }
    public function store(){
        
        $pizzas = new Pizza();
        $pizzas->name = request('name');
        $pizzas->type = request('type');
        $pizzas->base = request('base');
        $pizzas->toppings = request('toppings');
       // error_log(request('toppings'));
        $pizzas->save();
       
      //  error_log($pizzas);
        return redirect('/')->with('mssg', 'Thanks for your order');
    }
    public function destroy($id){

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        
        return redirect('/pizzas');


    }
}

