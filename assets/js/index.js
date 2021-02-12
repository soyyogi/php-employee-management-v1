// const { css } = require("jquery");

// const { post } = require("jquery");

//     let dashboarFocus = dashboard.focus();
//     let employeFocus = employee.focus();


// $('#jsGrid').html('Hola');

// const employee = $.ajax({
//     url: '../src/library/employeeController.php',
//     method: 'get',
//     success: function(res){
//         // console.log(res);
//         objEmployee = JSON.parse(res);
//         console.log(objEmployee);
//     }
// })

var countries = [
    { Name: "", Id: 0 },
    { Name: "United States", Id: 1 },
    { Name: "Canada", Id: 2 },
    { Name: "United Kingdom", Id: 3 }
];



function render(){
    $("#jsGrid").jsGrid({

        width: "100%",
        height: "800px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: employeesArray,

        // controller: {
        //     loadData: ()=>{
        //         console.log(clients);
        //     },
        //     // insertItem: ,
        //     // updateItem:
        //     // deleteItem:
        // },

        fields: [
            {
                name: "name",
                type: "text",
                width: 150,
                validate: "required",
                align: 'center'
            },
            {
                name: "email",
                type: "email",
                width: 200,
                validate: "required",
                align: 'center'
            },
            {
                name: "age",
                type: "number",
                width: 50,
                validate: function(value){
                    if(value > 0){
                        return true;
                    }
                },
                align: 'center'
            },
            {
                name: "streetAddress",
                type: "number",
                width: 50,
                validate: 'required',
                align: 'center'
            },
            {
                name: "city",
                type: "text",
                width: 150,
                validate: 'required',
                align: 'center'
            },
            {
                name: "state",
                type: "text",
                width: 150,
                validate: 'required',
                align: 'center'
            },
            {
                name: "postalCode",
                type: "number",
                width: 50,
                validate: 'required',
                align: 'center'
            },
            {
                name: "phoneNumber",
                type: "number",
                width: 50,
                validate: 'required',
                align: 'center'
            },
            {
                type: "control"
            }
        ]
    });
}




// employee form section


if(document.querySelector('#employee-form')){
    const employeeForm = document.querySelector('#employee-form');

    employeeForm.addEventListener('submit', e => updateEmployee(e));

    employeeForm.addEventListener('reset', (e) => {
        e.preventDefault();
        window.location.assign('/php-employee-management-v1');
    })
}


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