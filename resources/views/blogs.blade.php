<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
</head>

<body>
    @foreach ($blogs as $blog)
        <div class="card " style="width: 18rem; display: inline-flex">
            <div class="card">
                <h5 class="card-title">{{ $blog->BlogTitle }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $blog->Subtitle }}</h6>
                <p class="card-text">{{ $blog->Content }}</p>
                <h6 class="text-muted">{{ $blog->created_at }}</h6>
            </div>
        </div>
    @endforeach
</body>

</html>
