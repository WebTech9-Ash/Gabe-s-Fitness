function toggleColorScheme() {
    const body = document.body;
    body.classList.toggle('light-mode');
    body.classList.toggle('dark-mode');

    // Toggle logo image source
    const logo = document.getElementById('logo');
    if (body.classList.contains('dark-mode')) {
        logo.src = '../assets/blogo.png'; // Change to dark mode logo
        document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to moon
    } else {
        logo.src = '../assets/logo (2).png'; // Change back to light mode logo
        document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to sun
    }
}