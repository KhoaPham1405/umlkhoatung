<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecomus Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lora:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./asset/asset.css">
    <link rel="stylesheet" href="./asset/base.css">
    <link rel="stylesheet" href="./asset/bootstrap.css">
    <script src="./asset/bootstrap.js"></script>

</head>

<body>
    <header>
        <div class="container-fluid p-0">
            <div class="header">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-menu-feature d-md-none">
                        <button
                            class="header-btn-menu border-2 d-flex justify-content-center align-items-center btn-outline-dark"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuFeature"
                            aria-controls="offcanvasLeft">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 16 16"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.5 11.5C2.5 11.2239 2.72386 11 3 11H13C13.2761 11 13.5 11.2239 13.5 11.5C13.5 11.7761 13.2761 12 13 12H3C2.72386 12 2.5 11.7761 2.5 11.5Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.5 7.5C2.5 7.22386 2.72386 7 3 7H13C13.2761 7 13.5 7.22386 13.5 7.5C13.5 7.77614 13.2761 8 13 8H3C2.72386 8 2.5 7.77614 2.5 7.5Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.5 3.5C2.5 3.22386 2.72386 3 3 3H13C13.2761 3 13.5 3.22386 13.5 3.5C13.5 3.77614 13.2761 4 13 4H3C2.72386 4 2.5 3.77614 2.5 3.5Z"
                                    fill="black" />
                            </svg>
                        </button>

                        <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasMenuFeature"
                            aria-labelledby="offcanvasLeftLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasRightLabel">Featured Menu</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="header-menu-list p-0 m-0 ">
                                    <li class="header-menu-item mb-2 ">
                                        <a href="index.php?task=pagehome" class="header-menu-link">Home</a>
                                    </li>
                                    <li class="header-menu-item mb-2">
                                        <a href="" class="header-menu-link">Shop</a>
                                    </li>
                                    <li class="header-menu-item mb-2">
                                        <a href="" class="header-menu-link">Product</a>
                                    </li>
                                    <li class="header-menu-item mb-2">
                                        <a href="" class="header-menu-link">Blog</a>
                                    </li>
                                    <li class="header-menu-item mb-2">
                                        <a href="index.php?task=pagelogin" class="header-menu-link me-0">User</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="136" height="21" viewBox="0 0 136 21"
                            fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.6294 19.4909C19.3546 17.3401 21.2491 13.2363 20.7662 9.21957L17.0673 11.3552C16.8003 13.3451 15.6463 15.194 13.773 16.2756C10.5658 18.1273 6.4646 17.0284 4.61288 13.8211C2.76116 10.6138 3.86007 6.51271 7.06733 4.661C9.59584 3.20116 12.6799 3.57522 14.7794 5.37048L9.07289 8.66512L8.1594 13.5234L20.1057 6.62617C19.9208 6.16171 19.7001 5.70482 19.4428 5.25907C16.5658 0.276014 10.194 -1.43132 5.21096 1.44567C0.227882 4.32265 -1.47942 10.6944 1.39755 15.6775C4.27452 20.6606 10.6463 22.3679 15.6294 19.4909Z"
                                fill="black" />
                            <path
                                d="M115.452 2.96261V12.0436C115.452 13.3747 114.95 14.5074 113.928 15.5041C112.905 16.47 111.771 16.9311 110.432 16.9311C109.087 16.9311 107.922 16.4666 106.902 15.504C105.888 14.5154 105.411 13.3857 105.411 12.0436V0.547644L101.307 2.91681V11.7534C101.307 14.318 102.168 16.5098 103.875 18.2423L103.878 18.2451L103.881 18.248C105.623 19.9795 107.814 20.8612 110.432 20.8612C113.046 20.8612 115.24 19.9812 116.952 18.2451C118.695 16.5114 119.556 14.3173 119.556 11.7534V0.593453L115.452 2.96261Z"
                                fill="black" />
                            <path
                                d="M45.1611 13.4806L44.3659 15.1255L44.3556 15.144C43.3056 17.035 41.946 18.4756 40.2689 19.4349C38.5921 20.394 36.6436 20.8459 34.4573 20.8289L34.4542 20.8289C31.5082 20.7943 28.9688 19.7845 26.8398 17.8156C24.6983 15.8352 23.6193 13.3828 23.5837 10.5372C23.548 7.65233 24.5944 5.19781 26.7308 3.15279L26.7331 3.1506L26.7354 3.14843C28.8907 1.11908 31.4624 0.0365812 34.4524 0.00149869C36.5945 -0.0329126 38.5937 0.525727 40.4356 1.62914L40.4397 1.63161L40.4438 1.63412C42.166 2.69474 43.4778 4.02503 44.249 5.70514L44.2499 5.70711L45.0943 7.57542H40.6119L40.3867 7.20322C39.1026 5.08118 37.2001 3.99065 34.5475 3.93137C32.814 3.9033 31.2827 4.49431 29.8596 5.79128L29.8569 5.79375L29.8541 5.7962C28.3827 7.1116 27.6871 8.65432 27.6871 10.4313C27.6871 12.2169 28.3573 13.736 29.7092 15.0533C31.0555 16.3334 32.645 16.96 34.4841 16.9312L34.486 16.9311L34.4879 16.9311C37.1909 16.9016 39.124 15.8591 40.4314 13.8342L40.6598 13.4806H45.1611Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M56.9148 0.0664602C59.7302 0.170541 62.1774 1.21981 64.1425 3.27073C66.0974 5.27866 67.1027 7.68817 67.1027 10.4635C67.1027 13.3159 66.0214 15.7955 63.8939 17.8666C61.7948 19.9099 59.2378 20.9322 56.2982 20.8286C53.4773 20.758 51.0305 19.7062 49.0673 17.691C47.1061 15.6776 46.1379 13.2654 46.1379 10.4958C46.1379 7.6182 47.214 5.1055 49.3112 3.06284C51.4122 0.983983 53.9733 -0.0382967 56.9148 0.0664602ZM56.3869 16.8994L56.3922 16.8997C58.2536 16.986 59.788 16.3945 61.0887 15.042L61.0917 15.0389L61.0947 15.0359C62.4439 13.6641 63.0607 12.1165 63.0325 10.2887C62.9714 8.54637 62.3217 7.07942 61.0936 5.82558C59.8798 4.58637 58.4587 3.99601 56.7528 3.99601H56.7464L56.7401 3.99591C54.9419 3.96721 53.4518 4.588 52.1672 5.83845C50.8895 7.08223 50.2713 8.53784 50.2413 10.3147C50.2114 12.0646 50.7737 13.5852 51.9934 14.8883C53.2154 16.1939 54.6433 16.8419 56.3816 16.8993L56.3869 16.8994Z"
                                fill="black" />
                            <path
                                d="M98.4761 20.4097H94.3063V8.36749C94.3063 7.10643 93.9272 6.0522 93.2195 5.19803C92.5435 4.38197 91.6423 3.96376 90.5113 3.96376C89.3142 3.96376 88.3032 4.34481 87.4152 5.09601C86.5911 5.82003 86.1862 6.70967 86.1862 7.81929V20.4097H81.9833V7.81929C81.9833 6.70959 81.5789 5.82319 80.726 5.10003L80.7212 5.09599L80.7165 5.09187C79.8666 4.34724 78.8595 3.96376 77.6583 3.96376C76.534 3.96376 75.6634 4.37695 74.9832 5.19803C74.282 6.04434 73.9295 7.06296 73.9295 8.36749V20.4097H69.7598V8.65771C69.7598 6.22421 70.4672 4.15176 71.9911 2.59364C73.3966 1.11935 75.2405 0.307645 77.462 0.132967C78.9707 0.0093412 80.357 0.265466 81.5954 0.913897C82.5332 1.40493 83.361 2.1076 84.0848 2.99857C84.8086 2.1076 85.6363 1.40493 86.5741 0.913897C87.8125 0.265466 89.1989 0.0093412 90.7076 0.132967C92.9326 0.307919 94.7725 1.12116 96.2077 2.58969C97.729 4.14278 98.4761 6.21298 98.4761 8.65771V20.4097Z"
                                fill="black" />
                            <path
                                d="M126.64 13.4484V14.8169C126.64 15.133 126.834 15.595 127.473 16.2173C128.05 16.7794 128.612 16.9856 129.144 16.964L129.148 16.9638L129.152 16.9637C130.072 16.9357 130.691 16.6914 131.145 16.2495C131.53 15.8752 131.75 15.34 131.779 14.57C131.791 13.9415 131.617 13.4661 131.293 13.0882C130.957 12.6963 130.408 12.3489 129.571 12.0868L129.568 12.086L127.354 11.4105C126.076 11.0195 125.042 10.3784 124.317 9.4613C123.592 8.54397 123.222 7.40934 123.167 6.10961C123.091 4.47695 123.673 3.04688 124.851 1.89963L124.856 1.89539L124.86 1.89121C126.051 0.767997 127.487 0.140286 129.173 0.0667764C130.679 -0.00776855 132.054 0.488209 133.274 1.45857C134.554 2.44956 135.267 3.70101 135.383 5.21526L135.384 5.22133L135.466 6.57577H131.216V5.40077C131.216 5.03263 131.034 4.70132 130.679 4.43908C130.316 4.17171 129.793 3.99786 129.219 3.99603C128.181 4.02378 127.359 4.79108 127.336 5.77266L127.335 5.79167L127.334 5.81064C127.298 6.28892 127.425 6.65467 127.691 6.9607C127.973 7.28598 128.459 7.59583 129.223 7.84397L131.413 8.55434L131.415 8.5553C132.781 9.0101 133.886 9.70214 134.672 10.6554C135.46 11.6109 135.887 12.7793 135.98 14.1171C136.131 16.0047 135.431 17.6723 133.951 19.041L133.948 19.0444L133.944 19.0479C132.472 20.3732 130.744 21.0013 128.801 20.8922L128.799 20.892L128.797 20.8919C126.996 20.7824 125.491 20.0439 124.272 18.7858L124.268 18.7816L124.264 18.7773C123.068 17.5043 122.471 15.9661 122.471 14.2042V13.4484H126.64Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.6294 19.4909C19.3546 17.3401 21.2491 13.2363 20.7662 9.21957L17.0673 11.3552C16.8003 13.3451 15.6463 15.194 13.773 16.2756C10.5658 18.1273 6.4646 17.0284 4.61288 13.8211C2.76116 10.6138 3.86007 6.51271 7.06733 4.661C9.59584 3.20116 12.6799 3.57522 14.7794 5.37048L9.07289 8.66512L8.1594 13.5234L20.1057 6.62617C19.9208 6.16171 19.7001 5.70482 19.4428 5.25907C16.5658 0.276014 10.194 -1.43132 5.21096 1.44567C0.227882 4.32265 -1.47942 10.6944 1.39755 15.6775C4.27452 20.6606 10.6463 22.3679 15.6294 19.4909Z"
                                stroke="black" />
                            <path
                                d="M115.452 2.96261V12.0436C115.452 13.3747 114.95 14.5074 113.928 15.5041C112.905 16.47 111.771 16.9311 110.432 16.9311C109.087 16.9311 107.922 16.4666 106.902 15.504C105.888 14.5154 105.411 13.3857 105.411 12.0436V0.547644L101.307 2.91681V11.7534C101.307 14.318 102.168 16.5098 103.875 18.2423L103.878 18.2451L103.881 18.248C105.623 19.9795 107.814 20.8612 110.432 20.8612C113.046 20.8612 115.24 19.9812 116.952 18.2451C118.695 16.5114 119.556 14.3173 119.556 11.7534V0.593453L115.452 2.96261Z"
                                stroke="black" />
                            <path
                                d="M45.1611 13.4806L44.3659 15.1255L44.3556 15.144C43.3056 17.035 41.946 18.4756 40.2689 19.4349C38.5921 20.394 36.6436 20.8459 34.4573 20.8289L34.4542 20.8289C31.5082 20.7943 28.9688 19.7845 26.8398 17.8156C24.6983 15.8352 23.6193 13.3828 23.5837 10.5372C23.548 7.65233 24.5944 5.19781 26.7308 3.15279L26.7331 3.1506L26.7354 3.14843C28.8907 1.11908 31.4624 0.0365812 34.4524 0.00149869C36.5945 -0.0329126 38.5937 0.525727 40.4356 1.62914L40.4397 1.63161L40.4438 1.63412C42.166 2.69474 43.4778 4.02503 44.249 5.70514L44.2499 5.70711L45.0943 7.57542H40.6119L40.3867 7.20322C39.1026 5.08118 37.2001 3.99065 34.5475 3.93137C32.814 3.9033 31.2827 4.49431 29.8596 5.79128L29.8569 5.79375L29.8541 5.7962C28.3827 7.1116 27.6871 8.65432 27.6871 10.4313C27.6871 12.2169 28.3573 13.736 29.7092 15.0533C31.0555 16.3334 32.645 16.96 34.4841 16.9312L34.486 16.9311L34.4879 16.9311C37.1909 16.9016 39.124 15.8591 40.4314 13.8342L40.6598 13.4806H45.1611Z"
                                stroke="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M56.9148 0.0664602C59.7302 0.170541 62.1774 1.21981 64.1425 3.27073C66.0974 5.27866 67.1027 7.68817 67.1027 10.4635C67.1027 13.3159 66.0214 15.7955 63.8939 17.8666C61.7948 19.9099 59.2378 20.9322 56.2982 20.8286C53.4773 20.758 51.0305 19.7062 49.0673 17.691C47.1061 15.6776 46.1379 13.2654 46.1379 10.4958C46.1379 7.6182 47.214 5.1055 49.3112 3.06284C51.4122 0.983983 53.9733 -0.0382967 56.9148 0.0664602ZM56.3869 16.8994L56.3922 16.8997C58.2536 16.986 59.788 16.3945 61.0887 15.042L61.0917 15.0389L61.0947 15.0359C62.4439 13.6641 63.0607 12.1165 63.0325 10.2887C62.9714 8.54637 62.3217 7.07942 61.0936 5.82558C59.8798 4.58637 58.4587 3.99601 56.7528 3.99601H56.7464L56.7401 3.99591C54.9419 3.96721 53.4518 4.588 52.1672 5.83845C50.8895 7.08223 50.2713 8.53784 50.2413 10.3147C50.2114 12.0646 50.7737 13.5852 51.9934 14.8883C53.2154 16.1939 54.6433 16.8419 56.3816 16.8993L56.3869 16.8994Z"
                                stroke="black" />
                            <path
                                d="M98.4761 20.4097H94.3063V8.36749C94.3063 7.10643 93.9272 6.0522 93.2195 5.19803C92.5435 4.38197 91.6423 3.96376 90.5113 3.96376C89.3142 3.96376 88.3032 4.34481 87.4152 5.09601C86.5911 5.82003 86.1862 6.70967 86.1862 7.81929V20.4097H81.9833V7.81929C81.9833 6.70959 81.5789 5.82319 80.726 5.10003L80.7212 5.09599L80.7165 5.09187C79.8666 4.34724 78.8595 3.96376 77.6583 3.96376C76.534 3.96376 75.6634 4.37695 74.9832 5.19803C74.282 6.04434 73.9295 7.06296 73.9295 8.36749V20.4097H69.7598V8.65771C69.7598 6.22421 70.4672 4.15176 71.9911 2.59364C73.3966 1.11935 75.2405 0.307645 77.462 0.132967C78.9707 0.0093412 80.357 0.265466 81.5954 0.913897C82.5332 1.40493 83.361 2.1076 84.0848 2.99857C84.8086 2.1076 85.6363 1.40493 86.5741 0.913897C87.8125 0.265466 89.1989 0.0093412 90.7076 0.132967C92.9326 0.307919 94.7725 1.12116 96.2077 2.58969C97.729 4.14278 98.4761 6.21298 98.4761 8.65771V20.4097Z"
                                stroke="black" />
                            <path
                                d="M126.64 13.4484V14.8169C126.64 15.133 126.834 15.595 127.473 16.2173C128.05 16.7794 128.612 16.9856 129.144 16.964L129.148 16.9638L129.152 16.9637C130.072 16.9357 130.691 16.6914 131.145 16.2495C131.53 15.8752 131.75 15.34 131.779 14.57C131.791 13.9415 131.617 13.4661 131.293 13.0882C130.957 12.6963 130.408 12.3489 129.571 12.0868L129.568 12.086L127.354 11.4105C126.076 11.0195 125.042 10.3784 124.317 9.4613C123.592 8.54397 123.222 7.40934 123.167 6.10961C123.091 4.47695 123.673 3.04688 124.851 1.89963L124.856 1.89539L124.86 1.89121C126.051 0.767997 127.487 0.140286 129.173 0.0667764C130.679 -0.00776855 132.054 0.488209 133.274 1.45857C134.554 2.44956 135.267 3.70101 135.383 5.21526L135.384 5.22133L135.466 6.57577H131.216V5.40077C131.216 5.03263 131.034 4.70132 130.679 4.43908C130.316 4.17171 129.793 3.99786 129.219 3.99603C128.181 4.02378 127.359 4.79108 127.336 5.77266L127.335 5.79167L127.334 5.81064C127.298 6.28892 127.425 6.65467 127.691 6.9607C127.973 7.28598 128.459 7.59583 129.223 7.84397L131.413 8.55434L131.415 8.5553C132.781 9.0101 133.886 9.70214 134.672 10.6554C135.46 11.6109 135.887 12.7793 135.98 14.1171C136.131 16.0047 135.431 17.6723 133.951 19.041L133.948 19.0444L133.944 19.0479C132.472 20.3732 130.744 21.0013 128.801 20.8922L128.799 20.892L128.797 20.8919C126.996 20.7824 125.491 20.0439 124.272 18.7858L124.268 18.7816L124.264 18.7773C123.068 17.5043 122.471 15.9661 122.471 14.2042V13.4484H126.64Z"
                                stroke="black" />
                        </svg>
                    </div>

                    <div class="header-menu d-none d-md-block">
                        <ul class="header-menu-list d-flex align-items-center p-0 m-0">
                            <li class="header-menu-item">
                                <a href="index.php?task=pagehome" class="header-menu-link">Home</a>
                            </li>
                            <li class="header-menu-item">
                                <a href="" class="header-menu-link">Shop</a>
                            </li>
                            <li class="header-menu-item">
                                <a href="" class="header-menu-link">Product</a>
                            </li>
                            <li class="header-menu-item">
                                <a href="" class="header-menu-link me-0">Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-feature">
                        <ul class="header-feature-list d-flex m-0 p-0">
                            <li class="header-feture-item">
                                <button href="" class="header-feature-link border-0 bg-transparent"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                                    aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                        fill="black">
                                        <path
                                            d="M17.7241 16.1932L13.6436 12.1127C14.626 10.8049 15.1563 9.21299 15.1546 7.57728C15.1546 3.39919 11.7554 0 7.57728 0C3.39919 0 0 3.39919 0 7.57728C0 11.7554 3.39919 15.1546 7.57728 15.1546C9.21299 15.1563 10.8049 14.626 12.1127 13.6436L16.1932 17.7241C16.3998 17.9088 16.6692 18.0073 16.9461 17.9996C17.2231 17.9918 17.4865 17.8783 17.6824 17.6824C17.8783 17.4865 17.9918 17.2231 17.9996 16.9461C18.0073 16.6692 17.9088 16.3998 17.7241 16.1932ZM2.16494 7.57728C2.16494 6.50682 2.48237 5.4604 3.07708 4.57034C3.6718 3.68029 4.51709 2.98657 5.50607 2.57693C6.49504 2.16728 7.58328 2.0601 8.63318 2.26893C9.68307 2.47777 10.6475 2.99325 11.4044 3.75018C12.1613 4.5071 12.6768 5.47149 12.8856 6.52138C13.0945 7.57128 12.9873 8.65952 12.5776 9.64849C12.168 10.6375 11.4743 11.4828 10.5842 12.0775C9.69416 12.6722 8.64774 12.9896 7.57728 12.9896C6.14237 12.9879 4.76672 12.4171 3.75208 11.4025C2.73744 10.3878 2.16666 9.01219 2.16494 7.57728Z"
                                            fill="" />
                                    </svg>
                                </button>

                                <div class="offcanvas offcanvas-end w-offcanvas" tabindex="-1" id="offcanvasSearch"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasTopLabel" class="offcanvas-search-title fst-italic">Search
                                            Product</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <form action="" class="position-relative form-input-search w-100">
                                            <input class="input-search border-0" type="text" name="" id="">
                                            <input class="position-absolute btn-submit-search" type="button"
                                                value="Search">
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="header-feture-item d-none d-md-block">
                                <a href="index.php?task=pagelogin" class="header-feature-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18"
                                        fill="black">
                                        <path
                                            d="M13.7143 18H12V16.2857C12 15.6037 11.7291 14.9497 11.2468 14.4674C10.7646 13.9852 10.1106 13.7143 9.42857 13.7143H4.28571C3.60373 13.7143 2.94968 13.9852 2.46744 14.4674C1.9852 14.9497 1.71429 15.6037 1.71429 16.2857V18H0V16.2857C0 15.1491 0.451529 14.059 1.25526 13.2553C2.05898 12.4515 3.14907 12 4.28571 12H9.42857C10.5652 12 11.6553 12.4515 12.459 13.2553C13.2628 14.059 13.7143 15.1491 13.7143 16.2857V18ZM6.85714 10.2857C6.18177 10.2857 5.51302 10.1527 4.88906 9.89424C4.2651 9.63578 3.69815 9.25696 3.22059 8.77941C2.74304 8.30185 2.36422 7.7349 2.10576 7.11094C1.84731 6.48698 1.71429 5.81823 1.71429 5.14286C1.71429 4.46749 1.84731 3.79873 2.10576 3.17477C2.36422 2.55081 2.74304 1.98387 3.22059 1.50631C3.69815 1.02875 4.2651 0.649929 4.88906 0.391477C5.51302 0.133024 6.18177 -1.00638e-08 6.85714 0C8.22111 2.03247e-08 9.52922 0.541835 10.4937 1.50631C11.4582 2.47078 12 3.77889 12 5.14286C12 6.50683 11.4582 7.81493 10.4937 8.77941C9.52922 9.74388 8.22111 10.2857 6.85714 10.2857ZM6.85714 8.57143C7.76646 8.57143 8.63853 8.21021 9.28151 7.56722C9.92449 6.92424 10.2857 6.05217 10.2857 5.14286C10.2857 4.23354 9.92449 3.36147 9.28151 2.71849C8.63853 2.07551 7.76646 1.71429 6.85714 1.71429C5.94783 1.71429 5.07576 2.07551 4.43278 2.71849C3.78979 3.36147 3.42857 4.23354 3.42857 5.14286C3.42857 6.05217 3.78979 6.92424 4.43278 7.56722C5.07576 8.21021 5.94783 8.57143 6.85714 8.57143Z"
                                            fill="" />
                                    </svg>
                                </a>
                            </li>
                            <li class="header-feture-item me-0">
                                <button href="" class="header-feature-link bg-transparent border-0"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                                    aria-controls="offcanvasRight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18"
                                        fill="black">
                                        <path
                                            d="M15.3 18H0.9C0.661305 18 0.432387 17.9052 0.263604 17.7364C0.0948211 17.5676 0 17.3387 0 17.1V0.9C0 0.661305 0.0948211 0.432387 0.263604 0.263604C0.432387 0.0948211 0.661305 0 0.9 0H15.3C15.5387 0 15.7676 0.0948211 15.9364 0.263604C16.1052 0.432387 16.2 0.661305 16.2 0.9V17.1C16.2 17.3387 16.1052 17.5676 15.9364 17.7364C15.7676 17.9052 15.5387 18 15.3 18ZM14.4 16.2V1.8H1.8V16.2H14.4ZM5.4 3.6V5.4C5.4 6.11608 5.68446 6.80284 6.19081 7.30919C6.69716 7.81554 7.38392 8.1 8.1 8.1C8.81608 8.1 9.50284 7.81554 10.0092 7.30919C10.5155 6.80284 10.8 6.11608 10.8 5.4V3.6H12.6V5.4C12.6 6.59347 12.1259 7.73807 11.282 8.58198C10.4381 9.42589 9.29347 9.9 8.1 9.9C6.90653 9.9 5.76193 9.42589 4.91802 8.58198C4.07411 7.73807 3.6 6.59347 3.6 5.4V3.6H5.4Z"
                                            fill="" />
                                    </svg>
                                </button>

                                <div class="offcanvas offcanvas-end w-offcanvas" tabindex="-1" id="offcanvasCart"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasTopLabel" class="offcanvas-cart-title fst-italic m-0">Shopping
                                            Cart
                                        </h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="cart-body d-flex justify-content-center">
                                            <div class="cart-empty">
                                                <div class="cart-empty-title">
                                                    Your cart is empty.
                                                </div>

                                                <div class="cart-empty-para">
                                                    You may check out all the available products and buy some in the
                                                    shop.
                                                </div>

                                                <div class="cart-empty-btn-link w-100 d-flex justify-content-center">
                                                    <a href=""
                                                        class="cart-empty-btn d-flex justify-content-center align-items-center">
                                                        Return to shop
                                                        <svg class="ms-2 cart-empty-btn-icon"
                                                            xmlns="http://www.w3.org/2000/svg" width="8" height="9"
                                                            viewBox="0 0 8 9" fill="currentColor">
                                                            <path
                                                                d="M0.861539 8.5L0 7.63846L5.90769 1.73077H0.615385V0.5H8V7.88462H6.76923V2.59231L0.861539 8.5Z"
                                                                fill="" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="position-relative mb-5">
            <img class="w-100" src="./asset/media/img/bannerheading.jpg" alt="">
            <h1 class="position-absolute top-50 start-50 translate-middle header-page-title">Manager</h1>
        </div>
        <div class="container-fluid mb-5">
            <div class="container-primary">
                <div class="row ">
                    <div class="col-xl-3 col-12">
                        <div>
                            <div class="pageuser-category-title mb-4">
                                Management Directory
                            </div>
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button
                                    class="pageuser-category-list-item bg-transparent border-0 mb-3 text-start active"
                                    id="btnMemberManagement" data-bs-toggle="pill" data-bs-target="#memberManagement"
                                    type="button" role="tab" aria-controls="memberManagement"
                                    aria-selected="true">Member
                                    Management</button>
                                <button class="pageuser-category-list-item bg-transparent border-0 mb-3 text-start"
                                    id="btnProductManagement" data-bs-toggle="pill" data-bs-target="#productManagement"
                                    type="button" role="tab" aria-controls="productManagement"
                                    aria-selected="false">Product
                                    Management</button>
                                <button class="pageuser-category-list-item bg-transparent border-0 mb-3 text-start"
                                    id="btnOderManagement" data-bs-toggle="pill" data-bs-target="#oderManagement"
                                    type="button" role="tab" aria-controls="oderManagement" aria-selected="false">Order
                                    Management</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="memberManagement" role="tabpanel"
                                aria-labelledby="btnMemberManagement">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link font-albert active" id="btnListUser"
                                            data-bs-toggle="tab" data-bs-target="#listUser" type="button" role="tab"
                                            aria-controls="listUser" aria-selected="true">List Users</button>
                                        <button class="nav-link font-albert" id="btnAddUser" data-bs-toggle="tab"
                                            data-bs-target="#addUser" type="button" role="tab" aria-controls="addUser"
                                            aria-selected="false">Add User</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="listUser" role="tabpanel"
                                        aria-labelledby="btnListUser">
                                        <div class="text-center table-responsive">
                                            <table class="table text-center w-100" style="border-collapse: collapse;">
                                                <tbody class="w-100 ">
                                                    <tr>
                                                        <th class="font-albert">ID</th>
                                                        <th class="font-albert">Name</th>
                                                        <th class="font-albert">Email</th>
                                                        <th class="font-albert">Phone</th>
                                                        <th class="font-albert">Password</th>
                                                        <th class="font-albert">Created</th>
                                                        <th class="font-albert">Revision</th>
                                                        <th class="font-albert">Delete</th>
                                                    </tr>
                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($listUser)) { ?>
                                                        <tr>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['id_user'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['name'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['email'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['phone'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['password'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;">
                                                                <?php echo $row['created'] ?>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;"><a
                                                                    class="btn btn-outline-primary text-decoration-none rounded-0"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#changeInformationModal"
                                                                    href="index.php?task=deleteuser&iduser=<?php echo $row['id_user'] ?>">Change</a>

                                                                <div class="modal fade" id="changeInformationModal"
                                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title font-albert"
                                                                                    id="exampleModalLabel">
                                                                                    Change Information User</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <input name="name" type="text"
                                                                                    class="user-infor w-100 mb-3"
                                                                                    placeholder="Your name">

                                                                                <input name="email" type="email"
                                                                                    class="user-infor w-100 mb-3"
                                                                                    placeholder="Your email*">

                                                                                <input name="phone" type="number"
                                                                                    class="user-infor w-100 mb-3"
                                                                                    placeholder="Your phone*">

                                                                                <input name="address" type="text"
                                                                                    class="user-infor w-100 mb-3"
                                                                                    placeholder="Addresss*">

                                                                                <input name="password" type="password"
                                                                                    class="user-infor w-100 mb-3"
                                                                                    placeholder="Password*">

                                                                                <input name="repassword" type="password"
                                                                                    class="user-infor w-100 "
                                                                                    placeholder="Password*">
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="button"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="font-albert" style="line-height: 40px;"><a
                                                                    class="btn btn-outline-danger text-decoration-none rounded-0"
                                                                    href="index.php?task=deleteuser&iduser=<?php echo $row['id_user'] ?>">Remove</a>
                                                            </td>
                                                        </tr>
                                                    <?php }
                                                    ; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="addUser" role="tabpanel"
                                        aria-labelledby="btnAddUser">
                                        <div class="row">
                                            <div class="col-xl-8 col-12">
                                                <form action="save-user" method="POST">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        ID user
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="iduser" id="">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        User name
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="name" id="">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        Email
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="email" id="">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        Phone
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="phone" id="">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        Password
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="password" id="">
                                                    <div class="add-user-title mt-4 mb-3">
                                                        Created
                                                    </div>
                                                    <input class="w-100 form-control outline-none" type="text"
                                                        name="created" id="">
                                                    <button class="btn btn-outline-success float-end mt-5 rounded-0">Add
                                                        user</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="productManagement" role="tabpanel"
                                aria-labelledby="btnProductManagement">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="btnListProduct" data-bs-toggle="tab"
                                            data-bs-target="#listProduct" type="button" role="tab"
                                            aria-controls="listProduct" aria-selected="true">List Product</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="btnAddProduct" data-bs-toggle="tab"
                                            data-bs-target="#addProduct" type="button" role="tab"
                                            aria-controls="addProduct" aria-selected="false">Add Product</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="listProduct" role="tabpanel"
                                        aria-labelledby="btnListProduct">
                                        <div class="text-center table-responsive">
                                            <table class="table text-center w-100">
                                                <tr>
                                                    <th class="font-albert">ID</th>
                                                    <th class="font-albert">Name</th>
                                                    <th class="font-albert">Media</th>
                                                    <th class="font-albert">Price</th>
                                                    <th class="font-albert">Quantity</th>
                                                    <th class="font-albert">Revision</th>
                                                    <th class="font-albert">Delete</th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addProduct" role="tabpanel"
                                        aria-labelledby="btnAddProduct">
                                        <div class="row">
                                            <div class="col-xl-8 col-12">
                                                <div class="add-product-title mt-4 mb-3">
                                                    Title
                                                </div>
                                                <input class="w-100 form-control outline-none" type="text"
                                                    name="titleproduct" id="">
                                                <div class="add-product-title mt-4 mb-3">
                                                    Description
                                                </div>
                                                <textarea class="w-100 form-control outline-none" name="description"
                                                    id="" cols="30" rows="10"></textarea>
                                                <div class="add-product-title mt-4 mb-3">
                                                    Media
                                                </div>
                                                <input class="outline-none form-control-sm form-control" type="file"
                                                    name="" id="">
                                                <div class="add-product-title mt-4 mb-3">
                                                    Pricing
                                                </div>
                                                <input class="w-100 form-control outline-none" type="number" name=""
                                                    id="">
                                                <div class="add-product-title mt-4 mb-3">
                                                    Quantity
                                                </div>
                                                <input class="w-100 form-control outline-none" type="number" name=""
                                                    id="">
                                                <button class="btn btn-outline-success float-end mt-5 rounded-0">Add
                                                    Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="oderManagement" role="tabpanel"
                                aria-labelledby="btnOderManagement">
                                <a class="text-decoration-none d-block pb-3 pt-3 border-bottom" href="">
                                    <div class="row">
                                        <div class="col-md-3 col-12">
                                            <div class="">
                                                <img class="oder-product-img w-100" src="./asset/media/img/image 87.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 ps-5 ">
                                            <p class="oder-customer-name font-albert">Customer name:
                                                <span>Nguyễn Thanh Hằng</span>
                                            </p>
                                            <p class="oder-customer-name font-albert">Product name:
                                                <span>Green bag</span>
                                            </p>
                                            <p class="oder-customer-name font-albert">The number of products:
                                                <span>01</span>
                                            </p>
                                            <p class="oder-customer-name font-albert">Total payment:
                                                <span>$130.00</span>
                                            </p>
                                            <p class="oder-customer-name font-albert">Delivery address:
                                                <span>Hà Nội</span>
                                            </p>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="container">
                <div class="footer">
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="footer-logo">
                                <svg xmlns="http://www.w3.org/2000/svg" width="136" height="21" viewBox="0 0 136 21"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.6294 19.4909C19.3546 17.3401 21.2491 13.2363 20.7662 9.21957L17.0673 11.3552C16.8003 13.3451 15.6463 15.194 13.773 16.2756C10.5658 18.1273 6.4646 17.0284 4.61288 13.8211C2.76116 10.6138 3.86007 6.51271 7.06733 4.661C9.59584 3.20116 12.6799 3.57522 14.7794 5.37048L9.07289 8.66512L8.1594 13.5234L20.1057 6.62617C19.9208 6.16171 19.7001 5.70482 19.4428 5.25907C16.5658 0.276014 10.194 -1.43132 5.21096 1.44567C0.227882 4.32265 -1.47942 10.6944 1.39755 15.6775C4.27452 20.6606 10.6463 22.3679 15.6294 19.4909Z"
                                        fill="black" />
                                    <path
                                        d="M115.452 2.96261V12.0436C115.452 13.3747 114.95 14.5074 113.928 15.5041C112.905 16.47 111.771 16.9311 110.432 16.9311C109.087 16.9311 107.922 16.4666 106.902 15.504C105.888 14.5154 105.411 13.3857 105.411 12.0436V0.547644L101.307 2.91681V11.7534C101.307 14.318 102.168 16.5098 103.875 18.2423L103.878 18.2451L103.881 18.248C105.623 19.9795 107.814 20.8612 110.432 20.8612C113.046 20.8612 115.24 19.9812 116.952 18.2451C118.695 16.5114 119.556 14.3173 119.556 11.7534V0.593453L115.452 2.96261Z"
                                        fill="black" />
                                    <path
                                        d="M45.1611 13.4806L44.3659 15.1255L44.3556 15.144C43.3056 17.035 41.946 18.4756 40.2689 19.4349C38.5921 20.394 36.6436 20.8459 34.4573 20.8289L34.4542 20.8289C31.5082 20.7943 28.9688 19.7845 26.8398 17.8156C24.6983 15.8352 23.6193 13.3828 23.5837 10.5372C23.548 7.65233 24.5944 5.19781 26.7308 3.15279L26.7331 3.1506L26.7354 3.14843C28.8907 1.11908 31.4624 0.0365812 34.4524 0.00149869C36.5945 -0.0329126 38.5937 0.525727 40.4356 1.62914L40.4397 1.63161L40.4438 1.63412C42.166 2.69474 43.4778 4.02503 44.249 5.70514L44.2499 5.70711L45.0943 7.57542H40.6119L40.3867 7.20322C39.1026 5.08118 37.2001 3.99065 34.5475 3.93137C32.814 3.9033 31.2827 4.49431 29.8596 5.79128L29.8569 5.79375L29.8541 5.7962C28.3827 7.1116 27.6871 8.65432 27.6871 10.4313C27.6871 12.2169 28.3573 13.736 29.7092 15.0533C31.0555 16.3334 32.645 16.96 34.4841 16.9312L34.486 16.9311L34.4879 16.9311C37.1909 16.9016 39.124 15.8591 40.4314 13.8342L40.6598 13.4806H45.1611Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M56.9148 0.0664602C59.7302 0.170541 62.1774 1.21981 64.1425 3.27073C66.0974 5.27866 67.1027 7.68817 67.1027 10.4635C67.1027 13.3159 66.0214 15.7955 63.8939 17.8666C61.7948 19.9099 59.2378 20.9322 56.2982 20.8286C53.4773 20.758 51.0305 19.7062 49.0673 17.691C47.1061 15.6776 46.1379 13.2654 46.1379 10.4958C46.1379 7.6182 47.214 5.1055 49.3112 3.06284C51.4122 0.983983 53.9733 -0.0382967 56.9148 0.0664602ZM56.3869 16.8994L56.3922 16.8997C58.2536 16.986 59.788 16.3945 61.0887 15.042L61.0917 15.0389L61.0947 15.0359C62.4439 13.6641 63.0607 12.1165 63.0325 10.2887C62.9714 8.54637 62.3217 7.07942 61.0936 5.82558C59.8798 4.58637 58.4587 3.99601 56.7528 3.99601H56.7464L56.7401 3.99591C54.9419 3.96721 53.4518 4.588 52.1672 5.83845C50.8895 7.08223 50.2713 8.53784 50.2413 10.3147C50.2114 12.0646 50.7737 13.5852 51.9934 14.8883C53.2154 16.1939 54.6433 16.8419 56.3816 16.8993L56.3869 16.8994Z"
                                        fill="black" />
                                    <path
                                        d="M98.4761 20.4097H94.3063V8.36749C94.3063 7.10643 93.9272 6.0522 93.2195 5.19803C92.5435 4.38197 91.6423 3.96376 90.5113 3.96376C89.3142 3.96376 88.3032 4.34481 87.4152 5.09601C86.5911 5.82003 86.1862 6.70967 86.1862 7.81929V20.4097H81.9833V7.81929C81.9833 6.70959 81.5789 5.82319 80.726 5.10003L80.7212 5.09599L80.7165 5.09187C79.8666 4.34724 78.8595 3.96376 77.6583 3.96376C76.534 3.96376 75.6634 4.37695 74.9832 5.19803C74.282 6.04434 73.9295 7.06296 73.9295 8.36749V20.4097H69.7598V8.65771C69.7598 6.22421 70.4672 4.15176 71.9911 2.59364C73.3966 1.11935 75.2405 0.307645 77.462 0.132967C78.9707 0.0093412 80.357 0.265466 81.5954 0.913897C82.5332 1.40493 83.361 2.1076 84.0848 2.99857C84.8086 2.1076 85.6363 1.40493 86.5741 0.913897C87.8125 0.265466 89.1989 0.0093412 90.7076 0.132967C92.9326 0.307919 94.7725 1.12116 96.2077 2.58969C97.729 4.14278 98.4761 6.21298 98.4761 8.65771V20.4097Z"
                                        fill="black" />
                                    <path
                                        d="M126.64 13.4484V14.8169C126.64 15.133 126.834 15.595 127.473 16.2173C128.05 16.7794 128.612 16.9856 129.144 16.964L129.148 16.9638L129.152 16.9637C130.072 16.9357 130.691 16.6914 131.145 16.2495C131.53 15.8752 131.75 15.34 131.779 14.57C131.791 13.9415 131.617 13.4661 131.293 13.0882C130.957 12.6963 130.408 12.3489 129.571 12.0868L129.568 12.086L127.354 11.4105C126.076 11.0195 125.042 10.3784 124.317 9.4613C123.592 8.54397 123.222 7.40934 123.167 6.10961C123.091 4.47695 123.673 3.04688 124.851 1.89963L124.856 1.89539L124.86 1.89121C126.051 0.767997 127.487 0.140286 129.173 0.0667764C130.679 -0.00776855 132.054 0.488209 133.274 1.45857C134.554 2.44956 135.267 3.70101 135.383 5.21526L135.384 5.22133L135.466 6.57577H131.216V5.40077C131.216 5.03263 131.034 4.70132 130.679 4.43908C130.316 4.17171 129.793 3.99786 129.219 3.99603C128.181 4.02378 127.359 4.79108 127.336 5.77266L127.335 5.79167L127.334 5.81064C127.298 6.28892 127.425 6.65467 127.691 6.9607C127.973 7.28598 128.459 7.59583 129.223 7.84397L131.413 8.55434L131.415 8.5553C132.781 9.0101 133.886 9.70214 134.672 10.6554C135.46 11.6109 135.887 12.7793 135.98 14.1171C136.131 16.0047 135.431 17.6723 133.951 19.041L133.948 19.0444L133.944 19.0479C132.472 20.3732 130.744 21.0013 128.801 20.8922L128.799 20.892L128.797 20.8919C126.996 20.7824 125.491 20.0439 124.272 18.7858L124.268 18.7816L124.264 18.7773C123.068 17.5043 122.471 15.9661 122.471 14.2042V13.4484H126.64Z"
                                        fill="black" />
                                </svg>
                            </div>

                            <ul class="footer-infor">
                                <li class="footer-infor-link" style="width: 270px;">Address: 1234 Fashion Street, Suite
                                    567, New York, NY 10001</li>
                                <li class="footer-infor-link">Email: <span>info@fashionshop.com</span></li>
                                <li class="footer-infor-link">Phone: <span>(212) 555-1234</span></li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="footer-title">
                                Help
                            </div>

                            <ul class="footer-infor">
                                <li class="footer-infor-link">Privacy Policy</li>
                                <li class="footer-infor-link">Return + Exchanges</li>
                                <li class="footer-infor-link">Shipping</li>
                                <li class="footer-infor-link">Orders + Payments</li>
                                <li class="footer-infor-link">FAQ’s</li>
                                <li class="footer-infor-link">Compare</li>
                                <li class="footer-infor-link">My Wishlist</li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="footer-title">
                                About us
                            </div>

                            <ul class="footer-infor">
                                <li class="footer-infor-link">Our Story</li>
                                <li class="footer-infor-link">Visit Our Store</li>
                                <li class="footer-infor-link">Contact Us</li>
                                <li class="footer-infor-link">Account</li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-6 col-xl-3">
                            <div class="footer-title">
                                Follow us
                            </div>

                            <ul class="footer-infor">
                                <li class="footer-infor-link">Facebook</li>
                                <li class="footer-infor-link">Pinterest</li>
                                <li class="footer-infor-link">Instagram</li>
                                <li class="footer-infor-link">Spotify</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom d-md-flex d-block justify-content-between">
                    <div class="footer-bottom-left mb-4 mb-md-0">
                        © 2023 Novela Store. All Rights Reserved
                    </div>

                    <div class="footer-bottom-right d-flex">
                        <div class="footer-bottom-right-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30"
                                fill="none">
                                <path
                                    d="M43.75 0H3.75C1.625 0 0 1.625 0 3.75V26.25C0 28.375 1.75 30 3.75 30H43.75C45.875 30 47.5 28.375 47.5 26.25V3.75C47.5 1.625 45.75 0 43.75 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M43.75 1.25C45.125 1.25 46.25 2.375 46.25 3.75V26.25C46.25 27.625 45.125 28.75 43.75 28.75H3.75C2.375 28.75 1.25 27.625 1.25 26.25V3.75C1.25 2.375 2.375 1.25 3.75 1.25H43.75Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M35.375 12.625H35C34.5 13.875 34.125 14.5 33.75 16.375H36.125C35.75 14.5 35.75 13.625 35.375 12.625ZM39 20H36.875C36.75 20 36.75 20 36.625 19.875L36.375 18.75L36.25 18.5H33.25C33.125 18.5 33 18.5 33 18.75L32.625 19.875C32.625 20 32.5 20 32.5 20H29.875L30.125 19.375L33.75 10.875C33.75 10.25 34.125 10 34.75 10H36.625C36.75 10 36.875 10 36.875 10.25L38.625 18.375C38.75 18.875 38.875 19.25 38.875 19.75C39 19.875 39 19.875 39 20ZM22.25 19.625L22.75 17.375C22.875 17.375 23 17.5 23 17.5C23.875 17.875 24.75 18.125 25.625 18C25.875 18 26.25 17.875 26.5 17.75C27.125 17.5 27.125 16.875 26.625 16.375C26.375 16.125 26 16 25.625 15.75C25.125 15.5 24.625 15.25 24.25 14.875C22.75 13.625 23.25 11.875 24.125 11C24.875 10.5 25.25 10 26.25 10C27.75 10 29.375 10 30.125 10.25H30.25C30.125 11 30 11.625 29.75 12.375C29.125 12.125 28.5 11.875 27.875 11.875C27.5 11.875 27.125 11.875 26.75 12C26.5 12 26.375 12.125 26.25 12.25C26 12.5 26 12.875 26.25 13.125L26.875 13.625C27.375 13.875 27.875 14.125 28.25 14.375C28.875 14.75 29.5 15.375 29.625 16.125C29.875 17.25 29.5 18.25 28.5 19C27.875 19.5 27.625 19.75 26.75 19.75C25 19.75 23.625 19.875 22.5 19.5C22.375 19.75 22.375 19.75 22.25 19.625ZM17.875 20C18 19.125 18 19.125 18.125 18.75C18.75 16 19.375 13.125 19.875 10.375C20 10.125 20 10 20.25 10H22.5C22.25 11.5 22 12.625 21.625 14C21.25 15.875 20.875 17.75 20.375 19.625C20.375 19.875 20.25 19.875 20 19.875M6.25 10.25C6.25 10.125 6.5 10 6.625 10H10.875C11.5 10 12 10.375 12.125 11L13.25 16.5C13.25 16.625 13.25 16.625 13.375 16.75C13.375 16.625 13.5 16.625 13.5 16.625L16.125 10.25C16 10.125 16.125 10 16.25 10H18.875C18.875 10.125 18.875 10.125 18.75 10.25L14.875 19.375C14.75 19.625 14.75 19.75 14.625 19.875C14.5 20 14.25 19.875 14 19.875H12.125C12 19.875 11.875 19.875 11.875 19.625L9.875 11.875C9.625 11.625 9.25 11.25 8.75 11.125C8 10.75 6.625 10.5 6.375 10.5L6.25 10.25Z"
                                    fill="#142688" />
                            </svg>
                        </div>
                        <div class="footer-bottom-right-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30"
                                fill="none">
                                <path
                                    d="M44.25 0H4.25C2.125 0 0.5 1.625 0.5 3.75V26.25C0.5 28.375 2.25 30 4.25 30H44.25C46.375 30 48 28.375 48 26.25V3.75C48 1.625 46.25 0 44.25 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M44.25 1.25C45.625 1.25 46.75 2.375 46.75 3.75V26.25C46.75 27.625 45.625 28.75 44.25 28.75H4.25C2.875 28.75 1.75 27.625 1.75 26.25V3.75C1.75 2.375 2.875 1.25 4.25 1.25H44.25Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M30.375 10.375C30.625 9.125 30.375 8.25 29.625 7.5C28.875 6.625 27.5 6.25 25.75 6.25H20.625C20.25 6.25 20 6.5 19.875 6.875L18 19.5C18 19.75 18.125 20 18.375 20H21.75L22.25 15.75L24.5 13L30.375 10.375Z"
                                    fill="#003087" />
                                <path
                                    d="M30.375 10.375L30.125 10.625C29.5 14.125 27.375 15.375 24.375 15.375H23C22.625 15.375 22.375 15.625 22.25 16L21.5 20.875L21.25 22.125C21.25 22.375 21.375 22.625 21.625 22.625H24.25C24.625 22.625 24.875 22.375 24.875 22.125V22L25.375 19V18.875C25.375 18.625 25.75 18.375 26 18.375H26.375C29 18.375 31 17.375 31.5 14.375C31.75 13.125 31.625 12.125 31 11.375C30.875 10.75 30.625 10.5 30.375 10.375Z"
                                    fill="#3086C8" />
                                <path
                                    d="M29.625 10.125C29.5 10 29.375 10 29.25 10C29.125 10 29 10 28.875 9.875C28.5 9.75 28 9.75 27.5 9.75H23.75C23.625 9.75 23.5 9.75 23.5 9.875C23.25 10 23.125 10.125 23.125 10.375L22.25 15.875V16C22.25 15.625 22.625 15.375 23 15.375H24.625C27.75 15.375 29.75 14.125 30.375 10.625V10.375C30.25 10.25 30 10.125 29.75 10.125H29.625Z"
                                    fill="#012169" />
                            </svg>
                        </div>
                        <div class="footer-bottom-right-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30"
                                fill="none">
                                <path
                                    d="M43.75 0H3.75C1.625 0 0 1.625 0 3.75V26.25C0 28.375 1.75 30 3.75 30H43.75C45.875 30 47.5 28.375 47.5 26.25V3.75C47.5 1.625 45.75 0 43.75 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M43.75 1.25C45.125 1.25 46.25 2.375 46.25 3.75V26.25C46.25 27.625 45.125 28.75 43.75 28.75H3.75C2.375 28.75 1.25 27.625 1.25 26.25V3.75C1.25 2.375 2.375 1.25 3.75 1.25H43.75Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M18.75 23.75C23.5825 23.75 27.5 19.8325 27.5 15C27.5 10.1675 23.5825 6.25 18.75 6.25C13.9175 6.25 10 10.1675 10 15C10 19.8325 13.9175 23.75 18.75 23.75Z"
                                    fill="#EB001B" />
                                <path
                                    d="M28.75 23.75C33.5825 23.75 37.5 19.8325 37.5 15C37.5 10.1675 33.5825 6.25 28.75 6.25C23.9175 6.25 20 10.1675 20 15C20 19.8325 23.9175 23.75 28.75 23.75Z"
                                    fill="#F79E1B" />
                                <path
                                    d="M27.5 15C27.5 12 26 9.375 23.75 7.875C21.5 9.5 20 12.125 20 15C20 17.875 21.5 20.625 23.75 22.125C26 20.625 27.5 18 27.5 15Z"
                                    fill="#FF5F00" />
                            </svg>
                        </div>
                        <div class="footer-bottom-right-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="30" viewBox="0 0 56 30"
                                fill="none">
                                <path
                                    d="M51.5417 0H4.875C2.39583 0 0.5 1.625 0.5 3.75V26.25C0.5 28.375 2.54167 30 4.875 30H51.5417C54.0208 30 55.9167 28.375 55.9167 26.25V3.75C55.9167 1.625 53.875 0 51.5417 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M51.5417 1.25C53.1458 1.25 54.4583 2.375 54.4583 3.75V26.25C54.4583 27.625 53.1458 28.75 51.5417 28.75H4.875C3.27083 28.75 1.95833 27.625 1.95833 26.25V3.75C1.95833 2.375 3.27083 1.25 4.875 1.25H51.5417Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M18 19.625C18 20 17.7083 20 17.2708 19.875C14.5 18.875 12.8958 15.75 13.9167 13.125C14.5 11.75 15.6667 10.625 17.2708 10.125C17.8542 9.875 18 10 18 10.375V19.625ZM20.9167 10.375C20.9167 10 20.9167 10 21.3542 10.125C24.4167 11.125 26.0208 14.25 24.8542 16.875C24.2708 18.25 23.1042 19.375 21.5 19.875C20.9167 20.125 20.9167 20 20.9167 19.625V10.375ZM31.4167 6.25H19.4583C25 6.25 29.375 10.125 29.375 15C29.375 19.875 25 23.75 19.4583 23.75H31.4167C36.9583 23.75 41.3333 19.875 41.3333 15C41.3333 10.125 36.9583 6.25 31.4167 6.25Z"
                                    fill="#3086C8" />
                                <path
                                    d="M51.5417 0H4.875C2.39583 0 0.5 1.625 0.5 3.75V26.25C0.5 28.375 2.54167 30 4.875 30H51.5417C54.0208 30 55.9167 28.375 55.9167 26.25V3.75C55.9167 1.625 53.875 0 51.5417 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M51.5417 1.25C53.1458 1.25 54.4583 2.375 54.4583 3.75V26.25C54.4583 27.625 53.1458 28.75 51.5417 28.75H4.875C3.27083 28.75 1.95833 27.625 1.95833 26.25V3.75C1.95833 2.375 3.27083 1.25 4.875 1.25H51.5417Z"
                                    fill="#006FCF" />
                                <path
                                    d="M13.5827 12.835L14.7115 15.18H12.4627L13.5827 12.835ZM37.0254 12.9325H32.684V13.9663H36.9554V15.515H32.6927V16.6675H37.0342V17.5912L40.0631 14.785L37.0342 11.86L37.0254 12.9325ZM16.5169 10.0075H22.3429L23.6365 12.4263L24.8352 10H39.9581L41.5302 11.4875L43.1562 10H50.1023L44.9704 14.815L50.0498 19.6H43.0002L41.4281 18.1125L39.7875 19.6H15.1271L14.4067 18.1125H12.7588L12.0369 19.6H6.33333L11.1254 10H16.1275L16.5169 10.0075ZM29.1504 11.355H25.8852L23.6977 15.775L21.3279 11.355H18.0875V17.3675L15.0833 11.355H12.1769L8.70312 18.245H10.9708L11.6912 16.7575H15.4771L16.1975 18.245H20.1642V13.3263L22.7177 18.2525H24.4531L26.9906 13.3413V18.2537H29.1169L29.1519 11.3538L29.1504 11.355ZM42.7713 14.815L46.4623 11.355H43.8052L41.4704 13.5125L39.2129 11.355H30.6175V18.2525H39.0904L41.4442 16.08L43.7017 18.2525H46.436L42.7713 14.815Z"
                                    fill="#F3F3F3" />
                            </svg>
                        </div>
                        <div class="footer-bottom-right-item me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="30" viewBox="0 0 48 30"
                                fill="none">
                                <path
                                    d="M44.25 0H4.25C2.125 0 0.5 1.625 0.5 3.75V26.25C0.5 28.375 2.25 30 4.25 30H44.25C46.375 30 48 28.375 48 26.25V3.75C48 1.625 46.25 0 44.25 0Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M44.25 1.25C45.625 1.25 46.75 2.375 46.75 3.75V26.25C46.75 27.625 45.625 28.75 44.25 28.75H4.25C2.875 28.75 1.75 27.625 1.75 26.25V3.75C1.75 2.375 2.875 1.25 4.25 1.25H44.25Z"
                                    fill="#F3F3F3" />
                                <path
                                    d="M15.5 19.625C15.5 20 15.25 20 14.875 19.875C12.5 18.875 11.125 15.75 12 13.125C12.5 11.75 13.5 10.625 14.875 10.125C15.375 9.875 15.5 10 15.5 10.375V19.625ZM18 10.375C18 10 18 10 18.375 10.125C21 11.125 22.375 14.25 21.375 16.875C20.875 18.25 19.875 19.375 18.5 19.875C18 20.125 18 20 18 19.625V10.375ZM27 6.25H16.75C21.5 6.25 25.25 10.125 25.25 15C25.25 19.875 21.5 23.75 16.75 23.75H27C31.75 23.75 35.5 19.875 35.5 15C35.5 10.125 31.75 6.25 27 6.25Z"
                                    fill="#3086C8" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>




</html>