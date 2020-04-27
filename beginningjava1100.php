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
          <a href="index.php" style="color:#0000ff;">Home</a> > <a href="java.php" style="color:#0000ff;">Java</a> > <a href="beginningjava.php" style="color:#0000ff;">Beginning Java</a> > Java Programming Practice Problems: Variables
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
          <h4>Beginning Java Practice Problems</h4>
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
                  <div class="w3-container">
                    <h4>Variables I</h4>
                    <p>
                      The problems on this page provide practice with the Java <b><i>print</i></b>, <b><i>println</i></b> and <b><i>printf</i></b> statements.
                      For each problem, I recommend that you read the problem and try to code a solution in your IDE before looking at
                      the solution. After you have coded your solution, click the problem to review a possible solution to the problem.
                    </p>
                  </div>
                </div>

                <div class="w3-row">
                  <div class="w3-content">

                    <div class="w3-card-4 w3-margin w3-white">
                        <button onclick="myFunction('Problem1')" class="w3-btn w3-block w3-theme-l4 w3-left-align">
                          <p>
                            <b>Problem 1</b>: Print the following phrase to the console using <b>one print</b> statement:
                          </p>
                          <p style="color:red">
                            Hello World!
                          </p>
                        </button>
                        <div id="Problem1" class="w3-container w3-hide">
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


                    <div class="w3-card-4 w3-margin w3-white">
                        <button onclick="myFunction('Problem2')" class="w3-btn w3-block w3-theme-l4 w3-left-align">
                          <p>
                            <b>Problem 2</b>: Print the following words to the console using <b>two println</b> statements:
                          </p>
                          <p style="color:red">
                            Hello<br>
                            World!
                          </p>
                        </button>
                        <div id="Problem2" class="w3-container w3-hide">
                          <h3>Solution</h3>
                          <p>
                            This solution uses two println statements. Remember that println outputs the text between the quote "" symbols to the console and the cursor then moves down to the next line, so in this example, after the code runs, the cursor would be on the next blank line after the word "World!" was output to the console.
<pre style="color:red">
  public class Practice
  {
      public static void main(String[] args)
      {
          System.out.println("Hello");
          System.out.println("World!");
      }
  }
</pre>
                          </p>
                        </div>
                    </div>

                    <div class="w3-card-4 w3-margin w3-white">
                        <button onclick="myFunction('Problem3')" class="w3-btn w3-block w3-theme-l4 w3-left-align">
                          <p>
                            <b>Problem 3</b>: Print the following words to the console using <b>one print</b> statement<br>
                            combined with the appropriate <b>escape sequences</b> in order to format the output like the<br>
                            example below. Also, after your code runs, the cursor should be on the next blank line<br>
                            following your output:
                          </p>
                          <p style="color:red">
                            Hello<br>
                            World!
                          </p>
                        </button>
                        <div id="Problem3" class="w3-container w3-hide">
                          <h3>Solution</h3>
                          <p>
                            This solution uses one print statement, combined with the appropriate escape squences (\n) to format the output as indicated in the problem statement. Also, after the code runs, the cursor is on the next blank line after the output based on the final escape sequence in the code.
<pre style="color:red">
  public class Practice
  {
      public static void main(String[] args)
      {
          System.out.print("Hello\nWorld!\n");
      }
  }
</pre>
                          </p>
                        </div>
                    </div>


                    <div class="w3-card-4 w3-margin w3-white">
                        <button onclick="myFunction('Problem4')" class="w3-btn w3-block w3-theme-l4 w3-left-align">
                          <p>
                            <b>Problem 4</b>: Print the following words to the console using <b>one print</b> statement<br>
                            combined with the appropriate <b>escape sequences</b> in order to format the output like the<br>
                            example below (note the tab spacing of the second line). Also, after your code runs, the<br>
                            cursor should be on the next blank line following your output:
                          </p>
                          <p style="color:red">
                            Hello<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;World!
                          </p>
                        </button>
                        <div id="Problem4" class="w3-container w3-hide">
                          <h3>Solution</h3>
                          <p>
                            This solution uses one print statement, combined with the appropriate escape squences (\n and \t) to format the output as indicated in the problem statement. Also, after the code runs, the cursor is on the next blank line after the output based on the final escape sequence in the code.
<pre style="color:red">
public class Practice
{
    public static void main(String[] args)
    {
        System.out.print("Hello\n\tWorld!\n");
    }
}
</pre>
                          </p>
                        </div>
                    </div>


                    <div class="w3-card-4 w3-margin w3-white">
                        <button onclick="myFunction('Problem5')" class="w3-btn w3-block w3-theme-l4 w3-left-align">
                          <p>
                            <b>Problem 5</b>: Print the following character pattern to the console using <b>one print</b> statement<br>
                            combined with the appropriate <b>spaces and/or escape sequences</b> in order to format the output like the<br>
                            example below. Also, after your code runs, the cursor should be on the next blank line following<br>your output:
                          </p>
                          <p style="color:red">
<pre style="color:red">
   *
  ***
 *****
*******
</pre>
                          </p>
                        </button>
                        <div id="Problem5" class="w3-container w3-hide">
                          <h3>Solution</h3>
                          <p>
                            This solution uses one print statement, combined with the appropriate spaces and escape squences (\n) to format the character pattern indicated in the problem statement. Also, after the code runs, the cursor is on the next blank line after the output based on the final escape sequence in the code.
<pre style="color:red">
public class Practice
{
    public static void main(String[] args)
    {
        System.out.print(" *\n ***\n *****\n*******\n");
    }
}
</pre>
                          </p>
                        </div>
                    </div>



                    <!-- Bottom -->
                    <br><br>
                  </div>
                </div>



<!--


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
-->
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


    <div class="w3-row">
      <div class="w3-content">
        <div class="w3-theme-l4 w3-container">
          <br>
        </div>
      </div>
    </div>


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

<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>


</body>
</html>
