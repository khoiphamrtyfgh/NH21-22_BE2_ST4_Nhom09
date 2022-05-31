<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$data['title']}}</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        <?php $n = 1; ?>
        @foreach($cart->items as $item)
        <tr>
            <td>{{$n}}</td>

            <td data-th="Product">
                <div class="col-sm-10">
                    <h4 class="nomargin"><a href="">{{ $item['name'] }}</a></h4>
                </div>
            </td>
            <td data-th="Price">{{ number_format($item['price'],0,',','.') }} VND</td>
            <td data-th="Quantity">{{ $item['quantity'] }}</td>
            <td data-th="Thanhtien">{{ number_format($item['price']*$item['quantity'],0,',','.') }} VND</td>
        </tr>
        <?php $n++ ?>
        @endforeach

        <tfoot>
            <tr>
                <td></td>

                <td colspan="2" class="hidden-xs text-center">Total: <strong>{{number_format($cart ->total_price,0,',','.')}} VND</strong>
                </td>

            </tr>
        </tfoot>
    </table>
</body>

</html>