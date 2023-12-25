document.getElementById('search-button').addEventListener('click', function() {
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    const searchResults = [];  // Replace with your search logic

    displayResults(searchResults);
});

function displayResults(results) {
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';

    if (results.length === 0) {
        resultsContainer.innerHTML = '<p>No results found.</p>';
        return;
    }

    results.forEach(result => {
        const resultElement = document.createElement('div');
        resultElement.textContent = result;
        resultsContainer.appendChild(resultElement);
    });
}
