<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jsPDF-master/dist/jspdf.umd.min.js"></script>
    <title>Document</title>
</head>

<body>
    <label for="jobTitleInput">Job Title:</label>
    <input type="text" id="jobTitleInput" placeholder="Enter job title">
    <button onclick="generateFilteredJobOffer()">Generate PDF</button>
    <div id="results"></div>
    

    <script src="js/script_generation.js"></script>

</body>

</html>