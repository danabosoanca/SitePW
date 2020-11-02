<?php  include('prices.php');
include_once('connectiom.php');

if(isset($_GET['edit'])){
    $update = true;
    $id=$_GET['edit'];
    $rec=mysqli_query($db,"SELECT * FROM preturi where id='$id'");
    $record=mysqli_fetch_array($rec);
    $activitate=$record['activitate'];
    $pret=$record['pret'];
    $durata=$record['durata'];
    $id=$record['id'];

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
    <!--START PRETURI-->

        <section class="preturi" id="preturi">
            <div class="section-header">
                <h1 class="section-heading">PRETURI</h1>
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
                    <th>ACTIVITATE</th>
                    <th>PRET</th>
                    <th>DURATA</th>
                    <th colspan="2">MODIFICA/STERGE</th>
                </tr>
                </thead>
                <?php 
                    while($rows1=mysqli_fetch_assoc($result2))
                    {
                        ?>
                        <tr>
                            <td><?php echo $rows1['id']; ?></td>
                            <td><?php echo $rows1['activitate']; ?></td>
                            <td><?php echo $rows1['pret']; ?></td>
                            <td><?php echo $rows1['durata']; ?></td>

                        <td>
				<a href="crud.php?edit=<?php echo $rows1['id']; ?>" class="edit_btn" >Editeaza</a>
			</td>
			<td>
				<a href="prices.php?del=<?php echo $rows1['id']; ?>" class="del_btn">Sterge</a>
			</td>
                        
                        </tr>
                        
                        <?php
                    } ?>
                
            </table>   
            <form  method="POST" action="prices.php">
            <input type="hidden" name="id" value="<?php echo $id; ?> ">
                        <div class="input-group1">
                            <label class="label1">Activitate</label>
                            <input type="text"  name="activitate" placeholder="Activitate" value="<?php echo $activitate; ?>">
                            
                        </div>
                        <div class="input-group1">
                        <label>Pret</label>
                            <input type="text"   name="pret" placeholder="Pret     " value="<?php echo $pret; ?>">
                            
                        </div>
                        <div class="input-group1">
                        <label>Durata</label>
                            <input type="text"   name="durata" placeholder="Durata   " value="<?php echo $durata; ?>">
                            
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

        <!--END PRETURI-->

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

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="tilt.js"></script>

    






</body>
</html>