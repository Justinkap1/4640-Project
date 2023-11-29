<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Hand Database</title>  
</head>

<body>
        <!-- Nav Bar -->
        <div class="navbar">
        <a href="?command=homePage" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Home</div>
        </a>
        <a href="?command=alone" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Play Online</div>
        </a>
        <a href="?command=handhistories" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Hand History</div>
        </a>
        <a href="?command=articles" class="nav-item">
            <img src="/projectAssets/pokerchip.jpg" alt="chip">
            <div class="text-container">Articles</div>
        </a> 
    </div>

<?php
echo '<html><head><style>
    table {
        width: 100%;
    }

     td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }


    * {
        font-size: 10px;
    }

    .hand-container {
        white-space: nowrap; /* Prevent line breaks */
        display: flex;
        flex-wrap: wrap;
        gap: 10px; /* Adjust spacing between hands */
    }

    .container {
        width: 100%;
        margin-top: 40px;
    }

    .hand {
        display: inline-block;
        margin-right: 10px; /* Adjust spacing between hands */
        padding: 5px;
        background-color: #f2f2f2;
        border: 1px solid #dddddd;
        border-radius: 5px;
    }
    img {
        width: 60px;
        height: 60px;
    }

    .table-container {
        max-height: 600px; /* Set the max height as needed */
        overflow-y: auto; /* Add vertical scrollbar if needed */
        border: 1px solid #dddddd; /* Add border for clarity */
    }
</style></head><body>';

echo "<div class='container'>";
echo '<div class="table-container">';
echo '<table>';
echo '<tr><th>Hand</th></tr>';

if (isset($_SESSION['forSelectHand'])) {
    foreach ($_SESSION['forSelectHand'] as $row) {
        echo '<tr>';
        echo '<td class="hand-container">';

        $lines = explode("\n", $row['hand']);
        
        $linesWithWords = array_filter($lines, function ($line) {
            return preg_match('/\b\w+\b/', $line);
        });

        // Remove quotation marks, commas, and brackets from each line
        $linesWithoutQuotesCommasBrackets = array_map(function ($line) {
            $lineWithoutQuotes = str_replace(['"', "'"], '', $line);
            $lineWithoutCommas = str_replace(',', '', $lineWithoutQuotes);
            return str_replace(['[', ']'], '', $lineWithoutCommas);
        }, $linesWithWords);

        // Print the lines without quotes, commas, and brackets with improved formatting
        foreach ($linesWithoutQuotesCommasBrackets as $hand) {
            echo '<span class="hand">' . $hand . '</span>';
        }

        echo '</td>';
        echo '</tr>';
    }
}
echo '</table>';
echo "</div>";
echo '</body></html>';
?>

    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>