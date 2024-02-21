<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <!-- Tambahkan link CSS atau file lainnya di sini jika diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('buku.index') }}">Daftar Buku</a>
                </li>
                <li class="nav-item active">                    @foreach($bukus as $buku)

                    <a class="nav-link" href="{{ route('buku.edit', ['id' => $buku->id]) }}">Edit</a>
                    @endforeach
                </li>
                
                <li class="nav-item active">
                    <form action="{{ route('buku.destroy', ['id' => $buku->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="nav-link btn btn-link" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                    </form>
                </li>
                <!-- Tambahkan item menu lain jika diperlukan -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Tambahkan link script atau file lainnya di sini jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
