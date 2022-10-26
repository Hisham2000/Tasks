<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{URL::asset('assets/css/Table.css')}}">
    <title>Inovices</title>
</head>
<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">
        
                                
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-actions-btns mb-5">
                                                <button onclick="window.print()"  class="btn btn-primary">Download</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Row start -->
                                {{-- <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            Hisham Anwar
                                        </a>
                                    </div>
                                    
                                </div> --}}
                                <!-- Row end -->
        
                                <!-- Row start -->
                                <div class="row gutters">
                                    
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>Invoice</div>
                                                <div>
                                                    @php
                                                        $t=time();
                                                    @endphp
                                                    {{date("Y-m-d",$t)}}
                                                </div>
                                            </div>
                                        </div>													
                                    </div>
                                </div>
                                <!-- Row end -->
        
                            </div>
        
                            <div class="invoice-body">
        
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Product ID</th>
                                                        <th>Unit Price</th>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $total = 0;
                                                    @endphp
                                                    @foreach ($Categories as $category)
                                                        <tr>
                                                            <td>
                                                                {{$category['catName']}}
                                                            </td>
                                                            <td>{{$category['id']}}</td>
                                                            <td>{{$category['price']}}</td>
                                                            <td>{{$category['numUnits']}}</td>
                                                            @php
                                                                $subTotal = $category['price'] * $category['numUnits'];
                                                            @endphp
                                                            @php
                                                                $total += $subTotal;
                                                            @endphp
                                                            <td>{{$subTotal}}</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>			
                                                        <td>
                                                            <h5 class="text-success"><strong>{{$total}}</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
        
                            </div>
        
                            <div class="invoice-footer">
                                Thank you for your Time.
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d9b8a6c327.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>