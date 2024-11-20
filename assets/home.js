document.addEventListener('DOMContentLoaded', function() {


    ////Carouselle Video page accueil////


    var videoPlayer = document.getElementById('video-player');
    var videoSources = [
        './video/accueil/video1.mp4',
        './video/accueil/video2.mp4',
        './video/accueil/video3.mp4',
        './video/accueil/video5.mp4'
        // <source src="./video/accueil/video2.mp4" type="video/mp4"> Ajoutez autant d'URL de vidéos que nécessaire
    ];
    var currentVideoIndex = 0;

    // Écoutez l'événement de fin de la vidéo
    videoPlayer.addEventListener('ended', function() {
        // Vérifiez si nous sommes à la dernière vidéo
        if (currentVideoIndex === videoSources.length - 1) {
            // Revenez à la première vidéo
            currentVideoIndex = 0;
        } else {
            // Passez à la vidéo suivante
            currentVideoIndex++;
        }
        // Mettez à jour la source vidéo et rechargez le lecteur vidéo
        videoPlayer.src = videoSources[currentVideoIndex];
        videoPlayer.load();
        // Commencez à jouer automatiquement la nouvelle vidéo
        videoPlayer.play();
    });
});


