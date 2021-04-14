<!doctype html>

<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.esm.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/helpers.esm.min.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min.js" integrity="sha512-dnUg2JxjlVoXHVdSMWDYm2Y5xcIrJg1N+juOuRi0yLVkku/g26rwHwysJDAMwahaDfRpr1AxFz43ktuMPr/l1A==" crossorigin="anonymous"></script>

        


        <title>Intech 2021 CTF Event!</title>
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Intech IT CTF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modules
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Modules 1</a>
                    <a class="dropdown-item" href="#">Modules 2</a>
                    <a class="dropdown-item" href="#">Modules 3</a>
                  </div>
                </li>
              </ul>
            </div>
        </nav>


        
        <div class="container" style = "padding: 10px;">
            Welcome to Intech IT 2021 Capture the Flag! Please read the following instructions very carefully!
            <br>
            This event will run from <strong>XXXX to YYYY.</strong> During these times you may work and submit answers to this platform at any time.
            The chart below will display your score!
            <br><br>
            There are 10 number of modules to be completed. Each module will examine your IT skills, concepts and understanding 
            based on what we have covered in class! 
            <br><br>
            <strong>How to submit answers?</strong> Below the chart you need to enter your username (see legends in the chart) as well as the answers you wish to submit.
            If the answer is correct, your score will increase, if the answer is incorrect it will give you an error message.
            <br><br>
            <strong>What is the format of the answers?</strong> Answers will always be in this format <strong>"flag{XXXXX}"</strong>
            When you enter your answer into the textbox do not include the quotation marks, just include the word flag with the curly brackets and the contents inside the brackets. 
            XXXXX will be replaced by some other text in the real answer.
            <br><br><br>
            <strong>Test your understanding!</strong> Please test your understanding by entering "flag{IGotThis}" into the answer box, this will give you 5 marks!
            <div>
            <canvas id="myChart" width="4" height="1"></canvas> <!-- width and height here is ratio not actual pixel-->
            </div>
        </div>
            
    
        

       

        <div class="container" style = "padding: 30px;">
          <form method="post">
            <div class="row">
              <div class="col-sm">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                    </div>
                    <input type="text" name="username" id="username" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
              </div>
              <div class="col-sm">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Answer</span>
                    </div>
                    <input type="text" name="flag" id="flag" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
              </div>
              <div class="col-sm">

                
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
              </div>
            </div>
        </div>
        
        <?php include 'ctf.php';?>
        


       
    </body>
</html>


<!-- <script src="ctf.js"></script> -->

