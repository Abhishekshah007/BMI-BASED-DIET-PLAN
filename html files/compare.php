<html>

<head>
    <title>
        BMI
    </title>
    <link rel="stylesheet" href="../css files/instyle.css" />
    <link rel="stylesheet" href="../css files/checkbmi.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />




</head>

<body>
    <ion-app>
        <div class="logo">
            <img src="../img/bmi.jpg" />
            <a href="./sign-up.php" style="margin-right:30px ;">Sign in</a>
        </div>
        <div class="navbar">
            <div class="menu">
                <nav class="links">
                    <ul>
                        <!-- <li><a href="./index.php">Feed</a></li> -->
                        <li><a href="./index.php">Check BMI</a></li>
                        <li><a href="./dietPlan.php">Diet Plan</a></li>
                        <li><a href="./compare.php">Compare</a></li>
                        <li><a href="./About.php">About</a></li>
                        <li><a href="./profile.php">Profile</a></li>
                    </ul>
                </nav>
            </div>

        </div>


        <ion-content color="primary">
            <ion-card>

               
                    <ion-text color="secondary" class="ion-text-center">
                        <h1 >Check Your BMI !</h1>
                        <hr>
                    </ion-text>
                

                <ion-grid class="ion-margin-top">
                    <ion-row>
                        <ion-col size="3">

                            <ion-card>
                                <ion-card-title color="secondary ion-margin-top">&nbsp;&nbsp;Previous Data</ion-card-title>
                                <br>
                                <ion-item class="ion-activated">

                                    <ion-label position="stacked">Enter Your Age</ion-label>
                                    <ion-input type="number" clear-input="true" min="1" maxlength="2">
                                    </ion-input>

                                </ion-item>

                                <ion-item>
                                <br>

                                    <ion-label position="stacked">Enter your previous BMI</ion-label>
                                    <ion-input id="perv_bmi" type="number" clear-input="true" minlength="2"
                                        maxlength="3" required="true">
                                    </ion-input>
                                </ion-item>


                            </ion-card>
                        </ion-col>




                        <!-- 2 -->


                        <ion-col size="3" offset="2">


                            <ion-button size="large" id="btn" class="ion-margin-top ion-margin-left" style="margin-left:25px">Compare</ion-button>

                        </ion-col>


                        <!-- 3 -->


                        <ion-col size="3" offset="1">

                            <ion-card class="ion-margin-right " style="
    margin: 0px;
">
                                <ion-card-title color="danger" class="ion-margin-top">&nbsp;&nbsp;Current Data</ion-card-title>
                                <ion-item class="ion-activated">

                                    <ion-label position="stacked">Enter Your Age</ion-label>
                                    <ion-input id="age" type="number" clear-input="true" min="1" maxlength="2">
                                    </ion-input>

                                </ion-item>

                                <ion-item>

                                    <ion-label position="stacked">Enter your Weight(:Kg:):</ion-label>
                                    <ion-input id="Weight" type="number" clear-input="true" minlength="2" maxlength="3"
                                        required="true">
                                    </ion-input>
                                </ion-item>
                                <ion-item class="ion-activated">

                                    <ion-label position="stacked">Enter Your Height(:Ft:):</ion-label>
                                    <ion-input id="height" type="number" clear-input="true" min="1" maxlength="3">
                                    </ion-input>
                                    </ion-item>



                            </ion-card>

                            </ion-item>
                        </ion-col>
                    </ion-row>
                </ion-grid>

            </ion-card>

            <ion-card>
                <ion-item>
                    <div class="details">

                        <ion-text id="c-check"></ion-text>
                    </div>
                </ion-item>
            </ion-card>

        </ion-content>

    </ion-app>

    <script src="../js files/compare.js"></script>

</body>

</html>