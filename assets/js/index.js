

function renderTable(array){
    const jsGrid = document.getElementById('jsGrid');
    jsGrid.innerHTML = '';
    const table = document.createElement('table');

    array.forEach( employee => {
        const row = document.createElement('tr');
        for (e in employee) {
            const tableData = document.createElement('td');
            tableData.textContent = employee[e];
            tableData.setAttribute('data', e)
            row.appendChild(tableData);
        };
        const tableData = document.createElement('td');
        const editButton = document.createElement('button');
        editButton.innerHTML = '&#9820;';
        const deleteButton = document.createElement('button');
        deleteButton.innerHTML = '&#9932;';
        tableData.appendChild(editButton);
        tableData.appendChild(deleteButton);

        row.appendChild(tableData);
        table.appendChild(row);
        // EventListenner Delete and Edit
        editButton.addEventListener('click', ()=>{
            window.location.assign(`/php-employee-management-v1/src/employee.php?id=${employee['id']}`);
        })
        deleteButton.addEventListener('click', e => deleteEmployee(employee['id']));
    });

    jsGrid.appendChild(table);
}
if(document.querySelector('#jsGrid')){
    renderTable(employeesArray);

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
    const employeeForm = document.querySelector('#employee-form');

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

async function deleteEmployee(id){
    const formdata = new FormData();
    formdata.append("id", id);
    formdata.append('action', 'delete');
    const response = await axios({
        method: 'POST',
        url: '/php-employee-management-v1/src/dashboard.php',
        data: formdata
    })
    if (response.status === 200) {
        message('Successfully delete employee data!');
        console.log(response);
    }
    await window.location.assign('/php-employee-management-v1/src/dashboard.php');
}