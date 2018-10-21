@extends('layouts.theme')
@section('content')
<div class="container">
        <table id="cart" class="table table-hover table-condensed">                
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">To</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        @php
                           $total=0;
                        @endphp

                        @foreach ($chocos as $choco)
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="{{asset('img/').'/'.$choco->img_path}}" alt="..." class="img-responsive"/></div>
                                        <div class="col-sm-10">
                                        <h4 class="nomargin">{{$choco->category}}</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                            <td data-th="Price">{{$choco->price}}</td>
                                <td data-th="Quantity">
                                        <h4 class="nomargin">{{$choco->receiver}}</h4>
                                </td>
                            <td data-th="Subtotal" class="text-center">{{$choco->price}}</td>
                            @php
                                $total = $total+ $choco->price;
                            @endphp
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                        
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total 150</strong></td>
                            </tr>
                            <tr>
                                <td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total {{$total}}</strong></td>
                            <td><a href="{{route('thank_you')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                            </tr>
                        </tfoot>
                    </table>
    </div>
@endsection