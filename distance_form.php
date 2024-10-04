<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distance Form</title>
</head>
<body>
  <h1>Enter Location Details</h1>
  <form method="post" action="<?php echo base_url('distance_controller'); ?>"> <label for="latitude">Latitude:</label>

    <input type="text" id="latitude" name="latitude" placeholder="Enter latitude" required><br><br>

    <label for="longitude">Longitude:</label>

    <input type="text" id="longitude" name="longitude" placeholder="Enter longitude" required><br><br>

    <label for="district">District:</label>

    <input type="text" id="district" name="district" placeholder="Enter district" required><br><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>
