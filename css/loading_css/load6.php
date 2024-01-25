<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title>Pie Chart</title>

<style>
   
   .pie-chart {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  position: relative;
}

.slice {
  width: 100%;
  height: 100%;
  position: absolute;
  clip: rect(0, 100px, 200px, 0); /* Isso vai variar para cada fatia */
  transform: rotate(0deg);
  transform-origin: center;
}

.slice:nth-child(1) {
  background-color: #ff6347;
  transform: rotate(0deg);
}

.slice:nth-child(2) {
  background-color: #ffd700;
  transform: rotate(108deg);
}

.slice:nth-child(3) {
  background-color: #36b55c;
  transform: rotate(288deg);
}

</style>
</head>
<body>

<div class="pie-chart">
  <div class="slice" data-value="30"></div>
  <div class="slice" data-value="20"></div>
  <div class="slice" data-value="50"></div>
</div>


</body>
</html>
