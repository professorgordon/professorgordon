<!DOCTYPE html>
<html>
<head>
<title>Professor John Gordon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courier">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #6888b1;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

</head>
<body class="w3-theme-l4">

<div class="w3-content" style="max-width:1400px">

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-col w3-theme-d3" style="width:50%"><h3>&nbsp;&nbsp;<a href="index.php">Professor John Gordon</a></h3></div>
        <div align="right" class="w3-col w3-theme-d3" style="width:50%">
            <h3><a href="index.php">Home</a>&nbsp;&nbsp;<a href="blog.php">Blog</a>&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.linkedin.com/in/johncalvingordon/" target="_blank"><img src="images\LinkedIn-Logo-150x150.png" height="30" width="30"></a>&nbsp;
              <a href="https://twitter.com/ProfJGordon" target="_blank"><img src="images\twitter_PNG32-150x150.png" height="30" width="30"></a>&nbsp;&nbsp;
            </h3>
          </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container w3-small">
          <a href="index.php" style="color:#0000ff;">Home</a> > Subscribe
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l1 w3-container">
          <h4>Subscribe</h4>
        </div>
      </div>
    </div>


    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          <div class="w3-row">
            <div class="w3-content">
              <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                  <h4>Subscribe to News & Updates</h4>
                </div>
                <div class="w3-container">
                  <p>From time to time I email updates and news to my subscribers. If you would like to receive this non-spam information from me fill out the form below. You can opt out of future emails easily by following the unsubscribe link that is included at the bottom of all of my update  emails.</p>
                  <div class="container">

                    <form action="system/newsubscription.php">
                    <div class="row">
                      <div align="right" class="col-25">
                        <label for="fname">First Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                      </div>
                    </div>
                    <div class="row">
                      <div align="right" class="col-25">
                        <label for="lname">Last Name</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                      </div>
                    </div>
                    <div class="row">
                      <div align="right" class="col-25">
                        <label for="email">Email</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="email" name="email" placeholder="Your email adddress..">
                      </div>
                    </div>
                    <div align="middle" class="row">
                      <br>
                      <input type="submit" value="Subscribe">
                    </div>
                    </form>

                  </div>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          <br>
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          &nbsp;
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l1 w3-container">
          &nbsp;
        </div>
      </div>
    </div>


    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container">
          <br>
        </div>
      </div>
    </div>

    <!-- Projects -->
    <!--
    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l1 w3-container">
          <h4>Current Projects</h4>
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          <div class="w3-row">
            <div class="w3-content">
              <div class="w3-card-4 w3-margin w3-white">
                <div class="w3-container">
                  <h4>Project 1</h4>
                </div>
                <div class="w3-container">
                  <p>Text text text text text text text text text text text text text text text.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
-->

    <!-- Footer  -->
    <div class="w3-row">
      <div class="w3-content w3-center w3-small">
        <p>
          &copy; 2020 <a href="contact.php" style="color:#0000ff;">John Calvin Gordon</a>. All rights reserved.<br>
          <b>Disclaimer</b>: All views, thoughts and opinions expressed herein are my own.
        </p>
        <br>
        <br>
      </div>
    </div>

<!--
    <div class="w3-row">
      <div class="w3-content">
        <ul class="w3-ul w3-border-top">
          <li class="w3-theme-l5">
          <a class="w3-button w3-xlarge w3-circle w3-theme-action"
          style="position:fixed;top:48px;right:24px;">+</a>
          <p>w3-theme-l5 (w3-theme-light)</p>
          </li>
          <li class="w3-theme-l4">
            <p>w3-theme-l4</p>
          </li>
          <li class="w3-theme-l3">
            <p>w3-theme-l3</p>
          </li>
          <li class="w3-theme-l2">
            <p>w3-theme-l2</p>
          </li>
          <li class="w3-theme-l1">
            <p>w3-theme-l1</p>
          </li>
          <li class="w3-theme">
            <p>w3-theme</p>
          </li>
          <li class="w3-theme-d1">
            <p>w3-theme-d1</p>
          </li>
          <li class="w3-theme-d2">
            <p>w3-theme-d2</p>
          </li>
          <li class="w3-theme-d3">
            <p>w3-theme-d3</p>
          </li>
          <li class="w3-theme-d4">
            <p>w3-theme-d4 (w3-theme-dark)</p>
          </li>
        </ul>
      </div>
    </div>
-->

</div>

</body>
</html>
