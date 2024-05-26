<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagihan PDAM</title>
</head>
<body>
    <form method="GET" action="{{ route('form-actionTagihan')}}">
        @csrf
        <label for="usage">Pemakaian Air</label><br>
        <input type="number" name="usage" id="usage">
        <label for="usage">(m3)</label><br><br>
        <button type="sumbit">Hitung Tagihan</button>
    </form>
</body>
</html>