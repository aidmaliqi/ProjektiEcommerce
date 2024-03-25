<style>
    *{
        margin: 0;
        padding: 0;
    }
    #side-menu{
        width: 300px;
        height: 100%;
        display: flex;
        flex-direction: column;
        border:solid #07484a;
    }
    a{
        text-decoration:none;
    }
    .sub-menu{
        color: #07484a;
        border:solid 0.5px #07484a;
        border-left:none;
        border-right:none;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h1{
        text-align: center;
    }
</style>

    <div id="side-menu">
        <a href="admin.php">
        <div class="sub-menu"><h3>Dashboard</h3></div> </a>
        <a href="mPage.php">
        <div class="sub-menu"><h3>Edit Page</h3></div> </a>
        <a href="Users.php">
        <div class="sub-menu"><h3>Users</h3></div> </a>
        <a href="messages.php">
        <div class="sub-menu"><h3>Messages</h3></div> </a>
        <a href="mProducts.php">
        <div class="sub-menu"><h3>Products</h3></div> </a>
        <a href="mOrders.php">
        <div class="sub-menu"><h3>Orders</h3></div> </a>
        
    </div>