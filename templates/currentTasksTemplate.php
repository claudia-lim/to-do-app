<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>To Do App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>To Do App</h1>
<div>
    <h2>Current Tasks</h2>
    <div id="current-tasks">
        <ul>
            <?php echo \App\ViewHelpers\currentTasksHelper::displayCurrentTasks($currentTasks);?>
        </ul>
    </div>
</div>
</body>
</html>