const menu = document.querySelector('.navbar_toggle');
const menuLinks = document.querySelector('.navigation_bar');
const navLogo = document.querySelector('.logo');

// Display Mobile Menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);

function validateForm()
{
  let email = document.forms["login"]["email"].value;
  if (email == "")
  {
      alert("Email must be filled")
      event.preventDefault();
  } else if (!/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email))
  {
      alert("Please enter a valid email address")
      event.preventDefault();
  }

  let password = document.forms["login"]["password"].value;
    if (password == "")
    {
        alert("Please enter a password")
        event.preventDefault();
    } else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(password))
    {
        alert("Please enter a valid password")
        event.preventDefault();
    }
}
