<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('head')
    </head>
    <body class="display-flex flex-row app">
    @include('navbar')
    <section style="height: 100vh;width: 85%;" class="d-flex flex-wrap">
        <section style="height: 90vh;width: 85%;background-color: #051127" class="">
            <div style="padding-left: 50px;padding-top: 150px" class="overflow-hidden h-100">
                <div class="h-100 scroll" style="overflow-y: scroll;">
                    <h1 class="text-white">Rechercher</h1>
                    <h4 class="text-white">Genres & Moods</h4>
                    <hr>
                    <div style="overflow-x: scroll" class="scroll">
                        <div style="width: 100%;" class="d-flex mt-5 mb-5">
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 100%;" class="d-flex mt-5 mb-5">
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                            <div style="width: 225px;margin-left: 15px;margin-right: 15px">
                                <div class="d-flex justify-content-center align-items-center position-relative">
                                    <img src="./img/genre.png">
                                    <div class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center flex-column" style="border-radius: 10px; background-color: rgba(0,0,0,0.4)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75">
                                            <g id="Microphone" transform="translate(0 0.001)">
                                                <path id="Fill_1" data-name="Fill 1" d="M2.493,75A2.463,2.463,0,0,1,.73,74.266a2.518,2.518,0,0,1,0-3.545l14.3-14.38-2.366-2.379a2.518,2.518,0,0,1-.1-3.44L40.2,19.274A17.624,17.624,0,0,1,45.211,5.137a17.392,17.392,0,0,1,24.681,0A17.557,17.557,0,0,1,57.513,35.1a9.27,9.27,0,0,1-.946-.065c-.148-.015-.3-.031-.451-.043L24.9,62.923a2.481,2.481,0,0,1-3.419-.1l-2.925-2.938-14.3,14.38A2.463,2.463,0,0,1,2.493,75ZM42.2,25.026,18.032,52.088,23.574,57.6,50.8,33.477A17.147,17.147,0,0,1,42.2,25.026ZM58.032,5.014A12.465,12.465,0,1,0,58,29.945a12.653,12.653,0,0,0,8.868-3.661,12.458,12.458,0,0,0-8.838-21.27Z" transform="translate(0 -0.001)" fill="#fff"/>
                                            </g>
                                        </svg>
                                        <h2 class="fw-bold text-white">Pop</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('navmenu')
        @include('player')
    </section>
    </body>
</html>
