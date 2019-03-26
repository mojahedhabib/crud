<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public\dist\css\bootstrap.css\bootstrap.min.css')}}">
    <title>Articles</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>content</th>
            <th>created at</th>
            <th>updated at</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->created_at}}</td>
                <td>{{$article->updated_at}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
