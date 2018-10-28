<?php 
require 'connect.php'

if(isset($_SESSION['admin'])){
    $sql = SELECT * FROM order_details;
    $result = mysqli_query($conn,$sql);
    
    foreach($result as $result) {
        extract($result);
            
            echo '<div class="order-history">
            
                <table>
                <tr>
                    <th>adress</th>
                    <th>contact_numer</th>
                    <th>transaction_code</th>
                    <th>date_created</th>
                </tr>
                
                <tr>
                    <td>$address</td>
                    <td>$number</td>
                    <td>$transaction_code</td>
                    <td>$date</td>
                </tr>
                </table>
                </div>';
    }
    
    
}























?>

<?php require 'template_products.php' ?>


























