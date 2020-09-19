var url = "https://www.espncricinfo.com/series/8048/game/1216493/delhi-capitals-vs-kings-xi-punjab-2nd-match-indian-premier-league-2020-21"

async function fetchscore() {
    try {
        const response = await fetch('/api.php?url=' + url);
        const data = await response.json();
        console.log(data);
        if (document.getElementById('liveipl') != null) {
            document.getElementById('liveipl').innerHTML = '<p class="has-text-centered">Fetching the Live Score 📦</p>';
            setTimeout(() => {
                document.getElementById('liveipl').innerHTML = '<div class="notification score is-link has-text-weight-bold">' + data.livescore.score + '</div>';
            }, 1000);
        }
    } catch (exception) {
        console.log('Connection issue');
        if (document.getElementById('liveipl') != null) {
            document.getElementById('liveipl').innerHTML = '<p class="has-text-centered">Fetching the Live Score 📦</p>';
            setTimeout(() => {
                document.getElementById('liveipl').innerHTML = '<p class="has-text-centered">Connection Lost</p>';
            }, 1000);
        }
    }
}
fetchscore();

// https://stackoverflow.com/questions/44282721/update-changing-json-data-on-web-site-without-refreshing
setInterval(fetchscore, 60 * 1000);
