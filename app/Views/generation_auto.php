<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="<?php echo base_url('js/jsPDF-master/dist/jspdf.umd.js'); ?>"></script>

    <script src="<?php echo base_url('js/jsPDF-AutoTable-master/dist/jspdf.plugin.autotable.js'); ?>"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <title>Document</title>
</head>

<body>
    <label for="jobTitleInput">Job Title:</label>
    <input type="text" id="jobTitleInput" placeholder="Enter job title">
    <button onclick="generateFilteredJobOffer()">Generate PDF</button>

    

    <script src="<?php echo base_url('js/script_generation.js'); ?>"></script>
</body>

</html>