<?php
        include('header.php');
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .searchbar{
                float: left;
                /* width: 45%; */
            }
            .type{
                /* float: left; */
                /* width: 45%; */
                margin-left: 0px;
                clear: both;
            }
            .cart{
                float: left;
                /* width: 45%; */
            }
            .myorder{
                float: left;
                /* width: 45%; */
            }
            .logout{
                position: fixed;
                right: 0px;
            }
            .header{
                background-color: gray;
                /* margin-top: 10px; */
                height: 100px;
            }
            .header a{
                margin: 20px;
                text-decoration: none;
                color: white;
            }
            span{
                margin-top: 20px;
            }
            body{
                margin: 0px;
                background-color: white;
            }
        </style>
    </head>
    <body>
            <header></header>
            <div>
                <table>
                    <tr>
                        <td><a href="admin2.php">Details</a></td>
                        <td><a href="">Video Conferencing</a></td>
                        <td><a href="bmi.php">BMI Calculator</a></td>
                    </tr>
                </table>
            </div>
            <footer></footer>
    </body>
    </html>