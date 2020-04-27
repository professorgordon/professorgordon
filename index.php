<!DOCTYPE html>
<html>

<script>
function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /* Loop through a collection of all HTML elements: */
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /* Make an HTTP request using the attribute value as the file name: */
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /* Remove the attribute, and call this function once more: */
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }
      xhttp.open("GET", file, true);
      xhttp.send();
      /* Exit the function: */
      return;
    }
  }
}
</script>

<title>Professor John Gordon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courier">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-theme-l4">

<div class="w3-content" style="max-width:1400px">

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-col w3-theme-d3" style="width:50%"><h3>&nbsp;&nbsp;Professor John Gordon</h3></div>
        <div align="right" class="w3-col w3-theme-d3" style="width:50%">
            <h3><a href="articles.php">Articles</a>&nbsp;&nbsp;<a href="blog.php">Blog</a>&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.linkedin.com/in/johncalvingordon/" target="_blank"><img src="images\LinkedIn-Logo-150x150.png" height="30" width="30"></a>&nbsp;
              <a href="https://twitter.com/ProfJGordon" target="_blank"><img src="images\twitter_PNG32-150x150.png" height="30" width="30"></a>&nbsp;&nbsp;
            </h3>
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
        <div class="w3-half w3-container w3-theme-l1">
          <h4>Pedagogical & Research Interests</h4>
        </div>
        <div align="right" class="w3-half w3-container w3-theme-l1">
          <a href="subscribe.php" title="Subscribe to non-spam news & updates."><h4>Subscribe</h4></a>
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
          <div class="w3-row-padding">
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="itindustry.php"><img src="images\TopicITIndustry200x140_wLabels.png" alt="IT Industry" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="professionalskills.php"><img src="images\TopicProfessionalSkills200x140_wLabels.png" alt="Professional Skills" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="java.php"><img src="images\TopicJava200x140_wLabels.png" alt="Java" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="python.php"><img src="images\TopicPython200x140_wLabels.png" alt="Python" style="width:100%"></a>
                  </div>
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
          &nbsp;
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          <div class="w3-row-padding">
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="linux.php"><img src="images\TopicLinux200x140_wLabels.png" alt="Linux" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="git.php"><img src="images\TopicGit200x140_wLabels.png" alt="Git" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="sql.php"><img src="images\TopicSQL200x140_wLabels.png" alt="SQL" style="width:100%"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="w3-quarter w3-container">
              <div class="w3-center">
                <div class="w3-container">
                  <div class="w3-card-4" style="width:100%">
                    <a href="humans.php"><img src="images\TopicHumans200x140_wLabels.png" alt="For Humans" style="width:100%"></a>
                  </div>
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
          <br><br>
        </div>
      </div>
    </div>

    <!--
    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container">
          <br>
        </div>
      </div>
    </div>

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

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l3 w3-container">
          <br>
        </div>
      </div>
    </div>
-->

<!-- Footer  -->

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container">
        </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div align="right" class="w3-theme-l1 w3-container">
          &nbsp;<!--<a href="subscribe.php"><h4>Subscribe</h4></a>-->
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

    <div class="w3-row">
      <div class="w3-content w3-center w3-small">
          &copy; 2019-2020 <a href="contact.php" style="color:#0000ff;">John Calvin Gordon</a>. All rights reserved.<br>
          <b>Disclaimer</b>: All views, thoughts and opinions expressed herein are my own.
        <br>
        <br>
      </div>
    </div>

<!-- Theme -->
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
