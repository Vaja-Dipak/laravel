<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #3da2c3;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 col-xl-4">
                    <div class="card rounded-3">
                        <div class="card-body p-4">
                            <form id="todo" onsubmit="savetodo()">

                                <div class="row">
                                    <input type="text" name="title" id="title"
                                        class="w-50 border m-3 border-primary form-control">
                                    <input type="submit" class="w-25 m-3 form-control btn btn-primary" id="save"
                                        value="SAVE">
                                    <input type="button" class="w-25 m-3 form-control btn btn-primary" id="updt"
                                        value="UPDATE" hidden="true">
                                </div>

                                <ul id="todolist" class="list-group rounded-0">

                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    function fetchtododata() {
        fetch("http://localhost:8000/api/todoapi").then((response) => response.json()).then((result) => {
            console.log(result);
            var lst = ''
            result.forEach(element => {
                // console.log(element.name)
                lst += `<li class="list-group-item border-1 w-100 d-flex ps-3 ps-0"> ${element.name} &emsp;&emsp;
                <button type="button" onClick="edititem('${element.name}')" class="btn btn-primary btn-sm">EDIT</button>
                &emsp;
                <button type="button" onClick="deletetodo(${element.id})" class="btn btn-danger btn-sm">DELETE</button>`

            });
            document.getElementById('todolist').innerHTML = (lst)
        })
    }

    function edititem(name) {
        document.getElementById('title').value = name;
        document.getElementById('save').hidden = true;
        document.getElementById('updt').hidden = false;

    }

    function deletetodo(id) {
        fetch("http://localhost:8000/api/deletetodo/" + id).then((response) => response.json()).then((result) => {
            console.log(result);
        })
    }

    function savetodo() {
        event.preventDefault()

        console.log("save");
        fetch("http://localhost:8000/api/addtodo/",{
            method:"POST",
            headers: {
                    "Content-Type": "application/json",
            },
            body: JSON.stringify({
                    name: title
                })
        }).then((response)=>response.json()).then((result)=>{
            console.log(result);
        })
    }

    fetchtododata()
</script>