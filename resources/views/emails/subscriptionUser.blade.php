@component('mail::message')
    # Vous vous etes abonné

    ## Prenom

    {{ $information['first_name'] }}

    ## Nom

    {{ $information['last_name'] }}

    ## email

    {{ $information['email'] }}

    ## start

    {{ $information['start'] }}

    ## end

    {{ $information['last'] }}

    ## price

    {{ $information['prix'] }}


@endcomponent
