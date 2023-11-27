<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Justin Kaplan and Mihir Sangameswar" content="Project">
    <meta name="Bootstrap + Less" content="Homework 3"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"  crossorigin="anonymous"> 
    
    <title>Bootstrap Starter HTML</title>  

    <style>
        .news-results-container {
            max-height: 400px; /* Adjust the height as needed */
            overflow: auto;
            margin-top: 20px;
        }

        .news-results h2 {
            color: #343a40;
            margin-bottom: 5px;
        }

        .news-results p {
            color: #6c757d;
            margin-bottom: 10px;
        }

        .news-results a {
            color: #007bff;
            text-decoration: none;
            display: inline-block;
        }

        .news-results a:hover {
            text-decoration: underline;
        }

        .news-results hr {
            border-top: 1px solid #dee2e6;
            margin: 15px 0;
        }
    </style>
</head>

<body onload="searchNewsDefault()">
    <header>
        <div class="header-top" id="main-header">
            <div class="poker-header"><img src="../projectAssets/poker-logo.jpg" alt="poker logo"></div>
            <h1>Welcome to UVA ARTICLES, <?=$name?>!</h1>
            <div class="pfp"><img src="/projectAssets/pfp.jpg" alt="profile pic"></div>
        </div>
    </header>

    <!-- News Search Results -->
    <main>
        <h1 class="page-title">News Search Results</h1>
        <div class="news-results-container">
            <div id="results" class="news-results"></div>
        </div>
    </main>

    <footer class="main-footer" id="main-foot">
        <ul class="links">
            <li><img src="/projectAssets/twitter.png" alt="twitter"></li>
            <li><img src="/projectAssets/discord.png" alt="discord"></li>
            <li><img src="/projectAssets/instagram.png" alt="instagram"></li>
        </ul>
        <small>Copyright Justin Kaplan and Mihir Sangameswar 2023</small>
        <form class="d-flex" role="search" id="searchBar">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </footer>

    <script>
        function searchNewsDefault() {
            const apiKey = 'ccab0c64b2a04a2fb240828366a80f69'; // Replace with your actual News API key
            const defaultQuery = 'poker'; // Set the default search query
            const apiUrl = 'https://newsapi.org/v2/everything';
            const apiKeyParam = 'apiKey=' + apiKey;
            const queryParam = 'q=' + encodeURIComponent(defaultQuery);
            const sortBy = 'sortBy=relevancy';
            const pageSize = 'pageSize=10';
            const content ='content=poker';
            const description = 'description=poker';
            const url = `${apiUrl}?${apiKeyParam}&${sortBy}&${pageSize}&${content}&${description}&${queryParam}`;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    displayResults(data.articles);
                } else {
                    console.error('Error fetching news:', xhr.status, xhr.statusText);
                }
            };

            xhr.onerror = function () {
                console.error('Network error');
            };

            xhr.send();
        }

        function displayResults(articles) {
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = '';

            if (articles.length === 0) {
                resultsDiv.innerHTML = '<p>No results found.</p>';
                return;
            }

            articles.forEach(article => {
                const articleDiv = document.createElement('div');
                articleDiv.innerHTML = `
                    <h2>${article.title}</h2>
                    <p>${article.description}</p>
                    <a href="${article.url}" target="_blank">Read more</a>
                    <hr>
                `;
                resultsDiv.appendChild(articleDiv);
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
