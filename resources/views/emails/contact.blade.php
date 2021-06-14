@component('mail::message')
    # Contact

    ## Prenom

    {{ $information['first_name'] }}

    ## Nom

    {{ $information['last_name'] }}

    ## email

    {{ $information['email'] }}

    ## object

    {{ $information['object'] }}

    ## message

    {{ $information['message'] }}

@endcomponent
