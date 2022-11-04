<div id="postList">
<?php
// Include the database configuration file
require '../conn.php';

// Get records from the database
$query = $conn->query("SELECT * FROM channels ORDER BY channelId DESC LIMIT 50");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $postID = $row["channelId"];
?>
    <div class="list-item"><h4><?php echo $row['channelName']; ?></h4></div>
<?php } ?>
    <div class="load-more" lastID="<?php echo $postID; ?>" style="display: none;">
        <img src="loading.gif"/>
    </div>
<?php } ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        var lastID = $('.load-more').attr('lastID');
        if(($(window).scrollTop() == $(document).height() - $(window).height()) && (lastID != 0)){
            $.ajax({
                type:'POST',
                url:'getData.php',
                data:'channelId='+lastID,
                beforeSend:function(){
                    $('.load-more').show();
                },
                success:function(html){
                    $('.load-more').remove();
                    $('#postList').append(html);
                }
            });
        }
    });
});
</script>