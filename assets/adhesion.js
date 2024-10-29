document.addEventListener('DOMContentLoaded', function() {
    //// Carouselle page Adhesion ////
    var images = document.getElementsByClassName("image-carousel");
    var texts = document.getElementsByClassName("imageplayer_text")
    var currentImageIndex = 0;
    var totalImages = images.length;
    console.log(images);
    function changeImage() {
        // Masquer l'image actuelle
        images[currentImageIndex].classList.remove('active');
        images[currentImageIndex].classList.add('hidden');
        texts[currentImageIndex].classList.remove('active');
        texts[currentImageIndex].classList.add('hidden');
        // Passer à l'image suivante
        currentImageIndex++;

        // Si on est à la dernière image, revenir à la première
        if (currentImageIndex === totalImages) {
            currentImageIndex = 0;
        }

        // Afficher la nouvelle image
        images[currentImageIndex].classList.remove('hidden');
        images[currentImageIndex].classList.add('active');
        texts[currentImageIndex].classList.remove('hidden');
        texts[currentImageIndex].classList.add('active');
}

// Changer d'image toutes les 4 secondes
    setInterval(changeImage, 4000);
});


