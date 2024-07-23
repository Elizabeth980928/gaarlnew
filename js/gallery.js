function filterSelection(category) {
    var buttons = document.querySelectorAll('.portfolio-menu button');
    buttons.forEach(function(button) {
        button.classList.remove('active');
    });

    event.target.classList.add('active');

    var images = document.querySelectorAll('.portfolio-gallery img');
    if (category === 'all') {
        images.forEach(function(image) {
            image.style.display = 'block';
        });
    } else {
        images.forEach(function(image) {
            if (image.alt.toLowerCase().includes(category)) {
                image.style.display = 'block';
            } else {
                image.style.display = 'none';
            }
        });
    }
}