<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Hospedajes</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Administrar Hospedajes</h1>

        <form id="accommodationForm" class="mb-4">
            <div class="mb-3">
                <label for="hotelName" class="form-label">Nombre del Hotel:</label>
                <input type="text" class="form-control" name="hotelName">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Ubicación:</label>
                <input type="text" class="form-control" name="location">
            </div>

            <div class="mb-3">
                <label for="pricePerNight" class="form-label">Precio por Noche:</label>
                <input type="number" class="form-control" name="pricePerNight">
            </div>

            <div class="mb-3">
                <label for="rating" class="form-label">Calificación:</label>
                <input type="number" class="form-control" name="rating" min="1" max="5">
            </div>

            <button type="button" class="btn btn-primary" name="addButton">Guardar Hospedaje</button>
            <button type="button" class="btn btn-secondary" style="display: none;" name="updateButton">Guardar Cambios</button>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre del Hotel</th>
                    <th>Ubicación</th>
                    <th>Precio por Noche</th>
                    <th>Calificación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="accommodationsTable">
            </tbody>
        </table>
    </div>

</body>
</html>
