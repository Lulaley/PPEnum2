<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<center>
<img class="resize" src='images/contacter/contacter.png'>
</center>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Une question ? <small>N'existez pas à nous contacter</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Saissir votre nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Saissir votre e-mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choisir :</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer le message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Notre localisation</legend>
            <address>
                <strong>FILELEC</strong><br>
                5 Boulevard Malesherbes<br>
                75008 Paris<br>
                <abbr title="Phone">
                    Tél:</abbr>
                +00 (123) 456 7890
            </address>
            <address>
                <strong>E-mail</strong><br>
                <a href="mailto:#">filelec@filelec.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
