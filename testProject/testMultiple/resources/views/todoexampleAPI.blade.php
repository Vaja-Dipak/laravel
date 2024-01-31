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
                <div class="col col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <div class="card-body p-4">

                            <form action="addtodo">

                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="title" id="title"
                                            class="border border-primary form-control">
                                    </div>
                                    <div class="col">
                                        <input type="submit" class="form-control btn btn-primary">
                                    </div>
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
        fetch("http://localhost:8000/todo").then((response) => response.json()).then((result) => {
            console.log(result);
            var lst = ''
            result.forEach(element => {
                // console.log(element.name)
                lst += `<li class="list-group-item border-1 w-100 d-flex ps-3 ps-0"> ${element.name} &emsp;&emsp;
                <button class="btn btn-primary btn-sm">DELETE</button>
                &emsp;
                <button onClick="deletetodo(${element.id})" class="btn btn-danger btn-sm">DELETE</button>`
                // &emsp;&emsp;

            });
            document.getElementById('todolist').innerHTML = (lst)
        })
    }

    function deletetodo(id) {
        fetch("http://localhost:8000/todo")
    }

    fetchtododata()
</script>