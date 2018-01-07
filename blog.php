<?php
require_once 'vendor/autoload.php';

use App\classes\Demo;

$message = '';
if(isset($_POST['btn'])){
    $message = Demo::saveBlogInfo($_POST);
}

?>
<form method="post" action="">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Blog Title:</th>
            <td>
                <input type="text" name="blog_title"><br><br>
            </td>
        </tr>
        <tr>
            <th>Author Name:</th>
            <td>
                <input type="text" name="author_name"><br><br>
            </td>
        </tr>
        <tr>
            <th>Blog Description:</th>
            <td>
                <textarea size="150" name="blog_description"></textarea><br><br>
            </td>

        </tr>
        <tr>
            <th>Publication Status:</th>
            <td>
                <input type="radio" name="status" value="published">Published
                <input type="radio" name="status" value="unpublished">Unpublished
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" name="btn" value="submit">
            </td>
        </tr>
    </table>
</form>
