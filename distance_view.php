<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance View</title>
</head>
<body>
    <h1>Nearest Streetbox Location</h1>
    <?php if (!empty($result)): ?>
        <?php foreach ($result as $object): ?>
            <p>Snum: <?php echo $object->Snum; ?></p>
            <p>District: <?php echo $object->District; ?></p>
            <p>Longitude: <?php echo $object->Longitude; ?></p>
            <p>Latitude: <?php echo $object->Latitude; ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No data found.</p>
    <?php endif; ?>
</body>
</html>
