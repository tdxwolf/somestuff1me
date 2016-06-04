<?
if(isset($X->user)){
        echo "<input id='whereami' type='hidden' value='".WEB."'></input>";
        echo "<script type='text/javascript' src='".WEBNODE."socket.io/socket.io.js'></script>";
        echo "<script type='text/javascript' src='".WEB."js/chat.js'></script>";
        echo "<div id='chat'>";
        echo "<div id='content'></div>
        <div class='controls'>
        <input id=\"name\" value=\"".$X->user['name']."\" type=\"hidden\" />
        <input id=\"name_chat\" value=\"".$X->user['name']."\" type=\"hidden\" />
        <div id='chattools'> <div id='reduce'>j</div><span id=\"users\">";
        foreach($X->OnlineUsers() as $user){
                echo "<div id=\"userIcon\" class=\"{$user['status']}\"><span>{$user['name']}</span></div>";
                //echo "<div id=\"userIcon\" class=\"{$user['online']}\"><span>{$user['name']}</span></div>";
        }
        echo "</span></div>
        <input id=\"field_chat\" />
        <input id='send' type='button' value='send'>
        </div></div>";
        //echo "<embed src='".WEB."beep.mp3' autostart='false' type='audio/mpeg' autoplay='false'  width='0' height='0' id='beep' enablejavascript='true'>";
}
echo "<script type='text/javascript' src='".WEB."js/".PAGE.".js'></script>";
echo "<script type='text/javascript' src='".WEB."js/js.js'></script>";
echo "</body>";
echo "</html>";
?>