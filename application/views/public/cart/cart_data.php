<?php if ($cart_data['items']): ?>
    <table class="table table-striped" style="margin:0;width:230px">
        <tbody>
            <?php foreach ($cart_data['items'] as $key => $row): ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $this->flexi_cart->get_currency_value($row['internal_price']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<?php else: ?>
    <div class="alert alert-warning" style="margin:0">Your cart is empty</div>
<?php endif ?>
<a href="<?php echo site_url('cart') ?>" class="btn btn-sm btn-block btn-success" style="margin-top:5px">
    view cart
</a>