@extends('layouts.theme')
@section('content')
<div class="container">
        <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="https://images-na.ssl-images-amazon.com/images/I/71Nyg3PR3fL._SY606_.jpg" alt="..." class="img-responsive"/></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">Product 1</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rs 70</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">RS.70</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img src="https://storage.googleapis.com/zopnow-static/images/products/320/cadbury-5star-cadbury-5-star-v-22-g-2.png" alt="..." class="img-responsive"/></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">Product 2</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rs.10</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">RS.10</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
                                </td>
                            </tr>
                        </tbody>
                        
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total 150</strong></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total Rs80</strong></td>
                                <td><a href="thank_you" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                            </tr>
                        </tfoot>
                    </table>
    </div>
@endsection