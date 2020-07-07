<html>
<body>
<div id="Home">
<h1>Hi <?php echo $_SESSION['user']['username']; ?></h1>
      </div>
<div class="details">
    <table>
        <td>
        <form action="./post.php" method="post">
                   <textarea  name="user_name" class="box1" placeholder="Email"></textarea>
                   <input type="submit" name="reg" value="Sign Up!"class="bu">
                   </form>
                   </td>
                           </table>
</div>
<div>



</div>

</body>