document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('#accordion');

    // Récupérer les destinations via REST API
    fetch('/wp-json/destinations/v1/all')
    .then(res => res.json())
    .then(data => {
        data.forEach(dest => {
            const item = document.createElement('div');
            item.classList.add('accordion__item');

            item.innerHTML = `
                <button class="accordion__button">${dest.title}</button>
                <div class="accordion__content">
                    ${dest.content}
                    <a href="${dest.link}" class="accordion__link">Voir la destination</a>
                </div>
            `;

            container.appendChild(item);
        });

        // Animation de l’accordéon
        document.querySelectorAll('.accordion__button').forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + "px";
                btn.classList.toggle('active');
            });
        });
    });
});
