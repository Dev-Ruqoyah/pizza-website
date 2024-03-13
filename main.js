const signInbtn = document.querySelector("#sign-in-btn")
const signUpBtn = document.querySelector("#sign-up-btn")
const container = document.querySelector(".container-one")
const signInBtn2= document.querySelector("#sign-in-btn2")
const signUpBtn2= document.querySelector("#sign-up-btn2")
const signUpForm = document.querySelector('.signup-form')
const signInForm = document.querySelector('.signin-form')
const containerOne = document.querySelector('.container-one')


signUpBtn.addEventListener('click', ()=>{
    container.classList.add("sign-up-mode")

   
})
signInbtn.addEventListener('click', ()=>{
    container.classList.remove("sign-up-mode")
    


})
signUpBtn2.addEventListener('click', ()=>{
  
    container.classList.add("sign-up-mode2")
 
    container.classList.add('signUp')
  
    
   
   
})
signInBtn2.addEventListener('click', ()=>{
    container.classList.remove("sign-up-mode2")
    container.classList.remove('signUp')
  


   
})