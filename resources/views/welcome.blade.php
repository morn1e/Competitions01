<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Competition database</h1>
    <nav>
        <ul>
            <li>
                <a href=" {{ route('competitions.index') }} ">
                Add arbiters and participants
                </a>
            </li>
            <li>
                <a href=" {{ route('arbiters.index') }} ">
                Evaluate participants
                </a>
            </li>
            <li>
                <a href=" {{ route('evaluations.index') }} ">
                Evaluations
                </a>
            </li>
        </ul>
    </nav>


</body>
</html>