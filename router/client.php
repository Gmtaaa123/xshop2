<?php 
    autoLoad('./src/controllers/client/');
    autoLoad('./src/models/');

    $router->add("GET", "client", "/", "HomeController@index");
    $router->add("GET", "client", "/index.php", "HomeController@index");
    // $router->add("GET", "client", "/", "CategoryController@index");
    $router->add("GET", "client", "/login", "LoginController@login");
    $router->add("POST", "client", "/login", "LoginController@login");
    $router->add("GET", "client", "/dangky", "LoginController@dangky");
    $router->add("POST", "client", "/dangky", "LoginController@dangky");
    $router->add("GET", "client", "/logout", "LoginController@logout");
    $router->add("GET", "client", "/resetpassLogin", "LoginController@resetpassLogin");
    $router->add("POST", "client", "/resetpassLogin", "LoginController@resetpassLogin");
    $router->add("GET", "client", "/updateAccount", "LoginController@updateAccount");
    $router->add("POST", "client", "/updateAccount", "LoginController@updateAccount");
    
  
    //Dieu huong danh muc khoa hoc
    $router->add("GET", "client", "/danhmuc", "CategoryController@getCategory");
    $router->add("GET", "client", "/danhmuc", "CategoryController@index");
    $router->add("GET", "client", "/home", "CategoryController@index");

    //Chi tiet khoa hoc
    $router->add("GET", "client", "/detailCourse", "CourseController@detail");
    $router->add("POST", "client", "/productDetail", "ProductController@productDetail");
    $router->add("GET", "client", "/createComment", "ProductController@createComment");
    $router->add("POST", "client", "/createComment", "ProductController@createComment");

    
    $router->add("GET", "client", "/lienhe", "LienheController@index");
    $router->add("GET", "client", "/tintuc", "TintucController@index");
    $router->add("GET", "client", "/gioithieu", "GioithieuController@index");
    $router->add("GET", "client", "/giohang", "GiohangController@index");
    $router->add("GET", "client", "/thanhtoan", "ThanhtoanController@index");

    

    //Danh muc
    // $router->add("GET", "client", "/danhmuc", "ThanhtoanController@index");

    $router->solve("client");
?>