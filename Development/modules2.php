<!doctype html>

<html>
    <head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>SQL</title>
    </head>
    <body>

    </body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Intech IT CTF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modules
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="modules1.php">Modules 1<span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="modules2.php">Modules 2</a>
                    <a class="dropdown-item" href="modules3.php">Modules 3</a>
                    <a class="dropdown-item" href="modules4.php">Modules 4</a>
                  </div>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container" style = "padding: 10px;">
        <h3>Instructions</h3>
        <br>
        In this module we are testing your SQL skills. We will show you a snippet of database tables and you have to fill in the blanks.
        The final answer is the SQL commands you filled in.
        <br><br>
        For example, fill in the blanks:
        <br>
        If you want to get all rows and columns in a table called student what would be the full SQL command:
        <pre class="line-numbers">
        <code class="language-javascript">
            ________ FROM student;
            </code>
        </pre>
        The answer is SELECT *
        <br>
        So when submitting your answer put in: flag{SELECT *}
        <br>
        <strong>Maintain the capital letters and space between "select" and the "*" symbol!</strong>



        <h4 style="padding-top:1cm;">Question 1</h4>

        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">PhoneNumber</th>
            <th scope="col">Gender</th>
            <th scope="col">Salary</th>
          </tr>
          <tr>
            <td>1</td>
            <td>John Smith</td>
            <td>123/321 Charlotte Street BNE</td>
            <td>0123456789</td>
            <td>M</td>
            <td>4000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Nicole Grass</td>
            <td>Testing street NSW</td>
            <td>0987654321</td>
            <td>F</td>
            <td>7250</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Kate Samson</td>
            <td>Building A Room 1 Perth</td>
            <td>Null</td>
            <td>F</td>
            <td>10293</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Mike Link</td>
            <td>Western Wing 245 Melbourne</td>
            <td>0123456543</td>
            <td>M</td>
            <td>1923</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Tilly James</td>
            <td>Room 90 Block C SYD</td>
            <td>098767890</td>
            <td>F</td>
            <td>2000</td>
          </tr>
        </thead>
        <tbody>
        </table>
        
        <p><strong> What is the result of the following SQL command? (1 Marks each)</strong> <br>
        a) SELECT Name FROM table WHERE ID = 3; <br>
        b) SELECT PhoneNumber FROM table WHERE Salary < 2000; <br>
        c) SELECT COUNT(*) FROM table WHERE Gender = F; <br>
        d) SELECT SUM(Salary) FROM table GROUP BY Gender;<br>
        e) SELECT COUNT(DISTINCT PhoneNumber) FROM table;<br>
        For question d add all the returned numbers together as your final answer.<br><br>

        <strong>Fill in the missing SQL command: (2 Marks each) </strong><br><br>
        f) Get the address of the person with Gender F and salary more than 10,000<br>
        SELECT address FROM table _________ ; <br> 
        Note: put a space before and after all symbols except brackets () e.g. testing = 123 NOT testing=123, COUNT(hi) NOT COUNT(    hi   )
        <br><br>
        g) Get the name of Male person that has salary of more than 2000 <br>
        SELECT Name FROM table WHERE ______ ;
        <br><br>
        h) Get the sum of the salary column grouping on Address <br>
        SELECT Address, SUM(Salary) FROM table _________ ; 
        <br><br>
        i) Get the count of all rows with salary between 2500 and 11000. <br>
        SELECT COUNT(*) FROM table ______ ;
        <br><br>
        j) Get the name of person that their address starts with an "W". <br>
        SELECT name FROM table _______ ;
        <br><br>
        </p>


        <h4 style="padding-top:1cm;">Question 2</h4>
        <p> <strong>Fill in the missing SQL command (2 Marks each question k-m, 1 Marks each question n-p)</strong><br>
        k) Create a table name Customer with 2 columns: ID as integer and Name as string with 255 characters <br>
        CREATE TABLE Customer (_________) ; <br>
        Note for integer please use the shorten version with lowercase: int not INTEGER or INT <br><br>

        l) Insert a row into Customer table with the value 123 and "Robert Jones" <br>
        INSERT INTO Customer VALUES (________) ; <br><br>

        m) Delete a database called Customer. <br>
        _____________ ; <br>
        Note: use all caps except the word Customer. <br><br>

        Note: use all caps for each of the following questions <br>
        n) A _____ is a key that specifies that the column in a database is unique. Every database will have one and only one of this key.
        <br>
        o) A ______ is used to link two tables together. <br>

        p) An ____ JOIN is a keyword used to select records that have matching values in two tables.

        </p>



        </div>



        

</html>