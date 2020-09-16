<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Greetings</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
<nav class="navbar navbar-expand-sm bg-light ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">GreetingsApp</a>
        </div>
        <div class="navbar-contenst">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="notification">
                        <span><i class="fas fa-bell">
                                <span> <i class="fas fa-caret-down"></i></span>
                            </i>
                        </span>
                        <span class="badge">3</span>
                    </a>
                </li>
                <li class="nav-item"><i class="fas fa-envelope"></i></li>
                <li class="nav-item"><a href="#"><i class="fas fa-question-circle"></i>Support</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hammer"></i>Tools
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Option1</a>
                        <a class="dropdown-item" href="#">Option2</a>
                    </div>
                </li>
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="signin">Sign in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="signup">Sign up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="side-bar full-height">
    <nav class="nav flex-column vertical-bar">
        <a class="nav-link" href="#"><i class="fas fa-list-ul"></i> List</a>
        <a class="nav-link" data-toggle="modal" data-target="#AddModal"><i class="fas fa-gem"></i> Add</a>
        <a class="nav-link" data-toggle="modal" data-target="#EditModal"><i class="fa fa-pencil"> Edit</i>
            <a class="nav-link" data-toggle="modal" data-target="#DeleteModal"><i class="fas fa-trash-alt"></i> Delete</a>
    </nav>
</div>
<div class="modal fade" role="dialog" id="AddModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add Greeting</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter Name" id="firstname">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="addRecord()">Add</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="EditModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Greeting</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter Name" id="updatefirstname">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" onclick="updateUserDetail()">Update</button>
                <input type="hidden" name="" id="hiddenUserID">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" id="DeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Delete Greeting</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Enter User Id" id="deleteid">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="dash-container">
    <h1 class="dash-container-heading">
        Basic panels Layout
    </h1>
    <div id="records_container"></div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/442c9bd4eb.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="app.js"></script>
</html>
