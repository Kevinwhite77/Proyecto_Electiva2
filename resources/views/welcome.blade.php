<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arriendo de Casas</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 20px 0;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        /* Estilos para las tarjetas de las casas */
        .casa {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
            padding: 15px;
            display: flex;
            align-items: center;
        }

        .casa img {
            width: 200px;
            height: 150px;
            border-radius: 10px;
            margin-right: 20px;
        }

        .casa-details {
            flex: 1;
        }

        .casa-details h2 {
            margin: 0;
            color: #4CAF50;
        }

        .casa-details p {
            color: #555;
            margin: 5px 0;
        }

        .casa-details .precio {
            font-size: 1.2em;
            color: #333;
        }

        .btn-arrendar {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-arrendar:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Listado de Casas De Mr. White</h1>

<div class="container">
    <!-- Datos simulados de casas -->
    <div class="casa">
        <img src="data:image/jpeg;base64,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" alt="Casa Moderna en el Centro">
        <div class="casa-details">
            <h2>Casa Moderna en el Centro</h2>
            <p>Casa de 3 habitaciones, 2 baños y jardín amplio.</p>
            <p class="precio">$900,000 COP/mes</p>
            <a href="#" class="btn-arrendar">Arrendar</a>
        </div>
    </div>

    <div class="casa">
        <img src="https://pics.nuroa.com/se_vende_casa_en_frente_de_la_playa_en_conjunto_cerrado_santa_marta_7290006723551882760.jpg" alt="Casa Campestre con Vista al Mar">
        <div class="casa-details">
            <h2>Casa Campestre con Vista al Mar</h2>
            <p>Hermosa casa campestre con piscina y vista panorámica.</p>
            <p class="precio">$1,500,000 COP/mes</p>
            <a href="#" class="btn-arrendar">Arrendar</a>
        </div>
    </div>

    <div class="casa">
        <img src="https://imganuncios.mitula.net/medium/casa_en_venta_1190006716553882418.jpg" alt="Casa Familiar en el Norte">
        <div class="casa-details">
            <h2>Casa Familiar en el Norte</h2>
            <p>Casa de 4 habitaciones, ideal para familias grandes.</p>
            <p class="precio">$1,200,000 COP/mes</p>
            <a href="#" class="btn-arrendar">Arrendar</a>
        </div>
    </div>
</div>

</body>
</html>
