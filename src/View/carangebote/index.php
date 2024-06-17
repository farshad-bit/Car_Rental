<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Angebote</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    
</head>
<body>

    <?php include_once __DIR__ . '/header.php'; ?>

    <div class="car-container">
        <?php if (!empty($cars)): ?>
            <?php foreach ($cars as $car): ?>
                <div class="car">
                    <!-- Hier werden die Bilder für jedes Auto angezeigt -->
                    <img src="../../Public/img/<?php echo htmlspecialchars($car['make']); ?>/<?php echo htmlspecialchars($car['model']); ?>/01.png" alt="">
                    
                    <p>Marke: <?php echo htmlspecialchars($car['make']); ?></p>
                    <p>Modell: <?php echo htmlspecialchars($car['model']); ?></p>
                    <p>Jahr: <?php echo htmlspecialchars($car['year']); ?></p>
                    <p>Mietpreis: <?php echo htmlspecialchars($car['rentalPrice']); ?> €</p>
                    
                    <button class="button" onclick="rentCar(<?php echo $car['id']; ?>)">RENT</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="no-cars">Keine Autos gefunden.</p>
        <?php endif; ?>
    </div>

    <?php include_once __DIR__ . '/footer.php'; ?>

    <script>
        function rentCar(carId) {
            // Umleitung zur Registrierungsseite mit der Auto-ID als Parameter
            window.location.href = 'index.php?controller=user&action=register&car_id=' + carId;
        }
    </script>

</body>
</html>
