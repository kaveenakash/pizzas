@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
                
                
                {{-- @if($price > 15)
                    <p>This pizza is expensive</p>
                @elseif($price < 5)
                    <p>This pizza is cheap</p>
                @else
                    <p>This pizza is normally priced</p>
                @endif

                @unless($base == 'cheesy crust')
                    <p>You don't have cheesy crust</p>
                @endunless

                @php
                    $name = 'shaun';
                    echo ($name);    
                @endphp --}}

              {{-- @for($i = 0; $i < count($pizzas);$i++)
                    
                   <p> {{$pizzas[$i]['type']}}</p>
                    
              @endfor --}}
              
                @foreach ($pizzas as $pizza)
                    <div>
                     {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
                    </div>
                @endforeach
            </div>
        </div>
@endsection
