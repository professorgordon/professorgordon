s
<!DOCTYPE html>
<html>
<title>Professor John Gordon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\w3.css">
<link rel="stylesheet" href="css\problemtabs.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courier">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>

<body class="w3-theme-l4">

<div class="w3-content" style="max-width:1400px">

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-col w3-theme-d3" style="width:50%"><h3>&nbsp;&nbsp;<a href="index.php">Professor John Gordon</a></h3></div>
        <div align="right" class="w3-col w3-theme-d3" style="width:50%">
            <h3><a href="index.php">Home</a>&nbsp;&nbsp;<a href="articles.php">Articles</a>&nbsp;&nbsp;<a href="blog.php">Blog</a>&nbsp;&nbsp;<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="https://www.linkedin.com/in/johncalvingordon/" target="_blank"><img src="images\LinkedIn-Logo-150x150.png" height="30" width="30"></a>&nbsp;
              <a href="https://twitter.com/ProfJGordon" target="_blank"><img src="images\twitter_PNG32-150x150.png" height="30" width="30"></a>&nbsp;&nbsp;
            </h3>
          </div>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container w3-small">
          <a href="index.php" style="color:#0000ff;">Home</a> > <a href="java.php" style="color:#0000ff;">Java</a> > Beginning Java
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
          <h4>Beginning Java Practice Problems</h4>
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
          <div class="w3-row">
            <div class="w3-content">
              <div class="w3-card-4 w3-margin w3-white">
                <br>

                <div class="w3-row">
                  <div class="w3-content">
                    <div class="w3-card-4 w3-margin w3-white">
                      <div class="w3-container">
                        <p>
                          Select Topic:
                          <select>
                          </select>
                          &nbsp;&nbsp;
                          Select Problem:
                          <select>
                          </select>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="w3-content">
                  <div class="w3-card-4 w3-margin w3-white">
                  <button class="tablink" onclick="openPage('Problem', this, '#800000')" id="defaultOpen">Problem</button>
                  <button class="tablink" onclick="openPage('Solution', this, '#006600')">Solution</button>

                  <div id="Problem" class="tabcontent">
                    <h4>Problem</h4>
                    <p>
                      Print the following phrase to the console using one print statement:
                    </p>
                    <p style="color:red">
                      Hello World!
                    </p>
                  </div>

                  <div id="Solution" class="tabcontent">
                    <h3>Solution</h3>
                    <p>
                      This solution uses the print statement.  Remember that print outputs the text between the quote "" symbols to the console and after the code runs, the cursor does not move to the next line, it remains positioned immediately after the last character of the output.
<pre style="color:red">
public class Practice
{
    public static void main(String[] args)
    {
        System.out.print("Hello World!");
    }
}
</pre>
                    </p>
                  </div>
                </div>

                </div>
                <br>
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
        <div class="w3-theme-l1 w3-container">
          &nbsp;
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>

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

<script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</body>
</html>
