<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Author</title>
</head>
<body>
    <h1>Daftar Author</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Author</th>
                <th>Biografi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $index => $author)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->bio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>