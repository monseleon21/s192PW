<div class="container mt-5">
    <h1 class="mb-4">Administrar Vuelos</h1>
    @vite(['resources/js/app.js'])
    <form id="flightForm" class="mb-4">
        <input type="hidden" id="editingIndex" value="-1">

        <div class="mb-3">
            <label for="flightNumber" class="form-label">Número de Vuelo:</label>
            <input type="text" class="form-control" name="flightNumber">
        </div>

        <div class="mb-3">
            <label for="origin" class="form-label">Origen:</label>
            <input type="text" class="form-control" name="origin">
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destino:</label>
            <input type="text" class="form-control" name="destination">
        </div>

        <div class="mb-3">
            <label for="departure" class="form-label">Fecha de Salida:</label>
            <input type="date" class="form-control" name="departure">
        </div>

        <div class="mb-3">
            <label for="departureTime" class="form-label">Hora de Salida:</label>
            <input type="time" class="form-control" name="departureTime">
        </div>

        <div class="mb-3">
            <label for="arrival" class="form-label">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="arrival">
        </div>

        <div class="mb-3">
            <label for="arrivalTime" class="form-label">Hora de Llegada:</label>
            <input type="time" class="form-control" name="arrivalTime">
        </div>

        <div class="mb-3">
            <label for="class" class="form-label">Clase:</label>
            <select id="class" class="form-select">
                <option value="Económica">Económica</option>
                <option value="Ejecutiva">Ejecutiva</option>
                <option value="Primera Clase">Primera Clase</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Precio:</label>
            <input type="number" class="form-control" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
