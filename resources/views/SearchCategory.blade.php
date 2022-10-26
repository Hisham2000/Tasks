<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Categories</title>
    <style>
        body{
            background-color:#eee;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }
        .search{
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);
        }

        .search input{
            height: 60px;
            text-indent: 25px;
            border: 2px solid #d6d4d4;
        }
        .search input:focus{
            box-shadow: none;
            border: 2px solid blue;
        }

        .search .fa-search{
            position: absolute;
            top: 20px;
            left: 16px;
        }
        .search .button{
            position: absolute;
            top: 5px;
            right: 5px;
            height: 50px;
            width: 300px;
            background: blue;
        }
    </style>
</head>
    <div class="container text-center"  style="margin-top: 20px;">
        <div class="table-responsive">
            <table class="table table-bordered table-sm table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Unit Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{$category['id']}}</th>
                            <td>{{$category['catName']}}</td>
                            <td>{{$category['quantity']}}</td>
                            <td>{{$category['price']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d9b8a6c327.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>