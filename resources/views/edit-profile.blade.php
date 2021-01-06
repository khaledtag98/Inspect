@extends('layout.layout')

@section('title', 'Inspect | Edit Profile')

@section('customCSS')
<link rel="stylesheet" href="http://localhost/our-beautiful-project/resources/css/profile.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<section class="my-32">
    <div
        class="container w-11/12 px-8 pt-6 pb-16 mx-auto bg-white rounded-lg shadow-lg md:w-5/6 md:pb-16 md:px-16 lg:w-2/3">
        <div class="flex justify-end">
            <a href="">
                <div class="flex items-center justify-center cursor-pointer">
                    <div class="font-medium shadow-md magnifyBtn">X</div>
                </div>
            </a>
        </div>
        <div class="flex flex-wrap mt-6">
            <div class="w-full md:w-2/5">
                <div style="background-image: url('http://localhost/our-beautiful-project/resources/img/profile-placeholder.jpg')"
                    class="relative w-56 h-56 mx-auto bg-center bg-no-repeat bg-cover rounded-full shadow-md md:mx-0">
                    <a href="">
                        <div class="absolute p-3 bg-gray-100 rounded-full shadow-md edit-photo">
                            <i class="text-xl text-gray-600 far fa-edit"></i>
                        </div>
                    </a>

                </div>

            </div>
            <div class="self-center w-full transition-colors duration-200 ease-in-out md:w-3/5">
                <div class="content">
                    <label class="" for="first-name">Name</label>
                    <input type="text" name="input-name" id="first-name" class="w-full mt-3 border-none"
                        placeholder="khaled" aria-describedby="helpId" />
                </div>
            </div>
        </div>
        <p class="mt-10 text-lg font-bold text-gray-800">Your Contact Info :</p>
        <div class="flex flex-wrap w-3/4 mx-auto mt-4 space-y-4 md:w-3/5">
            <div class="relative w-full">
                <input type="text" name="input-facebook" class="w-full py-5 pl-20 border border-gray-400 rounded-lg " />
                <div class="absolute flex items-center position-mine ">
                    <i class="inline-block text-3xl text-gray-800 fab fa-whatsapp-square"></i>
                    <div class="inline-block h-6 ml-6 bg-gray-400 separator"></div>
                </div>
            </div>
            <div class="relative w-full">
                <input type="text" name="input-facebook" class="w-full py-5 pl-20 border border-gray-400 rounded-lg " />
                <div class="absolute flex items-center position-mine ">
                    <i class="inline-block text-3xl text-gray-800 fab fa-facebook-square"></i>
                    <div class="inline-block h-6 ml-6 bg-gray-400 separator"></div>
                </div>
            </div>
            <div class="relative w-full">
                <input type="text" name="input-twitter" class="w-full py-5 pl-20 border border-gray-400 rounded-lg " />
                <div class="absolute flex items-center position-mine ">
                    <i class="inline-block text-3xl text-gray-800 fab fa-twitter-square"></i>
                    <div class="inline-block h-6 ml-6 bg-gray-400 separator"></div>
                </div>
            </div>
        </div>

    </div>
    <div
        class="container w-11/12 px-8 pt-6 pb-16 mx-auto mt-3 bg-white rounded-lg shadow-lg md:w-5/6 md:pb-16 md:px-16 lg:w-2/3">
        <p class="mt-10 text-lg font-bold text-gray-800">Your location :</p>
        <div class="flex flex-wrap mx-auto mt-4 ">
            <div class="w-1/2">
                <select class="js-example-basic-single" name="state" style="width: 100%">
                    <option></option>

                </select>
            </div>

        </div>

    </div>
</section>
@endsection

@section('customJS')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    const countryList = [
        "Afghanistan",
        "Albania",
        "Algeria",
        "American Samoa",
        "Andorra",
        "Angola",
        "Anguilla",
        "Antarctica",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Aruba",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas (the)",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bermuda",
        "Bhutan",
        "Bolivia (Plurinational State of)",
        "Bonaire, Sint Eustatius and Saba",
        "Bosnia and Herzegovina",
        "Botswana",
        "Bouvet Island",
        "Brazil",
        "British Indian Ocean Territory (the)",
        "Brunei Darussalam",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cabo Verde",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Cayman Islands (the)",
        "Central African Republic (the)",
        "Chad",
        "Chile",
        "China",
        "Christmas Island",
        "Cocos (Keeling) Islands (the)",
        "Colombia",
        "Comoros (the)",
        "Congo (the Democratic Republic of the)",
        "Congo (the)",
        "Cook Islands (the)",
        "Costa Rica",
        "Croatia",
        "Cuba",
        "Curaçao",
        "Cyprus",
        "Czechia",
        "Côte d'Ivoire",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic (the)",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Eritrea",
        "Estonia",
        "Eswatini",
        "Ethiopia",
        "Falkland Islands (the) [Malvinas]",
        "Faroe Islands (the)",
        "Fiji",
        "Finland",
        "France",
        "French Guiana",
        "French Polynesia",
        "French Southern Territories (the)",
        "Gabon",
        "Gambia (the)",
        "Georgia",
        "Germany",
        "Ghana",
        "Gibraltar",
        "Greece",
        "Greenland",
        "Grenada",
        "Guadeloupe",
        "Guam",
        "Guatemala",
        "Guernsey",
        "Guinea",
        "Guinea-Bissau",
        "Guyana",
        "Haiti",
        "Heard Island and McDonald Islands",
        "Holy See (the)",
        "Honduras",
        "Hong Kong",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran (Islamic Republic of)",
        "Iraq",
        "Ireland",
        "Isle of Man",
        "Israel",
        "Italy",
        "Jamaica",
        "Japan",
        "Jersey",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kiribati",
        "Korea (the Democratic People's Republic of)",
        "Korea (the Republic of)",
        "Kuwait",
        "Kyrgyzstan",
        "Lao People's Democratic Republic (the)",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Macao",
        "Madagascar",
        "Malawi",
        "Malaysia",
        "Maldives",
        "Mali",
        "Malta",
        "Marshall Islands (the)",
        "Martinique",
        "Mauritania",
        "Mauritius",
        "Mayotte",
        "Mexico",
        "Micronesia (Federated States of)",
        "Moldova (the Republic of)",
        "Monaco",
        "Mongolia",
        "Montenegro",
        "Montserrat",
        "Morocco",
        "Mozambique",
        "Myanmar",
        "Namibia",
        "Nauru",
        "Nepal",
        "Netherlands (the)",
        "New Caledonia",
        "New Zealand",
        "Nicaragua",
        "Niger (the)",
        "Nigeria",
        "Niue",
        "Norfolk Island",
        "Northern Mariana Islands (the)",
        "Norway",
        "Oman",
        "Pakistan",
        "Palau",
        "Palestine, State of",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines (the)",
        "Pitcairn",
        "Poland",
        "Portugal",
        "Puerto Rico",
        "Qatar",
        "Republic of North Macedonia",
        "Romania",
        "Russian Federation (the)",
        "Rwanda",
        "Réunion",
        "Saint Barthélemy",
        "Saint Helena, Ascension and Tristan da Cunha",
        "Saint Kitts and Nevis",
        "Saint Lucia",
        "Saint Martin (French part)",
        "Saint Pierre and Miquelon",
        "Saint Vincent and the Grenadines",
        "Samoa",
        "San Marino",
        "Sao Tome and Principe",
        "Saudi Arabia",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Sint Maarten (Dutch part)",
        "Slovakia",
        "Slovenia",
        "Solomon Islands",
        "Somalia",
        "South Africa",
        "South Georgia and the South Sandwich Islands",
        "South Sudan",
        "Spain",
        "Sri Lanka",
        "Sudan (the)",
        "Suriname",
        "Svalbard and Jan Mayen",
        "Sweden",
        "Switzerland",
        "Syrian Arab Republic",
        "Taiwan (Province of China)",
        "Tajikistan",
        "Tanzania, United Republic of",
        "Thailand",
        "Timor-Leste",
        "Togo",
        "Tokelau",
        "Tonga",
        "Trinidad and Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Turks and Caicos Islands (the)",
        "Tuvalu",
        "Uganda",
        "Ukraine",
        "United Arab Emirates (the)",
        "United Kingdom of Great Britain and Northern Ireland (the)",
        "United States Minor Outlying Islands (the)",
        "United States of America (the)",
        "Uruguay",
        "Uzbekistan",
        "Vanuatu",
        "Venezuela (Bolivarian Republic of)",
        "Viet Nam",
        "Virgin Islands (British)",
        "Virgin Islands (U.S.)",
        "Wallis and Futuna",
        "Western Sahara",
        "Yemen",
        "Zambia",
        "Zimbabwe",
        "Åland Islands"
    ]
    $(document).ready(function () {
        $('.js-example-basic-single').select2({
            placeholder: 'Country',
            data:countryList
        });
    });

</script>
@endsection

{{-- <div class="content">
    <i class="fas icon-color fa-phone-alt"></i>
    <label class="ml-2" for="phone-number">Phone Number</label>
    <input type="text" name="number" id="phone-number" class="w-full mt-3 border-none"
        placeholder="01XXXXXXXXX" aria-describedby="helpId" />
</div>
<div class="mt-8 textarea-container">
    <i class="far icon-color fa-comment-dots"></i>
    <label id="tell" class="ml-2" for="story">Tell us about your project</label>
    <textarea class="block w-full p-2 mt-6 border-2 border-solid outline-none" id="story"
        name="message" rows="7" placeholder="Enter your message here."></textarea>
    <small class="ml-4 text-gray-600">The more details the better!</small>
</div> --}}
