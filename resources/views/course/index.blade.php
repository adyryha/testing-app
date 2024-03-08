<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        body {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        header {
            background-color: rgb(212, 133, 14);
            padding: 50px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
        }

        th {
            text-align: center;
        }

        .container {
            margin: 0 auto;
        }

        .table tbody tr {
            margin-bottom: 10px;
        }
    </style>
    <title>Course</title>
</head>

<body>
    <div class="container">
        <div class="group p-6">
            <header><h1>Course</h1></header>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>ECONOMY</td>
                        <td>EC5645</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1012</td>
                        <td>SCIENCE</td>
                        <td>SC4554</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1009</td>
                        <td>MATHEMATICS</td>
                        <td>MT4567</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="btn btn-primary" type="submit">Add Course</button>
    </div>

</body>
</html>
