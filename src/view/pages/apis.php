<?php
use App\View\HtmlTemplates;
echo HtmlTemplates::returnHeadSection("To jest tytuł strony");
?>
<body>
<h1>Dostępne api</h1>
<pre>Poniższe linki w kodzie html działają ale są tymczasowe</pre>
<ul>
    <a href="http://localhost:8000/api/users">
        <li>getAllUsersJson</li>
    </a>
    <a href="http://localhost:8000/api/users/delete/19/Bociek">
        <li>deleteUser</li>
    </a>
    <a href="http://localhost:8000/api/users/update/20/Bociek/xyz">
        <li>updateUser</li>
    </a>
    <a href="http://localhost:8000/api/users/insert/Kamil/Ferens">
        <li>insertNewUser</li>
    </a>
</ul>

</body>
</html>