let prevY = window.scrollY;
let navbar = document.getElementById('navbar');

//Navbar appearance fluctuates based on users scroll position
function navScroll(){

    //Finds the window's current scroll
    let y = window.scrollY;
	console.log('Test');

    //Sees if the user has scrolled up to display navbar
    if(y < prevY){

        if(y > 150){

            navbar.classList.add('navbar-background');
        }
        else {

            navbar.classList.remove('navbar-background');
        }
        navbar.style.display = 'unset';
    }

    //Sees if user's scroll is greater than 300px to display transparent navbar 

    else if(y > 150) {

        navbar.style.display = 'none';
        navbar.classList.remove('navbar-background');
    }

    else {

        navbar.style.display = 'unset';
    }

    prevY = window.scrollY;
}

window.addEventListener('scroll', navScroll);