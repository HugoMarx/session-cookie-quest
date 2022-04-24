<?php require 'inc/head.php';
require 'inc/data/products.php';
?>


<section class="cookies container w-50">
    <h2>Items in my cart</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Qte</th>
            </tr>
        </thead>

        <?php
        if (!empty($_SESSION['cart-item'])) {
            foreach ($_SESSION['cart-item'] as $item => $content) {
               

                foreach ($content as $key => $value) {
                    $cookie = $catalog[$content['id']];
                }
                echo '<tbody>
                <tr>
                  <th scope="row">' . $cookie['name'] . '</th>
                  <td>' . $cookie['description'] . '</td>
                  <td>'.$content['qte'].'</td>
                  <td>
                  <a href="/editcart.php?item_index='.$item.'&edit_qte=del&id='.$content['id'].'"><button type="button" class="btn btn-primary">-</button></a>
                  <a href="/editcart.php?item_index='.$item.'&edit_qte=add&id='.$content['id'].'"><button type="button" class="btn btn-primary">+</button></td></a>
                </tr>
              </tbody>';
            }
        } else {
            echo '<h1> Cart empty </h1>';
        }


        ?>

    </table>
</section>
<?php require 'inc/foot.php'; ?>