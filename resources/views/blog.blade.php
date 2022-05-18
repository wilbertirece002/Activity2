<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Example</title>
</head>

<body>

    <!-- Example Code -->
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $blogs->BlogTitle }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $blogs->Subtitle }}</h6>
            <p class="card-text">{{ $blogs->Content }}</p>
            <h6 class="text-muted">{{ $blogs->created_at }}</h6>
        </div>
    </div>

    <!-- End Example Code -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
