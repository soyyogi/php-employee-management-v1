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

const employeeForm = document.querySelector('#employee-form');

employeeForm.addEventListener('submit', e => updateEmployee(e));

employeeForm.addEventListener('reset', (e) => {
    e.preventDefault();
    window.location.assign('/php-employee-management-v1');
})

async function updateEmployee(e) {
    e.preventDefault();
    const formdata = new FormData(employeeForm);
    formdata.append("id", window.location.search.substr(-1,1));
    const response = await axios({
        url: '/php-employee-management-v1/src/employee.php',
        method: 'POST',
        data: formdata
    });

    if (response.status === 200) {
        message('Successfully updated employee data!');
    }
}

function message (msg) {
    const message = document.createElement('p');
        message.textContent = msg;
        message.classList.add('updateMessage');
        document.body.appendChild(message);
        setTimeout(() => {
            document.body.removeChild(message);
        }, 3000)
}