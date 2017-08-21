<?php

$array = [
    '_form' => '<div class="form-group row">
    <div class="col-md-6">
    [text* first-name id:first-name]First name[/text*]
    </div>
    <div class="col-md-6">
    [text* last-name id:last-name]Last name[/text*]
    </div>
    </div>
    
    <div class="form-group row">
    <div class="col-md-12">
    [email* email-address id:email-address]Email address[/email*]
    <small class="form-text text-muted">Please use your professional email.</small>
    </div>
    </div>
    
    <div class="form-group row">
    <div class="col-md-6">
    [select* country id:country "" "Afghanistan" "Albania" "Algeria" "American Samoa" "Andorra" "Angola" "Anguilla" "Antarctica" "Antigua and Barbuda" "Argentina" "Armenia" "Aruba" "Australia" "Austria" "Azerbaijan" "Bahamas" "Bahrain" "Bangladesh" "Barbados" "Belarus" "Belgium" "Belize" "Benin" "Bermuda" "Bhutan" "Bolivia" "Bosnia and Herzegowina" "Botswana" "Bouvet Island" "Brazil" "British Indian Ocean Territory" "Brunei Darussalam" "Bulgaria" "Burkina Faso" "Burundi" "Cambodia" "Cameroon" "Canada" "Cape Verde" "Cayman Islands" "Central African Republic" "Chad" "Chile" "China" "Christmas Island" "Cocos (Keeling) Islands" "Colombia" "Comoros" "Congo" "Congo, the Democratic Republic of the" "Cook Islands" "Costa Rica" "Cote d\'Ivoire" "Croatia (Hrvatska)" "Cuba" "Cyprus" "Czech Republic" "Denmark" "Djibouti" "Dominica" "Dominican Republic" "East Timor" "Ecuador" "Egypt" "El Salvador" "Equatorial Guinea" "Eritrea" "Estonia" "Ethiopia" "Falkland Islands (Malvinas)" "Faroe Islands" "Fiji" "Finland" "France" "France Metropolitan" "French Guiana" "French Polynesia" "French Southern Territories" "Gabon" "Gambia" "Georgia" "Germany" "Ghana" "Gibraltar" "Greece" "Greenland" "Grenada" "Guadeloupe" "Guam" "Guatemala" "Guinea" "Guinea-Bissau" "Guyana" "Haiti" "Heard and Mc Donald Islands" "Holy See (Vatican City State)" "Honduras" "Hong Kong" "Hungary" "Iceland" "India" "Indonesia" "Iran (Islamic Republic of)" "Iraq" "Ireland" "Israel" "Italy" "Jamaica" "Japan" "Jordan" "Kazakhstan" "Kenya" "Kiribati" "Korea, Democratic People\'s Republic of" "Korea, Republic of" "Kuwait" "Kyrgyzstan" "Lao, People\'s Democratic Republic" "Latvia" "Lebanon" "Lesotho" "Liberia" "Libyan Arab Jamahiriya" "Liechtenstein" "Lithuania" "Luxembourg" "Macau" "Macedonia, The Former Yugoslav Republic of" "Madagascar" "Malawi" "Malaysia" "Maldives" "Mali" "Malta" "Marshall Islands" "Martinique" "Mauritania" "Mauritius" "Mayotte" "Mexico" "Micronesia, Federated States of" "Moldova, Republic of" "Monaco" "Mongolia" "Montserrat" "Morocco" "Mozambique" "Myanmar" "Namibia" "Nauru" "Nepal" "Netherlands" "Netherlands Antilles" "New Caledonia" "New Zealand" "Nicaragua" "Niger" "Nigeria" "Niue" "Norfolk Island" "Northern Mariana Islands" "Norway" "Oman" "Pakistan" "Palau" "Panama" "Papua New Guinea" "Paraguay" "Peru" "Philippines" "Pitcairn" "Poland" "Portugal" "Puerto Rico" "Qatar" "Reunion" "Romania" "Russian Federation" "Rwanda" "Saint Kitts and Nevis" "Saint Lucia" "Saint Vincent and the Grenadines" "Samoa" "San Marino" "Sao Tome and Principe" "Saudi Arabia" "Senegal" "Seychelles" "Sierra Leone" "Singapore" "Slovakia (Slovak Republic)" "Slovenia" "Solomon Islands" "Somalia" "South Africa" "South Georgia and the South Sandwich Islands" "Spain" "Sri Lanka" "St. Helena" "St. Pierre and Miquelon" "Sudan" "Suriname" "Svalbard and Jan Mayen Islands" "Swaziland" "Sweden" "Switzerland" "Syrian Arab Republic" "Taiwan, Province of China" "Tajikistan" "Tanzania, United Republic of" "Thailand" "Togo" "Tokelau" "Tonga" "Trinidad and Tobago" "Tunisia" "Turkey" "Turkmenistan" "Turks and Caicos Islands" "Tuvalu" "Uganda" "Ukraine" "United Arab Emirates" "United Kingdom" "United States" "United States Minor Outlying Islands" "Uruguay" "Uzbekistan" "Vanuatu" "Venezuela" "Vietnam" "Virgin Islands (British)" "Virgin Islands (U.S.)" "Wallis and Futuna Islands" "Western Sahara" "Yemen" "Yugoslavia" "Zambia" "Zimbabwe"]Country[/select*]
    </div>
    
    <div class="col-md-6">
    [text* organisation id:organisation]Organisation[/text*]
    </div>
    </div>
    
    
    <div class="form-group row">
    <div class="col-md-6">
    [tel* contact-number id:contact-number]Contact number[/tel*]
    </div>
    <div class="col-md-6">
    [text* job-title id:job-title]Job title[/text*]
    </div>
    </div>
    
    
    <div class="form-group row">
    <div class="col-md-12">
    [textarea* message id:message]Message[/textarea*]
    </div>
    </div>
    
    
    <div class="form-group row">
    <div class="col-md-12">
    [submit "Apply for membership"]
    </div>
    </div>',

    '_mail' => unserialize( 'a:9:{s:6:"active";b:1;s:7:"subject";s:47:"Apply for membership "[first-name] [last-name]"";s:6:"sender";s:32:"No-reply <noreply@weprotect.dev>";s:9:"recipient";s:37:"alexander.gailey-white@panlogic.co.uk";s:4:"body";s:549:"<h4>WePROTECT Global Alliance - Apply for membership</h4>

<p><b>From:</b><br>[first-name] [last-name]</p>
<p><b>Email address:</b><br>[email-address]</p>
<p><b>Country:</b><br>[country]</p>
<p><b>Organisation:</b><br>[organisation]</p>
<p><b>Contact number:</b><br>[contact-number]</p>
<p><b>Job title:</b><br>[job-title]</p>
<p><b>Minister responsible:</b><br>[minister-responsible]</p>
<p><b>Minister signoff:</b><br>[minister-signoff]</p>
<p><b>Message:</b><br>[message]</p>

This e-mail was sent from a contact form on WePROTECT Global Alliance";s:18:"additional_headers";s:25:"Reply-To: [email-address]";s:11:"attachments";s:0:"";s:8:"use_html";b:1;s:13:"exclude_blank";b:0;}' ),

    '_mail_2' => unserialize( 'a:9:{s:6:"active";b:1;s:7:"subject";s:30:"Thank you for your application";s:6:"sender";s:51:"WePROTECT Global Alliance <wordpress@weprotect.dev>";s:9:"recipient";s:42:"[first-name] [last-name] <[email-address]>";s:4:"body";s:562:"<h4>WePROTECT Global Alliance - Apply for membership</h4>

<p>Thank you for your application, here is a copy of the details you provided.</p>

<p><b>From:</b><br>[first-name] [last-name]</p>
<p><b>Email address:</b><br>[email-address]</p>
<p><b>Country:</b><br>[country]</p>
<p><b>Organisation:</b><br>[organisation]</p>
<p><b>Contact number:</b><br>[contact-number]</p>
<p><b>Job title:</b><br>[job-title]</p>
<p><b>Minister responsible:</b><br>[minister-responsible]</p>
<p><b>Minister signoff:</b><br>[minister-signoff]</p>
<p><b>Message:</b><br>[message]</p>";s:18:"additional_headers";s:31:"Reply-To: support@weprotect.org";s:11:"attachments";s:0:"";s:8:"use_html";b:1;s:13:"exclude_blank";b:0;}' ),

    '_messages' => unserialize( 'a:23:{s:12:"mail_sent_ok";s:60:"Thank you, your application has been successfully submitted.";s:12:"mail_sent_ng";s:71:"There was an error trying to send your message. Please try again later.";s:16:"validation_error";s:61:"One or more fields have an error. Please check and try again.";s:4:"spam";s:71:"There was an error trying to send your message. Please try again later.";s:12:"accept_terms";s:69:"You must accept the terms and conditions before sending your message.";s:16:"invalid_required";s:23:"This field is required.";s:16:"invalid_too_long";s:23:"This field is too long.";s:17:"invalid_too_short";s:24:"This field is too short.";s:12:"invalid_date";s:29:"The date format is incorrect.";s:14:"date_too_early";s:44:"The date is before the earliest one allowed.";s:13:"date_too_late";s:41:"The date is after the latest one allowed.";s:13:"upload_failed";s:46:"There was an unknown error uploading the file.";s:24:"upload_file_type_invalid";s:49:"You are not allowed to upload files of this type.";s:21:"upload_file_too_large";s:20:"The file is too big.";s:23:"upload_failed_php_error";s:38:"There was an error uploading the file.";s:14:"invalid_number";s:29:"The number format is invalid.";s:16:"number_too_small";s:47:"The number is smaller than the minimum allowed.";s:16:"number_too_large";s:46:"The number is larger than the maximum allowed.";s:23:"quiz_answer_not_correct";s:36:"The answer to the quiz is incorrect.";s:17:"captcha_not_match";s:31:"Your entered code is incorrect.";s:13:"invalid_email";s:38:"The e-mail address entered is invalid.";s:11:"invalid_url";s:19:"The URL is invalid.";s:11:"invalid_tel";s:32:"The telephone number is invalid.";}' ),

    '_additional_settings' => ''
];