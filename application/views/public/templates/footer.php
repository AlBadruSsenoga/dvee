<?php $this->load->library('store'); $owner = $this->store->owner(); ?>
</div>

<div class="footer">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                    <div class="lead">Contacts</div>
                    <span class="glyphicon glyphicon-phone"></span> <?php echo $owner->phone; ?>
                    <hr>
                    <span class="glyphicon glyphicon-pin"></span> <?php echo $owner->address; ?>
                    <hr>
                    <?php if ( isset($owner->email) ): ?>
                        <a href="mailto: <?php echo $owner->email; ?>">
                            <span class="glyphicon glyphicon-envelope"></span> <?php echo $owner->email ?>
                        </a>
                        <hr>
                    <?php endif; ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 text-center">
                    <div class="lead">Information</div>
                    <?php foreach ($this->store->pages() as $item): ?>
                        <?php echo anchor('page/'.$item->slug, $item->name) ?>
                        <hr>
                    <?php endforeach ?>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 text-center">
                    <div class="lead">Categories</div>
                    <?php foreach ($this->store->menu() as $item): ?>
                        <?php echo anchor('category/'.$item->slug.'/'.url_title($item->name), $item->name) ?>
                        <hr>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 text-center">
            <img src="<?php echo base_url() ?>assets/system/cc-badges.png" alt="" style="margin:20px 0;width:250px">
            <br>
            <small>COPYRIGHT &copy <?php echo date('Y').' '.$owner->name ?>.&nbsp All Rights Reserved</small>
            <br><br>
        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/global.js"></script>

<?php
// For example if a user submitted a form from a modal.
// You wand to trigger that modal in event of errors for instance
$redirect_inner = $this->session->flashdata('location');
?>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();

        $('#nav-to-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });

        $('.dropdown-toggle').dropdown();


        <?php if (isset($redirect_inner['toggle'])): ?>
            <?php if ($redirect_inner['toggle'] === 'modal'): ?>
                $("<?php echo $redirect_inner['target'] ?>").modal('show');
            <?php endif ?>
        <?php endif ?>

        $('input[data-toggle="loading"]').click(function() {$(this).val('Working ...')} );
        $('button[data-toggle="loading"]').click(function() {$(this).html('Working ...')} );

        $(".add-to-cart").submit(function(e) {
            // var form = $(this);
            // $.ajax({
            //     type: form.attr('method'),
            //     url: form.attr('action'),
            //     data: form.serialize(), // serializes the form's elements.
            //     success: function(data)
            //     {
            //         $('body').append(data)
            //         $('#mini-cart').html(data);
            //         var cartTotal = $('#cart-item-no').html();
            //         $('#cart-item-no').html(cartTotal++);
            //     }
            // });

            // e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    })
</script>

<?php if (isset($script)): ?>
	<?php echo $script ?>
<?php endif ?>

</body>
</html>