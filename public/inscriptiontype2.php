<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>formulaire inscription ou renseignements séniors à domicile Association santé éducation et prévention sur les
        territoires du Limousin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="formulaire inscription ou renseignements séniors à domicile Association santé éducation et prévention sur les territoires du Limousin">

        <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <!-- MES CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/main.css" rel="stylesheet">
    <!--<link href="css/contact-form.css" rel="stylesheet">-->
    <!-- GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
    <!-- MANIMATE CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- lightbox  
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />-->


    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!---pop up--->
    <script type="text/javascript">
        function MM_changeProp(objId, x, theProp, theValue) { //v9.0
            var obj = null; with (document) {
                if (getElementById)
                    obj = getElementById(objId);
            }
            if (obj) {
                if (theValue == true || theValue == false)
                    eval("obj.style." + theProp + "=" + theValue);
                else eval("obj.style." + theProp + "='" + theValue + "'");
            }
        }
    </script>
    <!---map hover---->
    <script type="text/javascript">
        function MM_preloadImages() { //v3.0
            var d = document; if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments; for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) { d.MM_p[j] = new Image; d.MM_p[j++].src = a[i]; }
            }
        }

        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x; if (!d) d = document; if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document; n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n]; for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n); return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0, x, a = MM_swapImage.arguments; document.MM_sr = new Array; for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) { document.MM_sr[j++] = x; if (!x.oSrc) x.oSrc = x.src; x.src = a[i + 2]; }
        }
    </script>




    <!----fin carousel---->


</head>

<body id="haut" name="haut"
    onLoad="MM_preloadImages('img/carte-Asept-limousin-87v.png','img/carte-Asept-limousin-23v.png','img/carte-Asept-limousin-19v.png')">

    <div class="main-content" id="content">

        <?php 
    include 'inc/menu.php';
  ?>

        <!-------------------------------------début SWIPER------------------------------------->
        <section class="transparent">
            <div class="swiper-container" id="suite">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide3">
                        <div class="blocTexte">
                            <h2 data-swiper-parallax="-400"><span>Renseignements ou Inscription</span>
                                Séniors à domicile en Limousin</h2>
                            <!---
           <p class="text-center"><a href="a-propos-de-l-asept.html" class="btn resa centrageitem1" style="text-shadow: none!important" >Qui sommes-nous ?</a></p>--->
                        </div>
                    </div>

                </div>
                <!---
        <div class="swiper-pagination"></div>        
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>--->
            </div>
            <div class="courbe"></div>

        </section>
        <!-------------------------------------fin swiper-------------------------------------->


        <section class="clienteles">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 ">
                        <h2 class="titrebis">Demande de renseignements ou inscription | Séniors à domicile en Limousin
                        </h2>

                        <div class="row">
                            <form class="col-sm-12" action="" method="POST">

                                <div class="row">

                                    <div class="col-sm-6">
                                        <label for="edit-submitted-nom">Nom <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-nom" name="nom"
                                            value="" size="60" maxlength="128" class="form-text required" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="edit-submitted-prenom">Prénom <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-prenom" name="prenom"
                                            value="" size="60" maxlength="128" class="form-text required" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="edit-submitted-telephone">Téléphone <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-telephone"
                                            name="tel" value="" size="60" maxlength="128"
                                            class="form-text required" />
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-email">Email <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" class="email form-text form-email required"
                                            type="email" id="edit-submitted-email" name="email" size="60" />
                                    </div>
                                    <hr>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="edit-submitted-je-souhaite">Je souhaite: <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <select required id="edit-submitted-je-souhaite" name="souhait"
                                            class="form-select required">
                                            <option value="" selected="selected">- Sélectionner -</option>
                                            <option value=" des renseignements">Des renseignements</option>
                                            <option value="S'inscrire">M&#039;inscrire</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="edit-submitted-je-souhaite">Je choisi mon département : <span
                                                class="form-required" title="Ce champ est obligatoire.">*</span></label>
                                        <select required id="edit-submitted-je-souhaite" name="departement"
                                            class="form-select required">
                                            <option value="" selected="selected">- Sélectionner -</option>
                                            <option value="correze">19 Corrèze</option>
                                            <option value="creuse">23 Creuse</option>
                                            <option value="hautevienne">87 Haute Vienne</option>
                                        </select>
                                    </div>

                                    <hr>
                                    <!------->
                                    <div class="col-sm-12 col-md-12">
                                        <label for="edit-submitted-formation-senior-a-domicile"><strong>Conférence débat
                                                seniors à domicile </strong></label>
                                        <div id="edit-submitted-formation-senior-a-domicile" class="form-checkboxes">
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-conference-debat">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-2"
                                                    name="atelier[]" value="Conférences-débats" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-2">Conférence-débat
                                                </label>

                                            </div>

                                        </div>
                                    </div>

                                    <!------->
                                    <!------->
                                    <div class="col-sm-12 col-md-12">
                                        <label for="edit-submitted-formation-senior-a-domicile"><strong>Réunion de
                                                prévention seniors à domicile </strong></label>
                                        <div id="edit-submitted-formation-senior-a-domicile" class="form-checkboxes">
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-conference-debat">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-2"
                                                    name="atelier[]" value="Réunion de
                                                    prévention" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-2">Réunion de
                                                    prévention </label>

                                            </div>

                                        </div>
                                    </div>

                                    <!------->
                                    <!------->
                                    <div class="col-sm-12 col-md-12">
                                        <label for="edit-submitted-formation-senior-a-domicile"><strong>Actions Théâtre
                                                seniors à domicile </strong></label>
                                        <div id="edit-submitted-formation-senior-a-domicile" class="form-checkboxes">
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-theatre">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-1"
                                                    name="atelier[]" value="Pièce de Théâtre"
                                                    class="form-checkbox" />
                                                Pièce de
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-1">Théâtre</label>
                                            </div>

                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-conference-debat">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-2"
                                                    name="atelier[]" value="Théâtre-Forum" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-2">Théâtre-Forum
                                                </label>

                                            </div>

                                        </div>
                                    </div>

                                    <!------->
                                    <div class="col-sm-12 col-md-12">
                                        <label for="edit-submitted-formation-senior-a-domicile"><strong>Ateliers seniors
                                                à domicile </strong></label>
                                        <div id="edit-submitted-formation-senior-a-domicile" class="form-checkboxes">

                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-atelier-vitalite">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-3"
                                                    name="atelier[]"
                                                    value="Atelier Vitalité" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-3">Vitalité </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-peps-eureka">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-4"
                                                    name="atelier[]"
                                                    value="Les Ateliers mémoire PEPS EURÊKA " class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-4">Mémoire PEPS
                                                    EURÊKA </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-Physique-equilibre">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-5"
                                                    name="atelier[]"
                                                    value="Physique et Equilibre" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-5">Objectif Physique
                                                    et Equilibre </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-Nutrition-Sante-Seniors">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-6"
                                                    name="atelier[]"
                                                    value="Nutrition Santé Séniors" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-6">Nutrition Santé
                                                    Séniors </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-theatre">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-1"
                                                    name="atelier[]" value="Nutri
                                                    Activ"
                                                    class="form-checkbox" /> <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-1">Nutri
                                                    Activ</label>
                                            </div>

                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-sante-volant">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-7"
                                                    name="atelier[]"
                                                    value="Santé vous bien au volant" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-7">Santé vous bien
                                                    au volant </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-habitat-facile">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-8"
                                                    name="atelier[]"
                                                    value="Vers un habitat facile à vivre" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-8">Vers un habitat
                                                    facile à vivre </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-cap-bien-etre">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-9"
                                                    name="atelier[]"
                                                    value="Ateliers CAP bien être" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-9"> CAP bien être
                                                </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-preservons-nous">
                                                <input type="checkbox"
                                                    id="edit-submitted-formation-senior-a-domicile-10"
                                                    name="atelier[]"
                                                    value="Ateliers Préservons-nous" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-10">Préservons-nous
                                                </label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-conference-debat">
                                                <input type="checkbox" id="edit-submitted-formation-senior-a-domicile-2"
                                                    name="atelier[]" value="Sommeil" class="form-checkbox" />
                                                <label class="option"
                                                    for="edit-submitted-formation-senior-a-domicile-2">Sommeil</label>
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-gestes-qui-sauvent">
                                                <input type="checkbox"
                                                    id="edit-submitted-formation-senior-a-domicile-11" name="atelier[]"
                                                    value="Bienvenue à la retraite" class="form-checkbox" />
                                                Bienvenue à la retraite
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-gestes-qui-sauvent">
                                                <input type="checkbox"
                                                    id="edit-submitted-formation-senior-a-domicile-12"
                                                    name="atelier[]"
                                                    value="Autonomie Numérique" class="form-checkbox" />
                                                Autonomie Numérique
                                            </div>
                                            <div
                                                class="form-item form-type-checkbox form-item-submitted-formation-senior-a-domicile-gestes-qui-sauvent">
                                                <input type="checkbox"
                                                    id="edit-submitted-formation-senior-a-domicile-13"
                                                    name="atelier[]"
                                                    value="Ateliers en ligne" class="form-checkbox" />
                                                Ateliers en ligne
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-annee-de-naissance">Année de naissance <span
                                                class="form-required" title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-annee-de-naissance"
                                            name="naissance" value="" size="60" maxlength="128"
                                            class="form-text required" />
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-adresse">Adresse <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <div class="form-textarea-wrapper resizable">
                                            <textarea required id="edit-submitted-adresse" name="adresse" cols="60"
                                                rows="5" class="form-textarea required">
  </textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-code-postal">Code postal <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-code-postal"
                                            name="codePostal" value="" size="60" maxlength="128"
                                            class="form-text required" />
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="edit-submitted-ville">Ville <span class="form-required"
                                                title="Ce champ est obligatoire.">*</span></label>
                                        <input required="required" type="text" id="edit-submitted-ville" name="ville"
                                            value="" size="60" maxlength="128" class="form-text required" />
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-caisse-de-retraite">Caisse de retraite <span
                                                class="form-required" title="Ce champ est obligatoire.">*</span></label>
                                        <select required id="edit-submitted-caisse-de-retraite" name="choixCaisse"
                                            class="form-select required">
                                            <option value="" selected="selected">- Sélectionner -</option>
                                            <option value="CARSAT">CARSAT</option>
                                            <option value="MSA">MSA</option>
                                            <option value="RSI">RSI</option>
                                            <option value="CNRACL">CNRACL</option>
                                            <option value="CAMIEG">CAMIEG</option>
                                            <option value="ENIM">ENIM</option>
                                            <option value="MGEN">MGEN</option>
                                            <option value="SNCF">SNCF</option>
                                            <option value="Autre"> Autre (preciser)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <label for="edit-submitted-autre-caisse-de-retraite">autre caisse de retraite
                                        </label>
                                        <input type="text" id="edit-submitted-autre-caisse-de-retraite"
                                            name="autreCaisse" value="" size="60" maxlength="128" class="form-text" />
                                    </div>
                                    <div class="col-sm-12 ">
                                        

                                        <div id="edit-submitted-rgpd" class="form-checkboxes">
                                            <div class="form-item form-type-checkbox form-item-submitted-rgpd-ok">
                                                <input required="required" type="checkbox" id="edit-submitted-rgpd-1"
                                                    name="submitted[rgpd][ok]" value="ok" class="form-checkbox" />
                                                <label class="option text-justify" for="edit-submitted-rgpd-1">En
                                                    cochant cette case, j’accepte que les informations saisies dans ce
                                                    formulaire de contact soient exploitées par l’ASEPT du Limousin dans
                                                    le cadre de ma demande de renseignements. La base légale de ce
                                                    traitement repose sur le consentement. Ces informations, sauf
                                                    opposition ne seront conservées que 3 ans après la fin du dernier
                                                    contact de votre part. Conformément à la loi informatique et
                                                    libertés du 6 juillet 1978 et au Règlement Européen du 27 avril
                                                    2016, vous bénéficiez d’un droit d’opposition, d’accès, de
                                                    rectification, de suppression de vos données. Vous pouvez exercer
                                                    vos droits en vous adressant à <label class="option text-justify"
                                                        for="edit-submitted-rgpd-1"> <a
                                                            href="mailto:contact@asept-limousin.fr">contact@asept-limousin.fr
                                                        </a></label>
                                                        

                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-12 ">
                                        <div class="form-actions">
                                            <!-- Notre boite de vérification -->
                                            <div class="g-recaptcha"
                                                data-sitekey="6LcWQtoaAAAAAKYBIYwNmxLf4QjxRkBbpcRPCtXA">
                                            </div>
                                            <input
                                                class="btn btn-lg btn-primary webform-submit button-primary form-submit"
                                                type="submit" value="Envoyer" />
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!----->
                    <?php 
                        include 'inc/carte.php'
                    ?>
                    <!---->
                </div>

            </div>
        </section>

        <div class="clear"></div>
        <!-------------------------------------FOOTER-------------------------------------->
        <?php
            include 'inc/footer.php'
        ?>
        
        


    </div>



    <!------------------------ SCRIPT ---------------------------->



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/comportements.js"></script>

    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <!---map rwd----->

    <script src="js/jquery.rwdImageMaps.min.js"></script>
    <script>
        $(document).ready(function (e) {
            $('img[usemap]').rwdImageMaps();

            /*$('area').on('click', function() {
                alert($(this).attr('alt') + ' clicked');
            });*/
        });
    </script>


    <!--
 <script src="js/jquery.unveil.js"></script>

    <script>
    $(function() {
         $("img").unveil(200);
    });
    </script>--->

</body>

</html>
<?php
//Recaptcha
ini_set('display_errors', 'off');
// Ma clé privée
$secret = "6LcWQtoaAAAAABFFvHBa5-GcL6BJFCx-Clg8ixcf";
// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];
// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
  . $secret
  . "&response=" . $response
  . "&remoteip=" . $remoteip;

$decode = json_decode(file_get_contents($api_url), true);



if ($decode['success'] == true) {

    // Récuperation input formulaire
    
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $tel=$_POST['tel'];
    $email= $_POST['email'];
    $souhait= $_POST['souhait'];  
    $departement=$_POST['departement'];
    $atelier = $_POST['atelier'];
    $naissance= $_POST['naissance'];
    $adresse = $_POST['adresse'];
    $postal = $_POST['codePostal'];
    $ville= $_POST['ville'];
    $caisse= $_POST['choixCaisse'];
    $autreCaisse= $_POST['autreCaisse'];

   
    // destinataire
    $to  = 'dussoulier.marie-@msa-services.fr;auriol.sonia@msa-services.fr;brac.pauline@msa-services.fr';
    
    // Sujet
      $subject = 'Demande de renseignements ou inscription type 2';
    
    // message format HTML
    $messageHTML = "

    Nom: $nom <br>
    Prenom: $prenom <br>
    Tel: $tel <br>
    Email: $email <br> <br>
    Souhaite: $souhait <br><br>
    <hr>
    Departement: $departement <br>
    Naissance: $naissance <br>
    Adresse: $adresse <br>
    Code Postal: $postal <br>
    Ville: $ville <br>
    Caisse retraite: $caisse <br>
    ";
if($autreCaisse){
    $messageHTML.=" autre caisse :";
    $messageHTML.=  $autrecaisse;
    
}
$messageHTML.=" <br>";
    $messageHTML.=" <hr> <b>Ateliers concernés:</b>  <br> <br>";
    foreach($atelier as $value){
        $messageHTML.= $value; 
        $messageHTML.="<br>"; 
    }

         
    
         // En-tête
         $headers[] = 'MIME-Version: 1.0';
         $headers[] = 'Content-type: text/html; charset=UTF-8';
    
    
         // Envoi
         mail($to, $subject, $messageHTML, implode("\r\n", $headers));
    
}else{
     //pas humain
}


         
    
   