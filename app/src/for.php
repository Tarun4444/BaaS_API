<?php 
 require("header.php");
?>
    
<script>

    request.open('POST', " https://data.bewitch58.hasura-app.io/v1/query ", true);
    request.setRequestHeader('Content-type','application/json');
    request.setRequestHeader('Authorization','Bearer '+admin_toke);
    request.send(JSON.stringify({"type":"select","args":{"table":"question","columns":["*"]}}));

</script>     

<?php require("footer.php");?>
