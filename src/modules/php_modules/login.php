<?php
session_start();
require("./connect.php");
if (isset($_POST['submit'])) {
    if(isset($_POST["check-admin"])){
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $query = "CALL login_admin('$email','$password');";
        $connection = new connect;
        $connection = $connection->getConnection();
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['id'] = $result->fetch_assoc()['id'];
            $_SESSION['mode'] = "admin";
            header("Location: ../../index.php");
        } else {
            // if ($email != "") {
            //     header("Location: ../template/login.php?error=1&email=$email");
            // } else {
            //     header("Location: ../template/login.php?error=1");
            // }
        }
    }else{
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        $query = "CALL login_agent('$email','$password');";
        $connection = new connect;
        $connection = $connection->getConnection();
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['id'] = $result->fetch_assoc()['id'];
            $_SESSION['mode'] = "agent";
            header("Location: ../../index.php");
        } else {
            // if ($email != "") {
            //     header("Location: ../template/login.php?error=1&email=$email");
            // } else {
            //     header("Location: ../template/login.php?error=1");
            // }
        }
    }

    

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*

Create New Lead
First Name [                ]
Last Name [                ]
Company [             ] 
Job title [              ]
Comment [                 ]
Phone Number [             ]
Email [             ]
Comment [                   ]

Create new Contact
First Name [                ]
Last Name [                ]
Phone Number [             ]
Email [             ]
Address [                  ]
Details [                ]
CaseID [  ]

Create New Account
 Agent FirstName[                ]
 Agent LastName [                ]
 Address [  ]
Account ContactRole [    ]
Status [     ]






Create new Opportunity
Desc  [  ]
Details [  ]
Stage [   ]
Contact role [  ]
OpportunityID [    ]
Agent [    ]
*/
?>