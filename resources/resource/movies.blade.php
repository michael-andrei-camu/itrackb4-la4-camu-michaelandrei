<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movie List</title>
</head>
<body>

    <h1>My Movie List</h1>
    <p>Prepared by: Princesa E. Villanueva</p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featuredFilms as $film)
                <tr>
                    <td>{{ $film['title'] }}</td>
                    <td>{{ $film['genre'] }}</td>
                    <td>{{ $film['rating'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>