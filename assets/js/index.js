// const currentSection = ()=>{
//     const dashboard = document.getElementsByClassName('header_container_div_currentPage__dashboard');
//     const employee = document.getElementsByClassName('header_container_div_currentPage__employee');

// const { post } = require("jquery");

//     let dashboarFocus = dashboard.focus();
//     let employeFocus = employee.focus();

//     if(dashboarFocus == true){

//         dashboard.classList.add('current');

//     }else if(employeFocus == true){

//         employee.classList.add('current');

//     };
// }

// console.log(currentSection);

const init = document.getElementById('index');

init.addEventListener('click', ()=>{
    window.location = '/php-employee-management-v1/assets/html/header.html'
})



// employee form section

// const firstName = document.querySelector('input[name=name]');
// const lastName = document.querySelector('input[name=lastName]');
// const email = document.querySelector('input[name=email]');
// const gender = document.querySelector('select[name=gender]');
// const city = document.querySelector('input[name=city]');
// const streetAddress = document.querySelector('input[name=streetAddress]');
// const state = document.querySelector('input[name=state]');
// const age = document.querySelector('input[name=age]');
// const postalCode = document.querySelector('input[name=postalCode]');
// const phoneNumber = document.querySelector('input[name=phoneNumber]');
const employeeForm = document.querySelector('#employee-form');
employeeForm.addEventListener('reset', (e) => {
    e.preventDefault();
    window.location.assign('/php-employee-management-v1');
})