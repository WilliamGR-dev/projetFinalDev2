@component('mail::message')
    # Un client c'est abonné

    ## Prenom

    {{ $information['name'] }}

    ## email

    {{ $information['email'] }}


@endcomponent
