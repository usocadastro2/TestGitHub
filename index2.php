<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tooltip Simples</title>
    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <!-- Botão com Tooltip "bottom" -->
    <button type="button" class="btn btn-primary me-3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip abaixo!">
        Tooltip Bottom
    </button>

    <!-- Botão com Tooltip "left" -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip à esquerda!">
        Tooltip Left
    </button>

    <!-- Bundle do Bootstrap (inclui Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para ativar os tooltips -->
    <script>
        const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltips.forEach(tooltip => {
            new bootstrap.Tooltip(tooltip);
        });
    </script>
</body>
</html>
