<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authority</title>
    <link rel="stylesheet" href="./common/crud.css">
    <?php require "../common/link.html";?>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .table-responsive {
            overflow: hidden;
        }
        .clearfix {
            transform: translateX(-10%);
            position: relative;
            left: 50%;
        }
     
        .search-box {
            display: flex;
            align-items: center;
            border: 1px solid;
            border-radius: 3px;
            padding: 2px 5px;
        }
        .search-box input {
            border: none;
            outline: none;
        }
        .search-box i {
            color: #495057;
        }
        .action_icon .view {
            color: #495057;
        }
        .action_icon .delete {
            color:red;
        }
        .action_icon .edit {
            color: blue;
        }
    </style>
</head>
<body>

<div class="container position-relative bg-white d-flex p-0">
    <?php require "../common/menu.html";?>
    <div class="container-xl" style="width:100%">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Order Details</h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                        <i class="fas fa-search"></i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Order Id</th>
                        <th>Product Id</th>
                        <th>Quantity </i></th>
                        <th>Created Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td></td> 
                        <td></td>
                        <td class = "action_icon">
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="fas fa-eye"></i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-pen"></i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                   
                       
                       
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
     
</div>   
    </div>
    <?php require "../common/footer.html";?>
    <?php require "../common/jsAdmin.html"?>
</div>
</body>
</html>
