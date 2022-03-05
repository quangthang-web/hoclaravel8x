<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        svg{
            width: 50px !important;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="text-end">
        <a href="{{route('create')}}" class="btn btn-primary">Thêm sản phẩm</a>
    </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="10%">ID</th>
                    <th scope="col" width="10%">Name</th>
                    <th scope="col" width="20%">số lượng</th>
                    <th scope="col" width="10%">Xóa</th>
                    <th scope="col" width="10%">Sửa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($data as $cat)
                        <tr>
                            <th scope="row">{{ $cat->id }}</th>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->status }}</td>
                            <td>
                                <a href="{{route('delete',$cat->id)}}" class="btn btn-primary">Xóa</a>
                            </td>
                            <td>
                                <a href="{{route('edit',$cat->id)}}" class="btn btn-primary">Sửa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
</html>
