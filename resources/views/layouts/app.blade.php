<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Website</title>
    @include('components.layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

<script>
    document.querySelectorAll('.about-header').forEach(button => {
        button.addEventListener('click', () => {
            const card = button.parentElement;
            card.classList.toggle('active');
        });
    });
</script>





</body>
</html>
