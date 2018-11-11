<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Competition database</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href=" {{ route('competitions.index') }} ">
                            Add arbiters and participants
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href=" {{ route('arbiters.index') }} ">
                            Evaluate participants
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href=" {{ route('evaluations.index') }} ">
                            Evaluations
                            </a>
                        </li>
                    </ul>
             </div>       
        </nav>


</body>
</html>