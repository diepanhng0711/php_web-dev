<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Handling</title>
    <style>
        
    </style>
</head>

<body>
    <form action="<?php
                    use Info\Page;
                    echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <td><label>Title: </label></td>
                <td><input type="text" name="title"></td>
            </tr>
            <br>
            <tr>
                <td><label>Year: </label></td>
                <td><input type="text" name="year"></td>
            </tr>
            <br>
            <tr>
                <td><label>Copyright: </label></td>
                <td><input type="text" name="copyright"></td>
            </tr>
            <br>
            <tr>
                <td><label>Content: </label></td>
                <td><textarea name="content" rows="8" cols="80"></textarea></td>
            </tr>
            <br>
        </table>

        <input type="submit" name="" value="SUBMIT">
    </form>

    <br>
    <br>

    <?php
    require_once "./Page.php";
    if (isset($_POST['title']) && isset($_POST['year']) && isset($_POST['copyright']) && isset($_POST['content'])) {
        $page = new Info\Page($_POST['title'], $_POST['year'], $_POST['copyright']);
        $page->addContent($_POST['content']);

        echo $page->get();
    }
    ?>
</body>

</html>