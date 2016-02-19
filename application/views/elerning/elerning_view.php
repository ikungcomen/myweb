<div class="container">
    <div class="row">
        <div class="col col-sm-12">
            <div class="panel">
                <h3>คลังบทความ</h3>
                <hr width="100%">
                <?php 
                    foreach ($result as $row){
                ?>
                <a href="<?php echo base_url(); ?>index.php/elerning/elerning_con/elerning_view_detail/<?php echo $row['category_id'];?>" ><u><?php echo $row['category_name'];?></u></a><br>
                <?php }?>
                <br><br><br>
            </div>
        </div>
    </div>
    
</div>
<script>
    $(document).ready(function() {
     // $(".btnCategory").click(function() {
         // var id =  $(this).attr('id');
         // var url = "<?php echo base_url(); ?>index.php/elerning/elerning_con/elerning_view_detail" ;
          //$.post(url, {'id': id}, function(data) {
              // $("#category_hdr").html(data);
               //alert(data);
         // });
         
         //$("#ss").html("data");
       // });
    });
    
</script>