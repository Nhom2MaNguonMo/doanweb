//duoc chinh sua boi Quan
<?php
include "config.php";
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>

<html lang="en">
    
    <head>
    <?php
    include ROOT."/include/head.php";
    ?>
    </head>
    <?php
    include ROOT."/include/menu.php";
    ?>
    <body>
        <!-- Newsletter section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1>Have You Seen our Works?</h1>
                    <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
                    <h2>GIỎ HÀNG</h2>
                </div>
                </div>
            </div>
        <div class="section primary-section">
                   <table class="table">
                  <thead>
                    <tr>
                      <th>Tên app</th>
                      <th>Hệ điều hành</th>
                      <th>Loại</th>
                      <th>Hình</th>
                      <th>Giá</th>
                      <th>Sale</th>
                      <th>Xoá</th>
                    </tr>
                  </thead>
                  <?php
                    foreach ($_SESSION['giohang'] as $key => $value) 
                    { 
                        $sql ="select * from app where maapp= '$key' ";
                        $data =$pdo->query($sql);
                        $r = $data->fetch();
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $r['tenapp'];?></td>
                      <td><?php echo $r['tenhdh'];?></td>
                      <td><?php echo $r['tenloai'];?></td>
                      <td><img width="50" height="50" src="<?php echo $r['hinh'];?>"></td>
                      <td><span class="lineThrough">$<?php echo $r['giagoc'];?></span> $<?php echo $r['gia'];?></td>
                      <td><?php echo $r['sale'];?>%</td>
                      <td><a href="xoa_hang.php?id=<?php echo $key; ?>" class="btn btn-warning">Xóa</a></td>
                    </tr>
                  </tbody>
                    <?php
                    }
                    ?>
                </table>
                <div class=" title">
                <a href="#" class="btn btn-warning">THANH TOÁN</a> 
                <a href="all_app.php" class="btn btn-warning">TIẾP TỤC MUA</a></div>
            </div>

        <!-- Newsletter section end -->
        <!-- Contact section start -->
        <div id="contact" class="contact">
                    <?php
                    include ROOT."/include/contact.php";
                    ?>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
                    <?php
                    include ROOT."/include/footer.php";
                    ?>
        <!-- Footer section end -->
    </body>
</html>