<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>

</head>

<body>

    <p>Laporan Buku</p>

    <table class="table table-bordered mb-5" border="1">
        <thead>
            <tr class="table-danger">
                <th scope="col">Name</th>
                <th scope="col">Detail</th>
            </tr>            
        </thead>
        <tbody>
            @foreach($data ?? '' as $data)
            <tr>
                <th scope="row">{{ $data->name }}</th>
                <th scope="row">{{ $data->detail }}</th>
            </tr>            
            @endforeach
        </tbody>
    </table>

</body>

</html>