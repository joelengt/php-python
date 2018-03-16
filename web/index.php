<html>
    <head>
        My shop
    </head>
    <body>
        <h1>hello apps</h1>
        <ul>
          <?php
            #
            # GET ENDPOINT
            #
            
            // 1.- HTTP request
            $ch = curl_init('http://product-service');

            // set headers and send from php to python
            curl_setopt_array($ch, array(
                CURLOPT_HTTPHEADER  => array('Authorization: borear DSAD12DASD3456dasdasdwdcsadasdASD'),
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_VERBOSE     => 1
            ));
            
            // close
            $response = curl_exec($ch);
            curl_close($ch);

            // 2.- HTTP response
            $obj = json_decode($response);

            // sample
            $products = $obj->products;
            foreach ($products as $product) {
                # code...
                echo "<li>$product</li>";
            }

            // headers from the python backend
            echo "<a> URI RESPONSE GET from python ==> $response </a>";



            #
            # POST ENDPOINT
            #

            // fields
            $post = [
                'username' => 'user1',
                'password' => 'passuser1',
                'gender'   => 1,
            ];

            $ch = curl_init('http://product-service');

            curl_setopt_array($ch, array(
                CURLOPT_HTTPHEADER  => array('Authorization: borear DSAD12DASD3456dasdasdwdcsadasdASD'),
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_POSTFIELDS     => $post
            ));

            // execute!
            $response = curl_exec($ch);

            // close the connection, release resources used
            curl_close($ch);

            // do anything you want with your response
            echo "<p> URI RESPONSE POST => $response</p>"
          ?>
        </ul>
    </body>
</html>