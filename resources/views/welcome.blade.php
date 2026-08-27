<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Movie List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f9f9f9; }
        h1 { color: #333; }
        .student-info { color: #555; font-weight: bold; margin-bottom: 20px; }
        table { border-collapse: collapse; width: 50%; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Featured Movie List</h1>
    <p class="student-info">Submitted by: Your Name Here</p>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['genre'] }}</td>
                <td>{{ $movie['rating'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>