<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/boot.php' ?>
    <title>New Entry</title>
</head>
<body>
    <?php include 'components/navbar.php' ?>
<fieldset>
            <legend class='h2'>New Book Entry </legend>
            <form action="actions/a_create.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Book Title"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><input class="form-control" type="text"  name="description" placeholder ="Book description" /></td>
                    </tr>
                    <tr>
                        <th>ISBN-13</th>
                        <td><input class="form-control" type= "text" name="ISBN" step="any"  placeholder="ISBN"  /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type="text"  name="type" placeholder ="Media type"  /></td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td><input class="form-control" type="text"  name="author_fName" placeholder ="First Name"  /></td>
                        <td><input class="form-control" type="text"  name="author_lName" placeholder ="Last Name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher</th>
                        <td><input class="form-control" type="text"  name="publisher_Name" placeholder ="Publisher Name"   /></td>
                        <td><input class="form-control" type="text"  name="publisher_Address" placeholder ="Publisher Address"   /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class="form-control" type="text"  name="publish_Date" placeholder ="YYYY-MM-DD" /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><input class="form-control" type="text"  name="status" placeholder ="0 - Reserved  1 - available" /></td>
                    </tr>
                    <tr>

                        <th>Picture</th>
                        <td><input class="form-control" type="file" name= "picture" /></td>
                    </tr>
                    <tr>
                        
                        <td><button class="btn btn-success" type= "submit">Create New Entry</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
</body>
</html>