<!doctype html>

<html>
    <head>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Problem Solving</title>
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
                    <a class="dropdown-item" href="#">Modules 1<span class="sr-only">(current)</span></a>
                    <a class="dropdown-item" href="#">Modules 2</a>
                    <a class="dropdown-item" href="#">Modules 3</a>
                  </div>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container" style = "padding: 10px;">
        <h3>Blockchain</h3>
        <br>
        In this module we are testing your Blockchain understanding. The following text file contains banking transactions.
        You are to open and read this file to process the transactions storing them in a blockchain. Each Block
        in this blockchain can hold up to 7 transactions.
        You <strong> DO NOT</strong> need to create a Block class or User class like we did in class, you may append these
        transactions to an array. Your final answer is a count of how many Blocks there are e.g. if there are 20 transactions 
        then there would be 20/7 = 3 blocks --> final answer: flag{3_blocks}
        Please put your final answer in the format flag{XXX_blocks} where XXX is replaced by the number of blocks used.
        Good luck!

        <br><br><br><br><br>
        <h3>Performance Optimisation</h3>
        In this module we are testing your understanding of performance optimisation. The following text file contains random texts.
        Your task is to open and read this file, and sort all the words in <strong>decending</strong> order. Note, you 
        are not required to implement and sorting/seraching algorithms, you may utilise the built in .sort() function.

        <br> After you have sorted all the words, the final answer will be displayed. Good luck!


        <br><br><br><br><br>
        <h3>Find the missing number</h3>
        The following text file contains numbers from 0 to 1,000,000 sorted in ascending order. Your task is to find
        the missing number(s) in this number sequence. The final answer will be the number(s) that are missing.
        E.g. if numbers 13  19  22  are missing then the final answer would be: flag{13_19_22}. Good luck!

        </div>

</html>