<?php include 'include_header.php' ?>
<form action="handler_add-project.php" method="post">
    <div>
        <label for="input_title">Title: </label>
        <input type="text" id="input_title" name="data_title">
    </div>
    <div>
        <label for="input_content">content:</label>
        <textarea id="input_content" rows="8" name="data_content"></textarea>
    </div>
    <div >
        <input type="submit" id="form_submit" value="Add Article">
        <input type="reset" value="Reset">
    </div>

</form>

<?php include 'include_footer.php' ?>