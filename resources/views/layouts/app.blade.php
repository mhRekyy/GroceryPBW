<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simpang5Grocery</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>

    <!-- Modal base styling -->
    <style>
        .modal {
            display: none;
        }

        .modal.active {
            display: flex;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
@stack('scripts')
<body class="bg-white relative">

@include('components.navbar')

<main class="pt-[100px]">
    @yield('content')
</main>

@include('components.footer')

<!-- Modal base logic -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        const headerHeight = header.offsetHeight;
        document.querySelector('main').style.paddingTop = headerHeight + 'px';

        // Modal event logic
        document.querySelectorAll('[data-modal-target]').forEach(button => {
            button.addEventListener('click', () => {
                const modalId = button.getAttribute('data-modal-target');
                document.getElementById(modalId)?.classList.add('active');
            });
        });

        document.querySelectorAll('[data-modal-close]').forEach(button => {
            button.addEventListener('click', () => {
                button.closest('.modal')?.classList.remove('active');
            });
        });
    });
</script>

</body>
</html>
