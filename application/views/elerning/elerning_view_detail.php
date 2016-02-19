<div class="container">
    <div class="row">
        <div class="col col-sm-12">
            <div class="panel">
                
                <h3>คลังบทความ</h3>
                 <br>
                <a class="btn btn-primary " href="<?php echo base_url(); ?>index.php/elerning/elerning_con/elerning_view"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true">&nbsp;ย้อนกลับ</span></a>
               <hr width="100%">
               <?php 
                    foreach ($hdr as $row){
                ?>
               <a href="<?php echo base_url(); ?>index.php/elerning/elerning_con/elerning_view_detail/<?php echo $row['category_hdr_id'];?>" ><span class="glyphicon glyphicon-fire" aria-hidden="true">&nbsp;<?php echo $row['category_hdr_name'];?></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php }?>
               
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
                <br><br><br><br><br>
            </div>
        </div>
    </div>
    <div id="ss">
                    
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