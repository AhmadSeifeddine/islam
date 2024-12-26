    document.addEventListener('DOMContentLoaded', () => {
        // Select necessary DOM elements
        const islamicBtn = document.querySelector('.islamic_pers button');
        const nonIslamicBtn = document.querySelector('.not_islamic_pers button');
        const islamic_filter = document.querySelector('.islamic_filter');
        const not_islamic_filter = document.querySelector('.not_islamic_filter');
        const filtered_content = document.querySelector('.filtered_content');

        // Function to toggle visibility between Islamic and non-Islamic filters
        const toggleFilters = (showIslamic) => {
            // Update filter visibility
            islamic_filter.classList.toggle('hidden', !showIslamic);
            islamic_filter.classList.toggle('visible', showIslamic);
            not_islamic_filter.classList.toggle('hidden', showIslamic);
            not_islamic_filter.classList.toggle('visible', !showIslamic);

            // Ensure filtered content is always shown
            filtered_content.classList.remove('d-none');

            // Update button child visibility
            islamicBtn.firstElementChild.classList.toggle('d-none', !showIslamic);
            nonIslamicBtn.firstElementChild.classList.toggle('d-none', showIslamic);

            // Update button styles for clicked state
            islamicBtn.classList.toggle('category-wrapper-clicked', showIslamic);
            nonIslamicBtn.classList.toggle('category-wrapper-clicked', !showIslamic);
        };

        // Attach event listeners
        islamicBtn.addEventListener('click', () => toggleFilters(true));
        nonIslamicBtn.addEventListener('click', () => toggleFilters(false));
    });

