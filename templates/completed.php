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
<div>
    <h2>Completed Tasks</h2>
    <div id="current-tasks">
        <ul>
            <?php echo \App\ViewHelpers\completedTasksHelper::displayCompletedTasks($completedTasks);?>
        </ul>
    </div>
    <a href="/"><h3>Back</h3></a>
</div>
</body>
</html>