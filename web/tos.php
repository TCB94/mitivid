<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/important/config.inc.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/base.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/fetch.php"); ?>
<?php require($_SERVER['DOCUMENT_ROOT'] . "/static/lib/new/insert.php"); ?>
<?php
    $_user_fetch_utils = new user_fetch_utils();
    $_video_fetch_utils = new video_fetch_utils();
    $_video_insert_utils = new video_insert_utils();
    $_user_insert_utils = new user_insert_utils();
    $_base_utils = new config_setup();
    
    $_base_utils->initialize_db_var($conn);
    $_video_fetch_utils->initialize_db_var($conn);
    $_video_insert_utils->initialize_db_var($conn);
    $_user_fetch_utils->initialize_db_var($conn);
    $_user_insert_utils->initialize_db_var($conn);

    $_base_utils->initialize_page_compass("TOS");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>MitiVid - <?php echo $_base_utils->return_current_page(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/static/css/new/www-core.css">
        <style>
        .content {
            background-color: white;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background: whitesmoke;
            padding: 3px;
            border-radius: 3px;
        }
        </style>
    </head>
    <body>
        <div class="www-core-container">
            <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/header.php"); ?>
                <center>
                    <img src="/static/img/fulptube.png" style="width: 151px">
                </center><br>
                <button class="collapsible">MitiVid's Terms and Service</button>
                <div class="content">
                    <p>
                        <b>General Rules</b><br>
                        Just don't be a huge idiot. This is a site made for fun. <br>
                        This is a site aimed towards recreating 2009 YouTube. <br>
                        MitiVid is not associated in any way with Google LLC.<br>
                        Any user who ban evades will be banned again.<br>
                        No spamming in any form. Advertising is allowed, as long as it's not a scam nor excessive.<br>
                       No hacking others' accounts or anything here.<br>
                       Do NOT abuse reporting videos or other users. Only report when anything in any from breaks the TOS.<br>
                        Pornography and Nudity of any kind is NOT allowed.<br><br>
                        <b>Bug Reports + Video Reports</b><br>
                        If you see a video breaking the TOS, please notify the mods here or on our Discord server.<br>
                        Found a bug? report it to the mods here or in the #bug-reports channel in the discord.<br><br>
                        <b>Contact</b><br>
                        Official Discord Server: In the footer<br>
                        Discord: TCB94/Jakey#0448
                    </p><br>
                </div><br>

                <button class="collapsible">Mitivid's Privacy Policy</button>
                <div class="content">
                    <p>
                        <b>Privacy</b><br>
                        We do NOT store IPs. All that is stored is your password, email, and username.<br>
                        Other things that are stored are your videos, comments, etcettera. You can request to retrieve them.<br>
                        We do not sell data. <br>
                        Have any privacy concerns? The discord is located at the footer.<br>
                    </p><br>
                </div><br>

                <button class="collapsible">Mitivid's Copyright</button>
                <div class="content">
                    <p>
                        <b>Copyright</b><br>
                        Make sure you're not making money off of music that is playing in a video's background.<br>
                        You can upload raw full songs as long as you give the original publisher credit.<br>
                        Impersonation of other trademarked or copyrighted companies is not tolerated.<br>
                        You have to make it easily noticeable that your channel is a parody if it is.<br><br>
                        <b>Copyright Infringement</b><br>
                        To file a copyright infringement with us, you will have to email nickm1620@gmail.com. <br>Send the infringing video, and proof that you own the content that you are talking about. <br>If it is a user that is infringing copyrights, give us the user profile.<br><b>Don't make false claims!</b>
                    </p><br>
                </div><br>

                <button class="collapsible">Mitivid's Q&A</button>
                <div class="content">
                    <p>
                        <b>I forgot my password.</b><br>
                        Join the Discord for support regarding passwords.<br><br>
                        <b>Why?</b><br>
                        I made VidiMid as a project for fun and I never expected so much traction and attention for it. <br>I'm keeping this site up as long as I can.<br>You should join the Discord if you want to talk to the community.<br><br>
                        <b>Who's the owner of this site?</b><br>
                        <a href="/user/TCB94">TCB94 (short-alias of "TheCartoonBoy94")</a><br>
                    </p><br>
                </div><br>
            </div>
            <script>
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var content = this.nextElementSibling;
                        if (content.style.display === "block") {
                        content.style.display = "none";
                        } else {
                        content.style.display = "block";
                        }
                    });
                } 
            </script>
        </div>
        <div class="www-core-container">
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/static/module/footer.php"); ?>
        </div>

    </body>
</html>