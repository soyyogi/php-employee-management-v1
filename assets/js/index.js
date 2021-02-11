// const currentSection = ()=>{
//     const dashboard = document.getElementsByClassName('header_container_div_currentPage__dashboard');
//     const employee = document.getElementsByClassName('header_container_div_currentPage__employee');

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

