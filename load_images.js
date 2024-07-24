document.addEventListener('DOMContentLoaded', function () {
    fetch('fetch_images.php')
        .then(response => response.json())
        .then(data => {
            const indicators = document.getElementById('carousel-indicators');
            const inner = document.getElementById('carousel-inner');

            data.forEach((imageGroup, index) => {
                // Create indicator
                const button = document.createElement('button');
                button.type = 'button';
                button.setAttribute('data-bs-target', '#carouselExampleIndicators');
                button.setAttribute('data-bs-slide-to', index);
                button.setAttribute('aria-label', `Slide ${index + 1}`);
                if (index === 0) {
                    button.classList.add('active');
                    button.setAttribute('aria-current', 'true');
                }
                indicators.appendChild(button);

                // Create carousel item
                const item = document.createElement('div');
                item.classList.add('carousel-item');
                if (index === 0) {
                    item.classList.add('active');
                }
                const container = document.createElement('div');
                container.classList.add('container');
                const row = document.createElement('div');
                row.classList.add('row');

                imageGroup.forEach(image => {
                    const col = document.createElement('div');
                    col.classList.add('col-lg-4');
                    const card = document.createElement('div');
                    card.classList.add('card');
                    const img = document.createElement('img');
                    img.src = image.image_url;
                    img.classList.add('card-img');
                    img.alt = "carousel image";

                    card.appendChild(img);
                    col.appendChild(card);
                    row.appendChild(col);
                });

                container.appendChild(row);
                item.appendChild(container);
                inner.appendChild(item);
            });
        });
});