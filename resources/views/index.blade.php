<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="todolist not-done">
                    <h1>Tasks</h1>
                    <input type="text" class="form-control add-todo" placeholder="Add task">
                    <hr>
                    <ul id="sortable" class="list-unstyled">
                        @if (!empty($tasks) && count($tasks) > 0)
                            @foreach ($tasks as $task)
                                <li>
                                    <label>
                                        <a href="{{ url('task/delete/' . $task->id) }}" class="btn btn-danger btn-sm">
                                            <span class="glyphicon glyphicon-trash"></span>    
                                        </a>
                                        {{ $task->task }}
                                    </label>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>