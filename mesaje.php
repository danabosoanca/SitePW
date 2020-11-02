<?php  include('message.php');
include_once('connectiom.php');

if(isset($_GET['edit'])){
    $update = true;
    $id=$_GET['edit'];
    $rec=mysqli_query($db,"SELECT * FROM contact where id='$id'");
    $record=mysqli_fetch_array($rec);
    $nume=$record['nume'];
    $mail=$record['mail'];
    $id=$record['id'];
    $mesaj=$record['mesaj'];

}
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy people</title>
    <link rel="stylesheet" href="prices.css"/>
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Josefin+Slab:ital,wght@0,400;0,600;1,300;1,400;1,600&family=Muli:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet" />
</head>
<body>

<!--START MESAJE-->

        <section class="mesaje" id="mesaje">
            <div class="section-header">
                <h1 class="section-heading">MESAJE DE LA CLIENTI</h1>
<?php if(isset($_SESSION['msg'])) : ?>
    <div class="msg">
        <?php 
            echo($_SESSION['msg']);
            unset($_SESSION['msg']);
            ?>
            <div>
                <?php endif ?>

                <table class="content-table1" >
            <tr class="tr">
                <th class="tr" colspan="4"></th>
            </tr>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NUME</th>
                    <th>MAIL</th>
                    <th>MESAJ</th>
                    <th colspan="2">MODIFICA/STERGE</th>
                </tr>
                </thead>
                <?php 
                    while($rows1=mysqli_fetch_assoc($result2))
                    {
                        ?>
                        <tr>
                            <td><?php echo $rows1['id']; ?></td>
                            <td><?php echo $rows1['nume']; ?></td>
                            <td><?php echo $rows1['mail']; ?></td>
                            <td><?php echo $rows1['mesaj']; ?></td>
                        <td>
				<a href="mesaje.php?edit=<?php echo $rows1['id']; ?>" class="edit_btn" >Editeaza</a>
			</td>
			<td>
				<a href="message.php?del=<?php echo $rows1['id']; ?>" class="del_btn">Sterge</a>
			</td>
                        
                        </tr>
                        
                        <?php
                    } ?>
                    </table>   
            <form  method="POST" action="message.php">
            <input type="hidden" name="id" value="<?php echo $id; ?> ">
                        <div class="input-group1">
                            <label class="label1">Nume</label>
                            <input type="text"  name="nume" placeholder="Nume" value="<?php echo $nume; ?>">
                            
                        </div>
                            <div class="input-group1">
                        <label>Mail</label>
                            <input type="text"   name="mail" placeholder="Mail  " value="<?php echo $mail; ?>">
                            
                        </div>
                            <div class="input-group1">
                        <label>Detalii</label>
                            <input type="text"   name="mesaj" placeholder="Mesaj   " value="<?php echo $mesaj; ?>">
                            
                        </div>
                        <div class="input-group1">
                            <?php if($update==false): ?>
                                <button type="submit" name="add" class="btn">Adauga</button>
                            <?php else: ?>
                                <button type="submit" name="update" class="btn">Modifica</button>
                            <?php endif ?>
                        </div>

            </form>
        </section>
        
<!--START FOOTER-->

        <footer class="footer">
            <div class="footer-content">
                <p class="copyright">
                    Copyright &copy; 2020, Bosoancă Maria-Daniela
                </p>
                <div class="social-list">
                    <a href="https://www.facebook.com/dana.bosoanca/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <a href="admin.php" class="scroll-btn">
        <i class="fas fa-arrow-left"></i>
    </a>

        <!--END FOOTER-->

</body>

</html>