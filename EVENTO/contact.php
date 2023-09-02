<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>


    <link rel="stylesheet" href="contactPage.css">
    <script src="contactPage.js"></script>


</head>

<body>



    <div class="row">
        <div class="col-xs-12">
            <div id="left">

                <h1>Contact Us</h1>

                <div class="formbox">
                    <form>
                        <input name="name" type="text" class="short" placeholder="Name" onfocus="this.placeholder=''"
                            onblur="this.placeholder='Name'" />
                        <input name="email" type="text" class="short" placeholder="Email" onfocus="this.placeholder=''"
                            onblur="this.placeholder='Email'" />
                        <input name="subject" type="text" class="feedback-input" placeholder="Subject"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Subject'" />
                        <textarea name="text" class="feedback-input" placeholder="Message" onfocus="this.placeholder=''"
                            onblur="this.placeholder='Message'"></textarea>
                        <input type="submit" value="SEND" />
                    </form>



                </div>

            </div>

        </div>

        <div id="right">
            <div id="map">

            </div>
            <div id="map-overlap">
                BMS College Of Engineering <br>
                Bull Temple Rd <br>
                Basavanagudi, Bengaluru, Karnataka 560019
                <br>
                <br>
                

            </div>
        </div>
        <div id="cleared"></div>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDts9C9iWNF83ExezBXJLIJ0g2dwoERg08&callback=initMap"
        async defer></script>

</body>

</html>