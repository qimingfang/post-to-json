<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
$.ajax({
    url : "post.php",
    type : "POST",
    data : {"qiming" : "hello" }}).
    done(function(response){
       alert(response); 
    });
</script>
