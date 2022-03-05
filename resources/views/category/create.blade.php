<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
    <form action="{{route('insert')}}" method="post" class="mt-5">
        @csrf
        <div class="row">
          <div class="col-5">
            <input type="text" name="name" class="form-control w-50" placeholder="Tên">
          </div>
          <div class="col-5">
            <input type="text" name="status" class="form-control w-50" placeholder="Số lượng">
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-5">Thêm mới</button>
        </form>
    </div>
</body>
</html>
