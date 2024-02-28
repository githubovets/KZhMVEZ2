<?php
session_start();
if ($_SESSION['user']['role'] !== '1')header('location: index.php');

require "lib/connect.php";
$id = $_GET['id'];
$query = "SELECT * FROM `product` WHERE `product`.`ID Product` = '$id'";
$one = mysqli_query($db, $query);
$one = mysqli_fetch_assoc($one);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Обновить</title>
</head>
<body>
<header>
        <svg width="487" height="68" viewBox="0 0 487 68" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M292.05 46.1713C288.468 50.0107 280.377 52.8699 280.377 52.8699H263.897V11.7532H280.377C280.377 11.7532 288.46 14.3158 292.05 18.0396C296.257 22.4029 298.168 26.261 298.103 32.3116C298.04 38.2142 296.084 41.8481 292.05 46.1713ZM248.168 11.7532H258.334V52.8699H248.168V11.7532ZM241.09 11.7532H155.672L74.5518 21.6336L54.7134 11.7532H0L12.6173 24.2052H60.3275L41.1284 29.67V35.1347L60.3275 40.9054L12.6173 41.5639L0 52.8699H53.5844L74.5518 42.3675L158.099 52.8699L241.09 52.8699V11.7532Z" fill="#F3AB36"/>
            <path d="M80.137 11.7532L81.674 -0.00244141H117.672L116.135 11.7532H103.677L98.3382 52.8747H87.2557L92.5947 11.7532H80.137Z" fill="black"/>
            <path d="M125.631 52.8558C122.26 52.8558 119.483 51.9899 117.299 50.258C115.128 48.5087 113.604 46.077 112.728 42.9632C111.852 39.8319 111.676 36.202 112.202 32.0735C112.728 27.945 113.827 24.3238 115.499 21.21C117.17 18.0787 119.321 15.647 121.95 13.9152C124.579 12.1658 127.53 11.734 130.914 11.734C134.271 11.734 137.091 12.1658 139.261 13.9152C141.445 15.647 142.976 18.0787 143.852 21.21C144.742 24.3238 144.924 27.945 144.398 32.0735C143.872 36.202 142.767 39.8319 141.081 42.9632C139.396 46.077 137.239 48.5087 134.61 50.258C131.994 51.9899 129.001 52.8558 125.631 52.8558ZM127.006 42.1497C127.977 42.1497 128.86 41.7387 129.655 40.9165C130.464 40.0943 131.152 38.9222 131.718 37.4003C132.298 35.8783 132.722 34.0677 132.992 31.9685C133.262 29.8518 133.302 28.0412 133.113 26.5368C132.925 25.0148 132.534 23.8428 131.94 23.0206C131.347 22.1984 130.565 21.7873 129.594 21.7873C128.624 21.7873 127.734 22.1984 126.925 23.0206C126.116 23.8428 125.428 25.0148 124.862 26.5368C124.296 28.0412 123.878 29.8518 123.608 31.9685C123.339 34.0677 123.291 35.8783 123.467 37.4003C123.655 38.9222 124.046 40.0943 124.64 40.9165C125.246 41.7387 126.035 42.1497 127.006 42.1497Z" fill="black"/>
            <path d="M144.479 67.4655L151.663 11.7532H162.746L161.831 19.0783H162.074C162.64 17.7138 163.381 16.463 164.298 15.326C165.228 14.1714 166.32 13.253 167.574 12.5707C168.842 11.871 170.244 11.9728 171.781 11.9728C173.83 11.9728 175.684 12.2296 177.342 13.6466C179.001 15.0636 180.221 17.294 181.003 20.3379C181.785 23.3817 181.866 27.3353 181.245 32.1985C180.652 36.8518 179.594 40.7091 178.07 43.7704C176.56 46.8318 174.781 49.1147 172.731 50.6192C170.695 52.1236 168.572 52.8758 166.361 52.8758C164.905 52.8758 163.644 52.5697 162.579 51.9574C161.514 51.3277 160.658 50.4792 160.011 49.4121C159.364 48.3275 158.919 47.103 158.676 45.7385H158.433L155.683 67.4655H144.479ZM159.97 32.1985C159.728 34.1578 159.707 35.8546 159.91 37.2891C160.125 38.7061 160.55 39.8082 161.184 40.5954C161.831 41.3651 162.667 41.75 163.691 41.75C164.716 41.75 165.633 41.3738 166.442 40.6216C167.251 39.8519 167.938 38.7586 168.505 37.3416C169.071 35.9071 169.489 34.1927 169.758 32.1985C170.001 30.2042 170.021 28.4986 169.819 27.0816C169.617 25.6472 169.206 24.5538 168.586 23.8016C167.965 23.0319 167.143 22.647 166.118 22.647C165.094 22.647 164.157 23.0319 163.307 23.8016C162.471 24.5538 161.763 25.6472 161.184 27.0816C160.617 28.4986 160.213 30.2042 159.97 32.1985Z" fill="black"/>
            <path d="M183.404 52.8787L188.845 11.7461H217.805L212.365 52.8787H201.848L205.65 22.8569H197.561L193.759 52.8787H183.404Z" fill="black"/>
            <path d="M249.358 64.8349L252.271 41.4351H254.536C255.291 41.0677 255.958 40.2018 256.538 38.8373C257.131 37.4553 257.657 35.8371 258.115 33.9828C258.574 32.1285 258.971 30.2567 259.308 28.3674C259.646 26.4606 259.942 24.7987 260.198 23.3817L262.302 11.7452H288.835L285.114 41.4351H289.967L287.055 64.8349H276.539L278.076 52.8693H261.735L260.198 64.8349H249.358ZM265.214 41.4351H274.759L277.186 22.542H270.229L270.067 23.3817C269.366 27.7376 268.645 31.3675 267.903 34.2715C267.162 37.1579 266.265 39.5458 265.214 41.4351Z" fill="black"/>
            <path d="M301.293 52.8693C299.324 52.8693 297.632 52.561 296.216 51.7213C294.814 50.8641 293.79 49.5696 293.142 47.8377C292.509 46.0883 292.367 43.8842 292.718 41.2251C293.001 39.021 293.533 37.1404 294.315 35.5835C295.097 34.0266 296.068 32.7495 297.228 31.7524C298.387 30.7553 299.688 29.9943 301.131 29.4695C302.587 28.9272 304.124 28.5773 305.742 28.4199C307.494 28.2449 308.917 28.0263 310.009 27.7639C311.101 27.5015 311.917 27.1428 312.456 26.688C312.995 26.2332 313.319 25.6209 313.427 24.8512V24.7462C313.548 23.6966 313.332 22.8919 312.78 22.3321C312.24 21.7723 311.485 21.4924 310.515 21.4924C309.463 21.4924 308.553 21.7898 307.784 22.3846C307.029 22.9794 306.51 23.9065 306.227 25.1661H295.954C296.385 22.717 297.268 20.4603 298.603 18.3961C299.951 16.3144 301.737 14.6525 303.962 13.4104C306.2 12.1509 308.87 11.6026 311.971 11.6026C314.182 11.6026 316.123 11.8623 317.795 12.5445C319.467 13.2093 320.849 14.1452 321.941 15.3522C323.046 16.5418 323.822 17.9413 324.267 19.5507C324.725 21.1426 324.833 22.8744 324.59 24.7462L321.031 52.8622H310.595L311.323 46.6831H311.081C310.272 48.1876 309.362 49.4034 308.351 50.3305C307.353 51.2577 306.261 51.9312 305.074 52.351C303.901 52.7709 302.641 52.8693 301.293 52.8693ZM306.146 43.8492C306.982 43.8492 307.805 43.6218 308.613 43.1669C309.422 42.7121 310.117 42.0561 310.697 41.1989C311.276 40.3417 311.647 39.3009 311.809 38.0763L312.213 34.7175C311.917 34.875 311.586 35.0237 311.222 35.1636C310.872 35.2861 310.501 35.4085 310.11 35.531C309.733 35.6535 309.328 35.7672 308.897 35.8721C308.479 35.9771 308.047 36.082 307.602 36.187C306.712 36.3619 305.964 36.6506 305.358 37.0529C304.751 37.4378 304.279 37.9189 303.942 38.4962C303.605 39.0559 303.396 39.6857 303.315 40.3855C303.194 41.4875 303.389 42.3447 303.901 42.957C304.427 43.5518 305.176 43.8492 306.146 43.8492Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M232.831 52.8846C229.514 52.8846 226.764 52.2636 224.58 50.6192C222.395 48.9573 220.858 46.5782 219.969 43.4818C219.079 40.368 218.917 36.6418 219.483 32.3034C220.022 28.14 221.135 24.5013 222.82 21.3875C224.519 18.2736 226.656 15.8508 229.231 14.1189C231.82 12.3871 234.718 11.7407 237.927 11.7407C240.273 11.7407 242.329 11.9934 244.095 12.9381C245.875 13.8827 247.324 15.256 248.443 17.0578C249.562 18.8597 250.317 21.0376 250.708 23.5917C251.113 26.1282 251.113 28.9972 250.708 32.1985L250.304 35.5572H230.09C229.929 36.8518 229.898 38.6361 230.181 39.6507C230.465 40.6653 230.957 41.4613 231.658 42.0386C232.359 42.6159 233.262 42.9045 234.368 42.9045C235.123 42.9045 235.837 42.7733 236.511 42.5109C237.199 42.231 237.806 41.8287 238.332 41.3039C238.871 40.7616 239.302 40.1056 239.626 39.3358H249.819C249.09 42.1348 247.938 44.5664 246.36 46.6306C244.796 48.6774 242.868 50.2693 240.576 51.4064C238.298 52.526 235.716 52.8846 232.831 52.8846ZM241.001 27.5802H231.247C231.436 26.3556 231.772 25.4985 232.325 24.5888C232.891 23.6791 233.572 22.9706 234.368 22.4633C235.177 21.956 236.04 21.7024 236.956 21.7024C237.873 21.7024 238.655 21.956 239.302 22.4633C239.963 22.9531 240.442 23.6441 240.738 24.5363C241.048 25.411 241.136 26.4256 241.001 27.5802Z" fill="black"/>
            <path d="M332.77 53.7291C330.831 53.7291 329.249 53.0579 328.022 51.7156C326.812 50.3567 326.307 48.7078 326.506 46.7689C326.705 44.8797 327.558 43.2639 329.066 41.9216C330.591 40.5792 332.323 39.9081 334.262 39.9081C336.101 39.9081 337.634 40.5792 338.86 41.9216C340.103 43.2639 340.625 44.8797 340.426 46.7689C340.294 48.0615 339.838 49.2381 339.059 50.2987C338.297 51.3427 337.352 52.1796 336.225 52.8094C335.115 53.4225 333.963 53.7291 332.77 53.7291Z" fill="black"/>
            <path d="M376.268 59.4109L378.313 47.0246H379.904C380.435 46.8257 380.903 46.3569 381.311 45.6183C381.727 44.8702 382.097 43.9943 382.419 42.9905C382.74 41.9867 383.02 40.9734 383.257 39.9507C383.493 38.9185 383.702 38.0189 383.882 37.2518L385.359 31.1155H403.995L401.382 47.0246H404.791L402.745 59.4109H395.359L396.438 52.9336H384.961L383.882 59.4109H376.268ZM387.404 47.0246H394.109L395.813 36.7973H390.927L390.813 37.2518C390.321 39.6098 389.814 41.5747 389.294 43.1467C388.773 44.7092 388.143 46.0018 387.404 47.0246Z" fill="black"/>
            <path d="M447.063 42.9336L455.132 31.1155H462.518L458.882 52.9336H451.495L453.484 41.0586L445.416 52.9336H438.029L441.666 31.1155H449.052L447.063 42.9336Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M345.682 52.9336H354.205L356.816 47.3655H366.409L367.159 52.9336H375.682L370.909 23.8427H360.114L345.682 52.9336ZM365.612 41.4564L364.318 31.8541H364.091L359.588 41.4564H354.546L353.523 47.3655H356.816L359.588 41.4564H365.612Z" fill="black"/>
            <path d="M354.546 41.4564L353.523 47.3655H356.816L359.588 41.4564H354.546Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M428.711 31.1155L421.666 44.8086L419.393 31.1155H417.802L415.917 42.4286L413.825 31.1155H410.416L406.779 52.9336H414.166L415.917 42.4286L417.859 52.9336H422.745L428.886 41.3182L426.95 52.9336H434.223L437.859 31.1155H434.279H430.586H428.711Z" fill="black"/>
            <path d="M417.802 31.1155H413.825L415.917 42.4286L417.802 31.1155Z" fill="black"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M477.098 44.8655H471.643L472.619 39.0132H478.073L479.389 31.1155H486.719L483.083 52.9336H475.753L477.098 44.8655ZM469.844 39.0132L468.878 44.8655H471.643L470.299 52.9336H462.912L466.549 31.1155H473.935L472.619 39.0132H469.844Z" fill="black"/>
            <path d="M469.844 39.0132L468.878 44.8655H471.643L472.619 39.0132H469.844Z" fill="black"/>
        </svg>
        <h1 style="font-weight:900;">Выход</h1>
</header>

<form action="lib/update.php" method="post" class="in">
    <input type="hidden" name="id" value="<?=$_GET['id']?>">
    <div>
        <p>Название</p>
        <input type="text" name="name" value="<?=$one['Name']?>">
    </div>
    <div>
        <p>Цена</p>
        <input type="text" name="price" value="<?=$one['Price']?>">
    </div>
    <div>
        <p>Категория</p>
        <input type="text" name="cat" value="<?=$one['Category']?>">
    </div>
    <div>
        <p>Описание</p>
        <input type="text" name="descript" value="<?=$one['Description']?>">
    </div>
    <div>
        <p>Фото</p>
        <input type="text" name="photo" value="<?=$one['Photo']?>">
    </div>
    <div>
        <p>Количество зарядов</p>
        <input type="text" name="charges" value="<?=$one['Number of charges']?>">
    </div>
    <div>
        <p>Продолжительность</p>
        <input type="text" name="time" value="<?=$one['Time']?>">
    </div>
    <div>
        <p>Количество эффектов</p>
        <input type="text" name="effects" value="<?=$one['Number of effects']?>">
    </div>
    <input type="submit" class="button" style="margin: 20px;;">
</form>
</body>
</html>