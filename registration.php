<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        
        html, body {
    height: 100%;
    margin: 0;
}

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #2C1A1A,  #4A1C1A,  #B56551,   #F2C0B1);
            text-align: center;
            padding: 50;
            margin: 0;
        }
form {
  max-width: 400px;
  margin: auto;
  background-color: #fff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

form table {
  width: 100%;
}

form table td {
  padding: 8px;
}

form td:first-child {
  text-align: left;
  font-weight: bold;
  color: #4A1C1A;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
  width: 100%;
  padding: 12px;
  margin-top: 4px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 15px;
}

button {
  background-color: #B56551;
  color: #fff;
  padding: 12px 30px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  transition: background 0.3s ease;
}

button:hover {
  background-color: #4A1C1A;
}

a.back-to-home {
  position: fixed;
  bottom: 10px;
  right: 10px;
  background-color: #2C1A1A;
  color: #ffffff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 14px;
}

a.back-to-home:hover {
  background-color: #bea5d0;
}

    </style>
    <script type="text/javascript">
        function validateForm(){
            var userName=document.forms["form1"]["username"].value;
            var password=document.forms["form1"]["password"].value;
            var email=document.forms["form1"]["email"].value;
            if(userName==""||email==""|| password ==""){
alert("Full Name,Email,and password fields must be filled out");
return false;
}
var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!(emailPattern.test(form1.email.value)))
{
alert("Please enter a valid email");
return false;
}


return true;

        }
        </script>
</head>

<body>
 <header style="background-color: #FFD8C2; color: #8B3A3A; text-align: left; padding: 10px; display: flex; justify-content: space-between; align-items: center; font-size: 25px; font-weight: bold; padding-right: 10px; width: 100%;">
        <img src="uokname.png" alt="University of kelaniya Logo" style="height: 80px; mix-blend-mode: multiply;">
        <div style="display: inline-block;">
            <div style="color: #4A1C1A;">Hostel Management System <br> University of Kelaniya</div>
        </div>
    </header>
    
    <form action="registration_process.php" name="form1" onsubmit="return validateForm()"  method="post">
        <h2>Student Registration</h2>
        <table>
            <tr>
                <td>User Name:</td>
                <td> <input type="text" name="username"  ></td>
    </tr>
    <tr>
                <td>Password:</td>
                <td> <input type="password" name="password"  ></td>
    </tr>
    <tr>
                <td>Student Number:</td>
                <td> <input type="text" name="studentnumber"  placeholder="XX/20XX/XXX" required></td>
    </tr>
    <tr>
                <td>Email:</td>
                <td> <input type="text" name="email" ></td>
    </tr>
    
    <tr>
                <td>Faculty:</td>
                <td> <select name="faculty">
                    <option value="science">Faculty Of Science</option>
                    <option value="social_science">Faculty Of Social Science</option>
                    <option value="commerce">Faculty Of Commerce</option>
                    <option value="huminity">Faculty Of Humanities</option>

                </select></td>
    </tr>
    <tr>
                <td>Gender:</td>
                <td> <select name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    

                </select></td>
                
    </tr>
    <tr>
  <td colspan="2" style="text-align: center;">
    <button type="submit">Register</button>
  </td>
</tr>
    
        <a href="index.php" class="back-to-home">Go back</a>
    </table>

        

    </form>
</body>

</html>
