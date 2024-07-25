document.addEventListener('DOMContentLoaded', (event) => {
    fetch('fetch_photos.php')
        .then(response => response.json())
        .then(photos => {
            let indicators = document.querySelector('.carousel-indicators');
            let inner = document.querySelector('.carousel-inner');
            let chunkSize = 3;
            let chunks = [];
            
            for (let i = 0; i < photos.length; i += chunkSize) {
                chunks.push(photos.slice(i, i + chunkSize));
            }

            chunks.forEach((chunk, index) => {
                let indicator = document.createElement('button');
                indicator.setAttribute('type', 'button');
                indicator.setAttribute('data-bs-target', '#carouselExampleIndicators');
                indicator.setAttribute('data-bs-slide-to', index);
                indicator.setAttribute('aria-label', `Slide ${index + 1}`);
                if (index === 0) {
                    indicator.classList.add('active');
                    indicator.setAttribute('aria-current', 'true');
                }
                indicators.appendChild(indicator);

                let item = document.createElement('div');
                item.classList.add('carousel-item');
                if (index === 0) {
                    item.classList.add('active');
                }

                let container = document.createElement('div');
                container.classList.add('container');
                let row = document.createElement('div');
                row.classList.add('row');

                chunk.forEach(url => {
                    let col = document.createElement('div');
                    col.classList.add('col-lg-4');
                    let card = document.createElement('div');
                    card.classList.add('card');
                    let img = document.createElement('img');
                    img.classList.add('card-img');
                    img.setAttribute('src', url);
                    img.setAttribute('alt', 'pizza');

                    card.appendChild(img);
                    col.appendChild(card);
                    row.appendChild(col);
                });

                container.appendChild(row);
                item.appendChild(container);
                inner.appendChild(item);
            });
        })
        .catch(error => console.error('Error fetching photos:', error));
});