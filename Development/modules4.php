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
        <p>In this module we are testing your general knowledge of programming and problem solving. You may use any programming languages
        to help you tackle these challenges but Python would be recommended as it is what we have covered!

        <br><br>

        <h4>Banking Transactions (Blockchain)</h4>
        The following text file contains banking transactions.
        You are to open and read this file to process the transactions storing them in a blockchain. Each Block
        in this blockchain can hold up to 7 transactions.
        You <strong> DO NOT</strong> need to create a Block class or User class like we did in class, you may append these
        transactions to an array. However if you find that it helps to implementa Block class then that is a possible solution as well!
        <br>Your final answer is a count of how many Blocks there are and how many transactions are left in the last Block
        e.g. if there are 20 transactions 
        then there would be 20/7 = 3 blocks with 6 transactions in the last block  --> final answer: flag{3_blocks_6}
        Please put your final answer in the format flag{XXX_blocks_YYY} where XXX and YYY is replaced by the number of blocks used and transaction contained in last block respectively.
        Good luck!<br><br><br>

        <a href="blockchainData.txt" download>blockchainData</a> (10 Marks) <br><br>

        <br><br><br>
        <h4>Sort the text (Performance Optimisation)</h4>
        The following text file contains random texts.
        Your task is to open and read this file, and sort all the words in <strong>decending</strong> order. Note, you 
        are not required to implement and sorting/seraching algorithms, you may utilise the built in .sort() function.

        <br> After you have sorted all the words, the final answer is the <strong>first two words </strong> Good luck!<br><br>

        <a href="textSorting.txt" download>textSorting</a> (10 Marks) <br><br>



        <br><br>
        <h4>Find the missing number</h4>
        The following text file contains numbers from 0 to 100,000 sorted in ascending order. Your task is to find
        the missing number(s) in this number sequence. The final answer will be the number(s) that are missing.
        E.g. if numbers 13  19  22  are missing then the final answer would be: flag{13_19_22}. Good luck!


        <br><br><a href="missingNumber.txt" download>missingNumber</a> (10 Marks) <br><br>


        <br><br><br>
        <h4>My Server API</h4>
        In this final activity you will utilise the <strong>requests</strong> library to create a 
        <strong>GET</strong> request to the following address:
        <br>Further instructions will be provided once you have successfully crafted that request.
        
        <br> Hint: review our Online Shopping application that we did! Good luck!

        </div>

</html>

