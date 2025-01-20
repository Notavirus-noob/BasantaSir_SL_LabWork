<?php
try {
    $connect = new mysqli('localhost', 'root', '', 'country');
    $sql = "SELECT * FROM countries ORDER BY id";
    $result = $connect->query($sql);
    $countries =[];
    if ($result->num_rows > 0) {
        while($record= $result->fetch_assoc()){
            array_push($countries,$record);
        }
    }
} catch (\Throwable $th) {
   die('Error: ' . $th->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country and City Dropdown</title>
</head>
<body>
    <h1>Select Country and City</h1>
    <form action="" method="post">
        <!-- Country Dropdown -->
        <label for="country_id">Country</label>
        <select name="country_id" id="country_id">
            <option value="">Select Country</option>
            <?php foreach($countries as $countrie){ ?>
                <option value="<?php echo $countrie['ID'] ?>"><?php echo $countrie['Title'] ?></option>
            <?php } ?>
           
        </select>
        <br><br>
        
        <!-- City Dropdown -->
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select City</option>
        </select>
    </form>

    <script>
         let counObj = document.getElementById('country_id');
        counObj.addEventListener('change',function() {
            let data= new FormData();
            data.append('country_id',counObj.value);
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST','connection.php',true);
            xhttp.send(data);
            xhttp.onreadystatechange = function(){
                if (this.status == 200 && this.readyState == 4) {
                    document.getElementById('city_id').innerHTML = this.responseText;
                }
            }
        });
    </script>
</body>
</html>
