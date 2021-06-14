<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('head')
        <script src="https://js.stripe.com/v3/"></script>
        <style>
            .InputElement{
                color: white !important;
            }
        </style>
    </head>
    <body class="display-flex flex-row app 100">
    <section style="height: 100vh;width: 100%;" class="d-flex flex-wrap">
        <section style="height: 100vh;width: 100%;background-color: #051127" class="">
            <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
                <div class="h-100 scroll">
                    @include('navbarprofile')
                    <hr>
                    <h3 class="text-white" style="margin-top: 100px">Informations Clients</h3>
                    <form method="post" id="payment-form" class="d-flex">
                        <div class="w-25">
                            <h3>Youzik autorisation</h3>
                            <div class="rounded-1 bg-light p-5 text-dark w-100">
                                Enura Indula<br>
                                371/C, Kapuwatta Rd,<br>
                                Kandana,<br>
                                Sri Lanka.<br>
                                Tel:  0765464362<br>
                            </div>
                        </div>
                        <div class="w-50" style="margin: 0 100px" >
                            <h4 class="w-100">Termes et conditions</h4>
                            <div class="w-100 scroll text-center" style="overflow-y: scroll;height: 200px">
                                Bienvenue sur le site Web YouZik!

                                Ces termes et conditions décrivent les règles et réglementations relatives à l'utilisation du site Web de YouZik, situé à youzik.com.

                                En accédant à ce site Web, nous supposons que vous acceptez ces termes et conditions. Ne continuez pas à utiliser le site Web YouZik si vous n'acceptez pas toutes les conditions générales énoncées sur cette page.

                                La terminologie suivante s'applique aux présentes conditions générales, à la déclaration de confidentialité et à l'avis de non-responsabilité et à tous les accords: «Client», «Vous» et «Votre» font référence à vous, la personne connectée à ce site Web et conforme aux conditions générales de la société. «L'entreprise», «nous-mêmes», «nous», «notre» et «nous» désignent notre entreprise. «Partie», «Parties» ou «Nous» désigne à la fois le Client et nous-mêmes. Toutes les conditions font référence à l'offre, à l'acceptation et à la prise en compte du paiement nécessaires pour entreprendre le processus de notre assistance au client de la manière la plus appropriée dans le but exprès de répondre aux besoins du client en ce qui concerne la fourniture des services déclarés de la société, conformément à et sous réserve de la loi en vigueur aux Pays-Bas. Toute utilisation de la terminologie ci-dessus ou d'autres mots au singulier, au pluriel, en majuscules et / ou il / elle ou eux, sont considérés comme interchangeables et donc comme faisant référence à ceux-ci.

                                Biscuits
                                Nous utilisons des cookies. En accédant au site Web YouZik, vous avez accepté d'utiliser des cookies en accord avec la politique de confidentialité de YouZik.

                                La plupart des sites Web interactifs utilisent des cookies pour nous permettre de récupérer les détails de l'utilisateur à chaque visite. Les cookies sont utilisés par notre site Web pour activer la fonctionnalité de certaines zones afin de faciliter la visite des personnes visitant notre site Web. Certains de nos affiliés / partenaires publicitaires peuvent également utiliser des cookies.

                                Licence
                                Sauf indication contraire, YouZik et / ou ses concédants de licence détiennent les droits de propriété intellectuelle pour tout le matériel sur le site Web YouZik. Tous les droits de propriété intellectuelle sont réservés. Vous pouvez y accéder à partir du site Web YouZik pour votre usage personnel, sous réserve des restrictions définies dans les présentes conditions générales.

                                Il ne faut pas:

                                Republier le matériel du site Web YouZik
                                Vendre, louer ou sous-licencier du matériel du site Web YouZik
                                Reproduire, dupliquer ou copier du matériel du site Web YouZik
                                Redistribuer le contenu du site Web YouZik
                                Le présent accord commencera à la date des présentes.

                                Certaines parties de ce site Web offrent aux utilisateurs la possibilité de publier et d'échanger des opinions et des informations dans certaines zones du site Web. YouZik ne filtre pas, ne modifie pas, ne publie pas et ne révise pas les commentaires avant leur présence sur le site Web. Les commentaires ne reflètent pas les points de vue et les opinions de YouZik, de ses agents et / ou affiliés. Les commentaires reflètent les points de vue et les opinions de la personne qui publie ses points de vue et opinions. Dans la mesure permise par les lois applicables, YouZik ne sera pas responsable des commentaires ou de toute responsabilité, dommages ou dépenses causés et / ou subis à la suite de toute utilisation et / ou publication et / ou apparition des commentaires sur ce site Internet.

                                YouZik se réserve le droit de surveiller tous les commentaires et de supprimer tout commentaire qui peut être considéré comme inapproprié, offensant ou qui entraîne une violation des présentes conditions générales.

                                Vous garantissez et déclarez que:

                                Vous avez le droit de publier les commentaires sur notre site Web et de disposer de toutes les licences et consentements nécessaires pour le faire;
                                Les Commentaires n'envahissent aucun droit de propriété intellectuelle, y compris, sans limitation, les droits d'auteur, brevets ou marques de commerce d'un tiers;
                                Les commentaires ne contiennent aucun matériel diffamatoire, calomnieux, offensant, indécent ou autrement illégal qui constitue une atteinte à la vie privée
                                Les commentaires ne seront pas utilisés pour solliciter ou promouvoir des activités commerciales ou personnalisées ou présenter des activités commerciales ou des activités illégales.
                                Vous accordez par la présente à YouZik une licence non exclusive pour utiliser, reproduire, éditer et autoriser d'autres personnes à utiliser, reproduire et éditer l'un de vos commentaires sous tous les formats, formats ou supports.

                                Hyperliens vers notre contenu
                                Les organisations suivantes peuvent créer un lien vers notre site Web sans autorisation écrite préalable:

                                Organismes gouvernementaux;
                                Moteurs de recherche;
                                Organisations de presse;
                                Les distributeurs d'annuaires en ligne peuvent créer un lien vers notre site Web de la même manière qu'ils créent un lien hypertexte vers les sites Web d'autres entreprises cotées; et
                                Entreprises accréditées à l'échelle du système, à l'exception de la sollicitation d'organisations à but non lucratif, de centres commerciaux caritatifs et de groupes de collecte de fonds caritatifs qui ne peuvent pas créer de lien hypertexte vers notre site Web.
                                Ces organisations peuvent créer un lien vers notre page d'accueil, vers des publications ou vers d'autres informations sur le site Web à condition que le lien: (a) ne soit en aucun cas trompeur; (b) n'implique pas à tort un parrainage, une approbation ou une approbation de la partie liante et de ses produits et / ou services; et (c) s'inscrit dans le contexte du site de la partie liante.
                            </div>
                            <input type="text" class="form-control" id="name" name="name">
                            <div id="card-element" class="mt-5 text-white"></div>
                        </div>
                        <div class="w-50" style="margin-right: 100px">
                            <div class="rounded-1 bg-light p-5 text-dark w-75 d-flex flex-column align-items-center ">
                                <h3 class="m-3">PERSONNEL</h3>
                                <h3 class="m-3">4,99€/mois</h3>
                            </div>

                            <div class="w-75 mt-3 mb-3 d-flex flex-column"  >
                                <label class="col-form-label">CODE PROMO</label>
                                <input type="text" class="form_control" placeholder="Entrer le code promo">
                            </div>

                            <div class="w-75 d-flex justify-content-between mt-5">
                                <div>Panier</div>
                                <div>4,99€</div>
                            </div>
                            <div class="w-75 d-flex justify-content-between mt-5">
                                <div>Total</div>
                                <div>4,99€</div>
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-outline-light">Annuler</button>
                    <button id="card-button" class="btn btn-outline-light" data-secret="">Payer maintenant</button>
                </div>
            </div>
        </section>
    </section>
    </body>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const card = elements.create("card", {
            style: {
                base:{
                    color:'#fff'
                }
            }
        });
        card.mount("#card-element");
        const cardHolderName = document.getElementById('name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        card.on('change', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });
        const form = document.getElementById('payment-form');
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            let displayError = document.getElementById('card-errors');
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: card,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
                //console.log(setupIntent);

                let paymentMethod = document.createElement('input');
                paymentMethod.setAttribute('type', 'hidden');
                paymentMethod.setAttribute('name', 'payment_method');
                paymentMethod.value = setupIntent.payment_method;
                form.appendChild(paymentMethod);
                form.submit();
            }
        });
    </script>
</html>
