<?php
session_start();

if(!isset($_SESSION['tasks']))
{
    $_SESSION['tasks'] = array();
}

if(isset($_POST['task']) && !empty($_POST['task']))
{
    $_SESSION['tasks'][] = $_POST['task'];
}

if(isset($_POST['clear']))
{
    $_SESSION['tasks'] = array();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do List</title>

    <style>
        body{
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        input{
            padding: 8px;
            width: 200px;
        }

        button{
            padding: 8px 12px;
            margin: 5px;
        }

        ul{
            list-style-type: none;
        }
    </style>
</head>
<body>

<h2>My To-Do List</h2>

<form method="post">
    <input type="text" name="task" placeholder="Enter Task">
    <button type="submit">Add Task</button>
</form>

<h3>Tasks</h3>

<ul>
<?php
foreach($_SESSION['tasks'] as $task)
{
    echo "<li>$task</li>";
}
?>
</ul>

<form method="post">
    <button type="submit" name="clear">Clear All Tasks</button>
</form>

</body>
</html>