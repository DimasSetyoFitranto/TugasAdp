// Toggle class active
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// Klik di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');
document.addEventListener('click', function(e){
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active');
    }
});

// JavaScript code for handling review submission and displaying reviews
// Sample JavaScript code to handle form submission and display reviews

// Function to handle form submission
function submitReview(event) {
    event.preventDefault(); // Prevent form from submitting
    const name = document.getElementById('nama').value;
    const review = document.getElementById('ulasan').value;
    const rating = document.getElementById('penilaian').value;

    // Clear form fields
    document.getElementById('nama').value = '';
    document.getElementById('ulasan').value = '';
    document.getElementById('penilaian').value = '5';

    // Display the submitted review
    displayReview(name, review, rating);
}

// Function to display a review
function displayReview(name, review, rating) {
    const reviewsList = document.querySelector('.reviews-list');

    // Create review element
    const reviewElement = document.createElement('div');
    reviewElement.classList.add('review');

    // Create elements for name, review, and rating
    const nameElement = document.createElement('h3');
    nameElement.textContent = name;

    const reviewContent = document.createElement('p');
    reviewContent.textContent = review;

    const ratingElement = document.createElement('div');
    ratingElement.classList.add('rating');
    ratingElement.textContent = 'Rating: ' + '★'.repeat(rating);

    // Append elements to review element
    reviewElement.appendChild(nameElement);
    reviewElement.appendChild(reviewContent);
    reviewElement.appendChild(ratingElement);

    // Append review element to reviews list
    reviewsList.appendChild(reviewElement);
}

// Add event listener to form submission
const reviewForm = document.querySelector('.review-form');
reviewForm.addEventListener('submit', submitReview);



