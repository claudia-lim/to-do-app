<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>To Do App</h1>
<main>
    <div>
        <h2>Add New Task</h2>
        <form method="post" action="/add" >
            <input type="text" name="input">
            <input type="submit">
        </form>
    </div>
<div>
    <h2>Current Tasks</h2>
    <div id="current-tasks">
        <ul>
            <?php echo \App\ViewHelpers\currentTasksHelper::displayCurrentTasks($currentTasks);?>
        </ul>
    </div>
    <a href="/completed"><h3>Completed Tasks</h3></a>

</div>
</main>
</body>
</html>
