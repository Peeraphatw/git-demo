<?php
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,'https://jsonplaceholder.typicode.com/users');
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,FALSE); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl,CURLOPT_HTTPGET, array(
        'Content-Type : application/json',
        'Accept : application/json'
    ));
    
    $res = curl_exec($curl);
    curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./Home.css">

    <title>Document</title>
</head>

<body>
    <button class="btn btn-success" id="selectModeBtn" onclick="selectMode()">Select Mode</button>
    <table class="table table-dark table-hover table-responsive" id="table-api" value="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Street</th>
                <th>Suite</th>
                <th>Zipcode</th>
                <th>Lat</th>
                <th>Lng</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Company Name</th>
                <th>CathcPhrase</th>
                <th>Bs</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($res)) {
             foreach(json_decode($res) as $result){
                ?>
            <tr style="cursor : pointer" id="content<?=$result->id?>" onclick="appendSelect(<?=$result->id?>)">
                <td>
                    <?=$result->id?>
                </td>
                <td><?=$result->name?></td>
                <td><?=$result->username?></td>
                <td><?=$result->email?>il</td>
                <td><?=$result->address->street?></td>
                <td><?=$result->address->suite?></td>
                <td><?=$result->address->zipcode?></td>
                <td><?=$result->address->geo->lat?></td>
                <td><?=$result->address->geo->lng?></td>
                <td><?=$result->phone?></td>
                <td><?=$result->website?></td>
                <td><?=$result->company->name?> Name</td>
                <td><?=$result->company->catchPhrase?></td>
                <td><?=$result->company->bs?></td>
            </tr>
            <?php }    } ?>
        </tbody>

    </table>
    <script src="index.js"></script>
</body>

</html>