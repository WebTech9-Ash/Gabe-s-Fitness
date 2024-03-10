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
  let fname = document.forms["register"]["fname"].value;
  if (fname == "")
  {
      alert("First Name must be filled")
      event.preventDefault();
  } else if (!/^[a-zA-Z]+([' -][a-zA-Z]+)?$/.test(fname))
  {
      alert("Please enter a valid first name")
      event.preventDefault();
  }

  let lname = document.forms["register"]["lname"].value;
  if (lname == "")
  {
      alert("Last Name must be filled")
      event.preventDefault();
  } else if (!/^[a-zA-Z]+([ '-][a-zA-Z]+)*/.test(lname))
  {
      alert("Please enter a valid last name")
      event.preventDefault();
  }

  let email = document.forms["register"]["email"].value;
  if (email == "")
  {
      alert("Email must be filled")
      event.preventDefault();
  } else if (!/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email))
  {
      alert("Please enter a valid email address")
      event.preventDefault();
  }

  let dob = document.forms["register"]["dob"].value;
  if (dob == "")
  {
      alert("Birthday must be filled")
      event.preventDefault();
  } else if (!Date(dob))
  {
      alert("Enter a valid date")
      event.preventDefault();
  }

  let password = document.forms["Register"]["password"].value;
    if (password == "")
    {
        alert("Please enter a password")
        event.preventDefault();
    } else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(password))
    {
        alert("Please enter a valid password")
        event.preventDefault();
    }

    let spassword = document.forms["Register"]["spassword"].value;
    if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/.test(spassword))
    {
        alert("Please enter a valid password")
        event.preventDefault();
    } else if (password !== spassword)
    {
        alert("Password does not match")
        event.preventDefault();
    }
}

function closePopupun() {
    window.location.href = "../login/login_view.php";
    $(".overlay").remove();
    


}

function closePopupdeux() {
    window.location.href = "../login/register_view.php";
    $(".overlay").remove();
    
    

}


// function toggleColorScheme() 
// {
//     const body = document.body;
//         body.classList.toggle('light-mode');
//         body.classList.toggle('dark-mode');

//         // Toggle logo image source
//         const logo = document.getElementById('logo');
//         if (body.classList.contains('dark-mode')) 
//         {
//                 logo.src = '../assets/blogo.png'; // Change to dark mode logo
//                 document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to moon
//         } 
//         else 
//         {
//                 logo.src = '../assets/logo (2).png'; // Change back to light mode logo
//                 document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to sun
//         }
// }

function toggleColorScheme() 
{
    const body = document.body;
        body.classList.toggle('light-mode');
        body.classList.toggle('dark-mode');

        // Toggle logo image source
        const logo = document.getElementById('logo');
        if (!body.classList.contains('dark-mode')) 
        {
            logo.src = '../assets/blogo.png'; // Change to dark mode logo
            document.getElementById('toggle').src = '../assets/moon.png'; // Change toggle image to moon
        } 
        else 
        {
            console.log('dark')
            logo.src = '../assets/logo.png'; // Change back to light mode logo
            document.getElementById('toggle').src = '../assets/sun.png'; // Change toggle image to sun
        }
}