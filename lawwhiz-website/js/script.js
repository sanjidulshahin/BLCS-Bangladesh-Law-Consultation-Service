document.addEventListener("DOMContentLoaded", function() {
    const signInOption = document.getElementById("sign-in-option");
    const signUpOption = document.getElementById("sign-up-option");
    const toggleSignUp = document.getElementById("toggle-signup");
    const toggleSignIn = document.getElementById("toggle-signin");
  
    toggleSignUp.addEventListener("click", function(event) {
      event.preventDefault();
      signInOption.style.display = "none";
      signUpOption.style.display = "block";
    });
  
    toggleSignIn.addEventListener("click", function(event) {
      event.preventDefault();
      signInOption.style.display = "block";
      signUpOption.style.display = "none";
    });
  
    const signInForm = document.getElementById("signin-form");
    signInForm.addEventListener("submit", function(event) {
      event.preventDefault();
      // Implement your sign-in logic here
    });
  
    const signUpForm = document.getElementById("signup-form");
    signUpForm.addEventListener("submit", function(event) {
      event.preventDefault();
      // Implement your sign-up logic here
    });
  });
  