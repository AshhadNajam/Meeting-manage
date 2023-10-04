<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Add the Tailwind CSS CDN here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<style>
.btn {
    background-color: #b12b2c;
    --bs-btn-hover-border-color: #b12b2c;
    --bs-btn-bg-color: #b12b2c;
    color: white; /* Set text color to white or any other suitable color */
    /* Add other button styles as needed */
}

/* Set the hover color for the button */
.btn:hover {
    background-color: #b12b2cba;
    --bs-btn-hover-border-color: #b12b2cba;
    --bs-btn-bg-color: #b12b2cba;
    color: white; /* Set text color to white or any other suitable color */
    /* Add other button styles for the hover state as needed */
}

</style>
<?php
$con=mysqli_connect("localhost","root","","boardminder");
if(isset($_POST['btnint'])){
    $que="SELECT email FROM register_tb where email='".$_POST['email']."'";
    $data=mysqli_query($con,$que);
    $key=mysqli_fetch_assoc($data);
    if (isset($key['email']) && !empty($key['email'])) {
        header("Location: index.html");
        exit(); // Make sure to exit after redirection
    } 
    else {
        echo '<div class="alert alert-danger" role="alert">
        This email is not registered!! Please register this email.</div>';
    }


}

?>


<body class="h-full bg-white">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-40 w-auto img-fluid" src="images/tech20.png"
                alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your
                account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6"  method="POST">
                <div>
                    <label for="email" class="block px-1.5 text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block px-1.5 text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-blue-700 hover:text-blue-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block  w-full rounded-md border-0 px-1.5 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-lg-20">
                            
                                
                <div class="button-list text-center">
                    <button type="submit" name="btnint" class="btn px-1.5 py-1.5">Sign In</button>
                    <button type="button" onclick="window.location.href='register.php'" class="btn px-1.5 py-1.5">Register</button>
                </div>

                        
                            <!-- /# card -->
                        </div>
            </form>
        </div>
    </div>
    

</body>



</html>
