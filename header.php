<style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            padding: 10px;
            
        }

        body{
            background-color: #f7f7eb;
            color: #000;
            font-family: Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            margin-bottom: 100px;
            padding: 20px;
            
        }
        header{
            display: flex;
            justify-content: end;
            align-items: center;
            background-color: #766ecc;
            padding-right: 40px;
            
        }

        header div{
            padding: 15px 0;
            
        }

        footer{
            background-color: #eee;
            color: #000;
            font-size: 15px;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .form_cotainer{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 40%;
            height: 80%;
            margin: 0 auto;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
           width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
        }

        input{
            padding: 10px;
            margin: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            width: 100%;
        }

        button{
            padding: 10px;
            margin: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            background-color: #766ecc;
            color: #fff;
            cursor: pointer;
            
        }

        .btn-container{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 10px auto;
        }

        button:hover{
            background-color: #000;
            color: #fff;
        }

        textarea{
            padding: 10px;
            margin: 10px;
            border: 1px solid #000;
            border-radius: 5px;
            width: 100%;
        }

        .our-team {
        
        margin-bottom: 5px;
        background-color: #fff;
        text-align: center;
        overflow: hidden;
        position: relative;

        }

        .our-team .picture {
        display: inline-block;
        height: 70px;
        width: 70px;
        margin-bottom: 10px;
        z-index: 1;
        position: relative;
        }

        .our-team .picture::before {
        content: "";
        width: 100%;
        height: 0;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        bottom: 135%;
        right: 0;
        left: 0;
        opacity: 0.9;
        transform: scale(3);
        transition: all 0.3s linear 0s;
        }

     
        .our-team .picture::after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #1369ce;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        }

        .our-team .picture img {
        width: 100%;
        height: auto;
        border-radius: 50%;
        transform: scale(1);
        transition: all 0.9s ease 0s;
        }

        .our-team:hover .picture img {
        box-shadow: 0 0 0 14px #f7f5ec;
        transform: scale(0.7);
            }

        .our-team .title {
        display: block;
        font-size: 15px;
         color: #4e5052;
        text-transform: capitalize;
          }






    </style>
    <header>
        <div>
            <a href="index.php">Home</a>
        </div>
        <div>
            <a href="profile.php">Profile</a>
        </div>

        <?php if(empty($_SESSION['info'])):?> 

         <div>
            <a href="login.php">Log In</a>
        </div>
        <div>
            <a href="signup.php">Sign Up</a>
        </div>
        <?php else:?>
       
        <div>
            <a href="logout.php">Logout</a>
        </div>
        <?php endif;?>
    </header>