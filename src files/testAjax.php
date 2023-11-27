<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Search</title>
</head>
<body onload="searchNewsDefault()">

    <h1>News Search</h1>

    <!-- You can remove the input field and button for manual search -->
    <!-- <label for="searchInput">Enter search query:</label>
    <input type="text" id="searchInput">
    <button onclick="searchNews()">Search</button> -->

    <div id="results"></div>

    <script>
        function searchNewsDefault() {
            const apiKey = 'ccab0c64b2a04a2fb240828366a80f69'; // Replace with your actual News API key
            const defaultQuery = 'poker'; // Set the default search query
            const apiUrl = 'https://newsapi.org/v2/everything';
            const apiKeyParam = 'apiKey=' + apiKey;
            const queryParam = 'q=' + encodeURIComponent(defaultQuery);
            const sortBy = 'sortBy=relevancy'
            const pageSize = 'pageSize=10'
            const content ='content=poker'
            const description = 'description=poker'
            const url = `${apiUrl}?${apiKeyParam}&${sortBy}&${pageSize}&${content}&${description}&${queryParam}`;
            console.log(url);

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

</body>
</html>
