
//play sound
document.addEventListener("DOMContentLoaded", function () {
    let allumerButton = document.getElementById("allumer");
    let coffeeSound = document.getElementById("coffeeSound");

    allumerButton.addEventListener("click", function () {
        // Check if the audio element is loaded
        if (coffeeSound) {
            // Play the sound
            coffeeSound.play();

        }
    });
});


