document.addEventListener('DOMContentLoaded', function () {
    // Initialize Bootstrap modal
    const collectionModal = new bootstrap.Modal(document.getElementById('collectionModal'));

    // Handle all action buttons
    document.querySelectorAll('.action-btn').forEach(button => {
        button.addEventListener('click', function () {
            const action = this.dataset.action;

            // Toggle active state
            this.classList.toggle('active');

            // Handle specific actions
            switch (action) {
                case 'collection':
                    collectionModal.show();
                    break;
            }
        });
    });

    // Handle collection save
    document.getElementById('saveCollection').addEventListener('click', function () {
        // Close modal
        collectionModal.hide();

        // Update collection button state
        document.querySelector('[data-action="collection"]').classList.add('active');
    });
});
