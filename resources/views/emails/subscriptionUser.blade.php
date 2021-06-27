@component('mail::message')
    # Vous vous etes abonné

    ## Prenom

    {{ $information['name'] }}

    ## email

    {{ $information['email'] }}

    ## start

    {{ $information['start'] }}

    ## end

    {{ $information['last'] }}

    ## price

    {{ $information['prix'] }}


@endcomponent
