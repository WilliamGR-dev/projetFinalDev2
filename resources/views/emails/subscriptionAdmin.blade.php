@component('mail::message')
    # Un client c'est abonné

    ## Prenom

    {{ $information['first_name'] }}

    ## Nom

    {{ $information['last_name'] }}

    ## email

    {{ $information['email'] }}


@endcomponent
