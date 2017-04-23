<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="/php/images/od1.ico" />

        <title>OurDrive | SignUp</title>
        <style>
<?php
include 'css.css';
?>
        </style>
    </head>
    <body>
    <center>
        <h1 data-title="Welcome To OurDrive" style="margin-bottom:0;"> <a href="#">Welcome To OurDrive</a></h1></center>
    <hr>
    <ul id="menu">
        <li><a href="/php/MHomepage.php" title="Home ">Home</a></li>
        <li><a href="/php/overview1.php" title="Overview">Overview</a></li>
        <li><a href="/php/homepage.php" title="Login Now">Login Now</a></li>
        <li><a href="/php/Signup.php" title="SignUp Now">SignUp Now</a></li>
        <li><a href="/php/ContactUs (2).php" title="Contact Us">Contact Us</a></li>
        <li><a href="/php/Aboutus.php" title="About Us">About Us</a></li>
    </ul><hr>
    <center>
        <form method="POST" action="signup1.php"> 
            <fieldset style="width:0%; align:right" align="left">
                <legend style="color:red;font-weight:bold" align="left"><font face="timesnew roman" color="#5F9EA0" size=5><u>
                        Sign Up Here</u> :</font>
                </legend>
                <table width="450" height="250" border="0" align="center" cellpadding="2" cellspacing="5" style="background-color:#463E3F;">
                    <tr><td width="180"><div align="left">First Name:</div></td>
                        <td width="177"><input type="text" size="40" name="fname" pattern="[a-zA-Z]{2,20}" title="Enter only Alphabets and size should be between 2 to 20" placeholder="First Name" autofocus></td></tr>

                    <tr><td><div align="left">Last Name:</div></td>
                        <td><input type="text" name="lname" size="40" pattern="[a-zA-Z]{2,20}" title="Enter only Alphabets and size should be between 2 to 20" placeholder="Last Name"></td></tr>

                    <tr><td><div align="left">Username:</div></td>
                        <td><input type="text" name="uname" size="40" placeholder="Username"></td></tr>

                    <tr><td><div align="left">E-mail:</div></td>
                        <td><input type="text" name="email" size="40" placeholder="Email Id"></td></tr>

                    <tr><td><div align="left">Password:</div></td>
                        <td><input name="pswd" type="password" size="40" placeholder="Password"/></td></tr>

                    <tr><td><div align="left"><font size=3>Confirm Password:</div></td>
                        <td><input name="cpswd" type="password" size="40" placeholder="Confirm Password"/></td></tr>

                    <tr><td width="116"><div align="left">Date Of Birth:</div></td>
                        <td width="177">
                            <select name="day" id="day" >
                                <option value="0" selected="1">Day</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="month" id="month" >
                                <option value="0" selected="1">Month</option>
                                <option value="1">Jan</option>
                                <option value="2">Feb</option>
                                <option value="3">Mar</option>
                                <option value="4">Apr</option>
                                <option value="5">May</option>
                                <option value="6">Jun</option>
                                <option value="7">Jul</option>
                                <option value="8">Aug</option>
                                <option value="9">Sept</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                            </select>
                            <select name="year" id="year">
                                <option value="0" selected="1">Year</option>
								<option value="2017">2017</option>
							    <option value="2016">2016</option>
								<option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                                <option value="1922">1922</option>
                                <option value="1921">1921</option>
                                <option value="1920">1920</option>
                                <option value="1919">1919</option>
                                <option value="1918">1918</option>
                                <option value="1917">1917</option>
                                <option value="1916">1916</option>
                                <option value="1915">1915</option>
                                <option value="1914">1914</option>
                                <option value="1913">1913</option>
                                <option value="1912">1912</option>
                                <option value="1911">1911</option>
                                <option value="1910">1910</option>
                                <option value="1909">1909</option>
                                <option value="1908">1908</option>
                                <option value="1907">1907</option>
                                <option value="1906">1906</option>
                                <option value="1905">1905</option>
                            </select>
                        </td></tr>
                    <tr><td><div align="left">Contact:</div></td>   	
                        <td><input type="text" name="contact" size="40" pattern="[0-9]{10}" title = "Enter 10 digit numbers !!" placeholder="Mobile No"></td></tr>
                    <tr><td><div align="left">Gender:</div></td>
                        <td><input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male</td></tr>
                    <tr><td><div align="left"></div></td>
                    <tr><td></td><td>
                    
                    <tr><td></td><td><input type="submit" name="submit" value="Submit" width="100" height="40"></td></tr>
                </table>
            </fieldset>
    </center>

</form>
</body>
</html>