<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }

            /* Firefox */
            input[type=number] {
              -moz-appearance: textfield;
            }
            </style>
    </head>
    <body>
        <div class = "container-fluid">
            <h2 style = "text-align: center;">Registration Form</h2>
            <form action="/google.php">
            <div class="row">
                <div class="col-2">
                <label for="userid">User id:</label></div>
                <div class="col">
                <input type="text" class="form-control" id="userid" name="userid" minlength="5" maxlength="12" required ><br>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="password">Password:</label></div>
                <div class="col">
                <input type="password" class="form-control" id="password" name="password" minlength="7" maxlength="5" required ><br>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="name">Name:</label></div>
                <div class="col">
                <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z]" required><br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="address">Address:</label></div>
                <div class="col">
                <input type="text" class="form-control" id="adrs" name="adrs"><br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="country_list">Country:</label></div>
                <div class="col">
                <input type="text" class="form-control" list="country_list" id="country" name="country" required>
                <datalist id="country_list">
                    <option value="Australia">
                    <option value="Indonesia">
                    <option value="Japan">
                    <option value="South Korea">
                </datalist> <br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="zipcode">ZIP Code</label></div>
                <div class="col">
                <input type="number" class="form-control" id="zipcode" name="zipcode" required><br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="email">Email:</label></div>
                <div class="col">
                <input type="email" class="form-control" id="email" name="email" required><br>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="gender">Sex:</label></div>
                <div class="col">
                <input type="radio" id="gender1" name="gender" value="Male" required>
                <label for="gender1">Male</label></div>
                <div class="col">
                <input type="radio" id="gender2" name="gender" value="Female" required>
                <label for="gender2">Female</label> <br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="language">Language:</label></div>
                <div class="col">
                <input type="radio" id="language1" name="language" value="English" required>
                <label for="language1">English</label></div>
                <div class="col">
                <input type="radio" id="language2" name="language" value="Non English" required>
                <label for="language2">Non English</label> <br></div>
            </div>
            <div class="row">
                <div class="col-2">
                <label for="about">About:</label></div>
                <div class=col>
                <textarea id="about" name="about" rows="10" cols="50">
                </textarea> <br></div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
              </form>
        </div>
    </body>
</html>
