<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
    <p>This is an example of a simple HTML page with one paragraph.</p>
    <?
    try {
        $pdo=new PDO( "mysql:host=127.0.0.1:3306;dbname=docker;charset=UTF8", 'docker','mypassword');

        if ($pdo) {
            echo "Connected to the database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
   ?>

    </body>
</html>