@extends('layouts.theme')
@section('content')
<link rel="stylesheet" href="{{URL::asset('css/purchasing_page.css')}}">
<div>

    <div style="display:inline-block;vertical-align:top;">
        @foreach ($chocos as $item)
        @if ($c_id==$item->id)
        <img id="chocolate_pic" src="{{asset('img/').'/'.$item->img_path}}"/>
        @php
            $price =$item->price;
            $name =$item->choco_name;
            $category = $item->category;
        @endphp
        @endif
        @endforeach
        <div>
                <div style="display:inline-block;vertical-align:top;">
                <button  class="button" id="add_to_cart"><a href="{{route('cart')}}">Add to cart</a></button>
                </div>
                
                <div style="display:inline-block;">
                    <button class="button" id="buy_now">Buy now</button>
                </div>
        </div>
    </div>

    <div  style="display:inline-block; padding:10px;">

        <div>
        <h1><u>{{$name}}</u></h1>
            
            <br><br>

            <div>
                <h3 style="display:inline-block">Category:</h3>
            <h3 style="display:inline-block; font-weight:bold">{{$category}}</h3>
                <!--<img style="display:inline-block" src="img/heart.png" width="30px" height="30px">-->
            </div>
            <br><br>

            <div>
                <h3 style="display:inline-block">Price:</h3>
            <h3 style="display:inline-block; font-weight:bold">{{$price}}</h3>
        </div>


        <div style="float:left; margin-top:20px; padding:15px">
            <input type="email" class="send_to" placeholder="Send to">
        </div>

        <!--<input type="text" class="message" placeholder="Message">-->
        <div style="float:right;">
            <textarea class="message" rows="4" cols="50" placeholder="Message"></textarea>
        </div>

    </div>
</div>


@endsection