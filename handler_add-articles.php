<?php
    // Verifying form fields
    if(isset($_POST['data_title']) && !empty($_POST['data_title'])
    && isset($_POST['data_content']) && !empty($_POST['data_content'])){
        // cleaning and storing data in variables
        $article_title = strip_tags($_POST["data_title"]);
        $article_content = strip_tags($_POST["data_content"]);
        // insert data in database
        require_once("database_connection.php");
        $sql = 'INSERT INTO `table_articles` (`article_title`, `article_content`) VALUES (:article_title, :article_content);';
        $query =  $db->prepare($sql);
        $query->bindValue(':article_title', $article_title, PDO::PARAM_STR);
        $query->bindValue(':article_content', $article_content, PDO::PARAM_STR);
        $query -> execute();
        //redirection 
        echo '<div>Article added.</div>';
        echo '<div><a href="index.php"><button>Back</button></a></div>';

        //If the form fields are empty
    } else {
        echo "Complete all fields. ";
        echo '<div><a href="index.php"><button>Back</button></a></div>';
    }
