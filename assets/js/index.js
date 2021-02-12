// const { css } = require("jquery");

// const { data } = require("jquery");


// $('#jsGrid').html('Hola');

var clients = [
    {
        "id": "1",
        "name": "Rack",
        "lastName": "Lei",
        "email": "jackon@network.com",
        "gender": "man",
        "city": "San Jone",
        "streetAddress": "126",
        "state": "CA",
        "age": "24",
        "postalCode": "394221",
        "phoneNumber": "7383627627"
    },
    {
        "id": "2",
        "name": "John",
        "lastName": "Doe",
        "email": "jhondoe@foo.com",
        "gender": "man",
        "city": "New York",
        "streetAddress": "89",
        "state": "WA",
        "age": "34",
        "postalCode": "09889",
        "phoneNumber": "1283645645"
    },
    {
        "id": "3",
        "name": "Leila",
        "lastName": "Mills",
        "email": "mills@leila.com",
        "gender": "woman",
        "city": "San Diego",
        "streetAddress": "55",
        "state": "CA",
        "age": "29",
        "postalCode": "098765",
        "phoneNumber": "9983632461"
    },
    {
        "id": 4,
        "name": "Richard",
        "lastName": "Desmond",
        "email": "dismond@foo.com",
        "gender": "man",
        "age": 30,
        "streetAddress": "90",
        "city": "Salt lake city",
        "state": "UT",
        "postalCode": "457320",
        "phoneNumber": "90876987654"
    },
    {
        "id": 5,
        "name": "Susan",
        "lastName": "Smith",
        "email": "susanmith@baz.com",
        "gender": "woman",
        "age": 28,
        "streetAddress": "43",
        "city": "Louisville",
        "state": "KNT",
        "postalCode": "445321",
        "phoneNumber": "224355488976"
    },
    {
        "id": 6,
        "name": "Brad",
        "lastName": "Simpson",
        "email": "brad@foo.com",
        "gender": "man",
        "age": 40,
        "streetAddress": "128",
        "city": "Atlanta",
        "state": "GEO",
        "postalCode": "394221",
        "phoneNumber": "6854634522"
    },
    {
        "id": 7,
        "name": "Neil",
        "lastName": "Walker",
        "email": "walkerneil@baz.com",
        "gender": "man",
        "age": 42,
        "streetAddress": "1",
        "city": "Nashville",
        "state": "TN",
        "postalCode": "90143",
        "phoneNumber": "45372788192"
    },
    {
        "id": 8,
        "name": "Robert",
        "lastName": "Thomson",
        "email": "jackon@network.com",
        "gender": "man",
        "age": 24,
        "streetAddress": "126",
        "city": "New Orleans",
        "state": "LU",
        "postalCode": "63281",
        "phoneNumber": "91232876454"
    }
];

var countries = [
    { Name: "", Id: 0 },
    { Name: "United States", Id: 1 },
    { Name: "Canada", Id: 2 },
    { Name: "United Kingdom", Id: 3 }
];

// const employee = $.ajax({
//     url: '../src/library/employeeController.php',
//     method: 'get',
//     success: function(res){
//         // console.log(res);
//         objEmployee = JSON.parse(res);
//         console.log(objEmployee);
//     }
// })


function render(){
    $("#jsGrid").jsGrid({

        width: "100%",
        height: "800px",

        inserting: true,
        editing: true,
        sorting: true,
        paging: true,

        data: clients,

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