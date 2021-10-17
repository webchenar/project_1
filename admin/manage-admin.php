<?php include("partials/menu.php"); ?>

<div>
    <h1>مدیریت نمایندگان و مدیران</h1>
    <br>

    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

    if (isset($_SESSION['delete'])) {
        echo $_SESSION['delete'];
        unset($_SESSION['delete']);
    }

    if (isset($_SESSION['update'])) {
        echo $_SESSION['update'];
        unset($_SESSION['update']);
    }

    if (isset($_SESSION['user-not-found'])) {
        echo $_SESSION['user-not-found'];
        unset($_SESSION['user-not-found']);
    }

    if (isset($_SESSION['pwd-not-match'])) {
        echo $_SESSION['pwd-not-match'];
        unset($_SESSION['pwd-not-match']);
    }

    if (isset($_SESSION['change-pwd'])) {
        echo $_SESSION['change-pwd'];
        unset($_SESSION['change-pwd']);
    }

    ?>
    <a href="<?php echo SITEURL . 'admin/add-admin.php/' ?>"> اضافه کردن مدیر </a>
    <br>
    <table style="width:100%;border-bottom:1px solid black; padding: 1%;text-align: left; padding: 1%;">
        <tr>
            <th>ID:</th>
            <th>first name and last name</th>
            <th>Phone(username)</th>
            <th>Access Level</th>
            <th>Last Login:</th>
            <th>Operations</th>
        </tr>

        <?php
        $sql = "SELECT * FROM tbl_admin";
        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows['id'];
                    $phone = $rows['phone'];
                    $full_name = $rows['first_name'] . " " . $rows['last_name'];
                    $email = $rows['email'];
                    $access_level = $rows['access_level'];
                    $username = $rows['username'];
                    $last_login = $rows['last_login_datetime'];

                    ?>
                    <tr>
                        <td><?php echo $id; ?>.</td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $access_level; ?></td>
                        <td><?php echo $last_login; ?></td>
                        <td>
                            <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>">تغییر
                                پسورد</a>
                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>">به روز رسانی
                                مدیر</a>
                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>">حذف مدیر</a>
                        </td>
                    </tr>

                    <?php

                }
            } else {
                // noting yet. #TODO: something need here.
            }
        }

        ?>
    </table>
</div>

<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Order</div>
                <div class="number">40,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Sales</div>
                <div class="number">38,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bxs-cart-add cart two'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Profit</div>
                <div class="number">$12,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart cart three'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Return</div>
                <div class="number">11,086</div>
                <div class="indicator">
                    <i class='bx bx-down-arrow-alt down'></i>
                    <span class="text">Down From Today</span>
                </div>
            </div>
            <i class='bx bxs-cart-download cart four'></i>
        </div>
    </div>

    <div class="sales-boxes">
        <div class="recent-sales box">
            <div class="title">Recent Sales</div>
            <div class="sales-details">
                <ul class="details">
                    <li class="topic">Date</li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                    <li><a href="#">02 Jan 2021</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Customer</li>
                    <li><a href="#">Alex Doe</a></li>
                    <li><a href="#">David Mart</a></li>
                    <li><a href="#">Roe Parter</a></li>
                    <li><a href="#">Diana Penty</a></li>
                    <li><a href="#">Martin Paw</a></li>
                    <li><a href="#">Doe Alex</a></li>
                    <li><a href="#">Aiana Lexa</a></li>
                    <li><a href="#">Rexel Mags</a></li>
                    <li><a href="#">Tiana Loths</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Sales</li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Returned</a></li>
                    <li><a href="#">Delivered</a></li>
                    <li><a href="#">Pending</a></li>
                    <li><a href="#">Delivered</a></li>
                </ul>
                <ul class="details">
                    <li class="topic">Total</li>
                    <li><a href="#">$204.98</a></li>
                    <li><a href="#">$24.55</a></li>
                    <li><a href="#">$25.88</a></li>
                    <li><a href="#">$170.66</a></li>
                    <li><a href="#">$56.56</a></li>
                    <li><a href="#">$44.95</a></li>
                    <li><a href="#">$67.33</a></li>
                    <li><a href="#">$23.53</a></li>
                    <li><a href="#">$46.52</a></li>
                </ul>
            </div>
            <div class="button">
                <a href="#">See All</a>
            </div>
        </div>
        <div class="top-sales box">
            <div class="title">Top Seling Product</div>
            <ul class="top-sales-details">
                <li>
                    <a href="#">
                        <img src="images/sunglasses.jpg" alt="">
                        <span class="product">Vuitton Sunglasses</span>
                    </a>
                    <span class="price">$1107</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/jeans.jpg" alt="">
                        <span class="product">Hourglass Jeans </span>
                    </a>
                    <span class="price">$1567</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/nike.jpg" alt="">
                        <span class="product">Nike Sport Shoe</span>
                    </a>
                    <span class="price">$1234</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/scarves.jpg" alt="">
                        <span class="product">Hermes Silk Scarves.</span>
                    </a>
                    <span class="price">$2312</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/blueBag.jpg" alt="">
                        <span class="product">Succi Ladies Bag</span>
                    </a>
                    <span class="price">$1456</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/bag.jpg" alt="">
                        <span class="product">Gucci Womens's Bags</span>
                    </a>
                    <span class="price">$2345</span>
                <li>
                    <a href="#">
                        <img src="images/addidas.jpg" alt="">
                        <span class="product">Addidas Running Shoe</span>
                    </a>
                    <span class="price">$2345</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/shirt.jpg" alt="">
                        <span class="product">Bilack Wear's Shirt</span>
                    </a>
                    <span class="price">$1245</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>


<?php include("partials/footer.php"); ?>
