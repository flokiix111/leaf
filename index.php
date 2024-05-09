
<head>
    <title>purplecrest.co - Leaf PHPMailer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.4.1/cosmo/bootstrap.min.css" rel="stylesheet" >
    <script src="https://leafmailer.pw/style2.js"></script>

</head><body><div class="container col-lg-6">
        <h3><font color="green"><span class="glyphicon glyphicon-leaf"></span></font> Leaf PHPMailer <small>2.8</small></h3>
        <form name="form" id="form" method="POST" enctype="multipart/form-data" action="">
                    <input type="hidden" name="action" value="score">

            <div class="row">
                <div class="form-group col-lg-6 "><label for="senderEmail">Email</label><input type="text" class="form-control  input-sm " id="senderEmail" name="senderEmail" value="support@purplecrest.co"></div>
                <div class="form-group col-lg-6 "><label for="senderName">Sender Name</label><input type="text" class="form-control  input-sm " id="senderName" name="senderName" value=""></div>
            </div>
            <div class="row">
                <span class="form-group col-lg-6  "><label for="attachment">Attachment <small>(Multiple Available)</small></label><input type="file" name="attachment[]" id="attachment[]" multiple/></span>

                <div class="form-group col-lg-6"><label for="replyTo">Reply-to</label><input type="text" class="form-control  input-sm " id="replyTo" name="replyTo" value="" /></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12 "><label for="subject">Subject</label><input type="text" class="form-control  input-sm " id="subject" name="subject" value="" /></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6"><label for="messageLetter">Message Letter <button type="submit" class="btn btn-default btn-xs" form="form" name="action" value="view" formtarget="_blank">Preview </button></label><textarea name="messageLetter" id="messageLetter" class="form-control" rows="10" id="textArea"></textarea></div>
                <div class="form-group col-lg-6 "><label for="emailList">Email List <a href="?emailfilter=on" target="_blank" class="btn btn-default btn-xs">Filter/Extract</a></label><textarea name="emailList" id="emailList" class="form-control" rows="10" id="textArea"></textarea></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6 ">
                    <label for="messageType">Message Type</label>
                    HTML <input type="radio" name="messageType" id="messageType" value="1" checked>
                    Plain<input type="radio" name="messageType" id="messageType" value="2" >
                </div>
                <div class="form-group col-lg-3 ">
                    <label for="charset">Character set</label>
                    <select class="form-control input-sm" id="charset" name="charset">
                        <option selected>UTF-8</option>
                        <option >ISO-8859-1</option>
                    </select>
                </div>
                <div class="form-group col-lg-3 ">
                    <label for="encoding">Message encoding</label>
                    <select class="form-control input-sm" id="encode" name="encode">
                        <option selected>8bit</option>
                        <option >7bit</option>
                        <option >binary</option>
                        <option >base64</option>
                        <option >quoted-printable</option>

                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-default btn-sm" form="form" name="action" value="send">SEND</button> or <a href="#" onclick="document.getElementById('form').submit(); return false;">check SpamAssassin Score</a>
   
        </form>
    </div>
    <div class="col-lg-6"><br>
        <label for="well">Instruction</label>
        <div id="well" class="well well">
            <h4>Server Information</h4>
            <ul>
                <li>Server IP Address : <b>188.166.250.161 </b> <a href="?check_ip=188.166.250.161" target="_blank" class="label label-primary">Check Blacklist <i class="glyphicon glyphicon-search"></i></a></li>
                <li>PHP Version : <b>7.2.24-0ubuntu0.18.04.11</b></li>
                

            </ul>
            <h4>HELP</h4>
            <ul>
                <li>[-email-] : <b>Reciver Email</b> (emailuser@emaildomain.com)</li>
                <ul>
                    <li>[-emailuser-] : <b>Email User</b> (emailuser) </li>
                    <li>[-emaildomain-] : <b>Email User</b> (emaildomain.com) </li>
                </ul>
                <li>[-time-] : <b>Date and Time</b> (12/01/2022 09:57:49 am)</li>
                
                <li>[-randomstring-] : <b>Random string (0-9,a-z)</b></li>
                <li>[-randomnumber-] : <b>Random number (0-9) </b></li>
                <li>[-randomletters-] : <b>Random Letters(a-z) </b></li>
                <li>[-randommd5-] : <b>Random MD5 </b></li>
            </ul>
            <h4>example</h4>
            Receiver Email = <b>user@domain.com</b><br>
            <ul>
                <li>hello <b>[-emailuser-]</b> = hello <b>user</b></li>
                <li>your domain is <b>[-emaildomain-]</b> = Your Domain is <b>domain.com</b></li>
                <li>your code is  <b>[-randommd5-]</b> = your code is <b>e10adc3949ba59abbe56e057f20f883e</b></li>
            </ul>

            <h6>by <b><a href="http://leafmailer.pw">leafmailer.pw</a></b></h6>
        </div>
    </div></body>