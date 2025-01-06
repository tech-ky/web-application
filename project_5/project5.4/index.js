// Use strings for element IDs
const heading = document.getElementById('heading');
const numberInput = document.getElementById('number');
const submit = document.getElementById('submit');
const image = document.getElementById('image');

// Prompt the user for their username
const username = window.prompt("Please enter your username:");

// Display the entered username
if (username !== null && username !== '') {
    heading.innerHTML = `Welcome, ${username}!`;
} else {
    heading.innerHTML = "Username not entered.";
}

submit.addEventListener('click', function() {
    // Get the value from the input box
    let numberValue = Number(numberInput.value); // Ensure you convert to a number

    // Clear previous image and heading message
    image.style.display = 'none'; // Hide the image initially
    heading.innerHTML = ""; // Clear previous message

    // Switch statement to handle the number
    switch (numberValue) {
        case 1:
            image.src = 'images/dice-1.svg'; // Set image source
            break;
        case 2:
            image.src = 'images/dice-2.svg';
            break;
        case 3:
            image.src = 'images/dice-3.svg';
            break;
        case 4:
            image.src = 'images/dice-4.svg';
            break;
        case 5:
            image.src = 'images/dice-5.svg';
            break;
        case 6:
            image.src = 'images/dice-6.svg';
            break;
        default:
            heading.innerHTML = "Invalid dice number"; // Corrected typo in "innerHTML"
            return; // Exit the function to avoid showing an image
    }

    // Show the image
    image.style.display = 'block'; // Show the image
});