<style type="text/css">
    #writeNotice{
        width: 80%;
        height: 150px;
        border-style:solid;
        border-width: 2px;
    }
    #notice{
        width: 90%;
        height: 70%;
       align-content:center;
       margin-left: 5%;
    }
</style>




<div id="writeNotice">
    <form id ="wha">
    <text>Post a notice</text><br>
    <input type="text" name="notice" id="notice"/><br>
    <button onClick="postNotice" style="margin-left:90%;">Post</button>
    </form>
</div>
<div id="allNotice">
    
</div>

<script type="text/javascript" >
document.getElementById("wha").addEventListener("submit",postNotice);
function postNotice(e){
    e.preventDefault();
    document.getElementById("allNotice").innerHTML += document.getElementById("notice").value + "<br>"; 
    }
</script>