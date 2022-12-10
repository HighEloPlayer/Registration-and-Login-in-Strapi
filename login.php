<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['identifier'];
$password = $_POST['password'];


try{
    if(isset($_POST['identifier'])){
        $response = $client->login($identifier, $password);
        // var_dump($result->getStatusCode());
        // var_dump($result->getReasonPhrase());
        // var_dump($result->getProtocolVersion());
        $decoded_response = json_decode($response->getBody()->getContents());
        $data = $decoded_response->user;
        }
    else{
        echo "<script>window.location.href='login.php';</script>";
    }
}
catch (Exception $e) {
    echo  $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css"><link rel="stylesheet" href="public/style.css">

    <title>Login Success</title>
</head>
<body>
    <div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto" style="height:350px;width:500px;">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
												<h2>Welcome Back <?= $data->username ?></h2>
                      							<h4 class="mb-0 mt-4 text-center">Email: <?= $data->email ?></h4>
                                            	<a href="login-form.php" class="btn mt-5">Logout</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>
