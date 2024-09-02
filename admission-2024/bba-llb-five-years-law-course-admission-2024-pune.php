<?php
$cname = '20';
$urll = basename($_SERVER['PHP_SELF']);
$words = explode('.', $urll);

if (isset($_REQUEST["utm_source"])) {
  $utm_source = $_REQUEST["utm_source"];
} else
  $utm_source = "website";
if (isset($_REQUEST["utm_medium"])) {
  $utm_medium = $_REQUEST["utm_medium"];
} else
  $utm_medium = "website";
if (isset($_REQUEST["utm_campaign"])) {
  $utm_campaign = $_REQUEST["utm_campaign"];
} else
  $utm_campaign = "website";

$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';

  // Assuming the format is "BA-Animation-MH"
  $parts = explode('-', $utm_campaign);
  
  // Get the last element from the array
  $lastWord = end($parts);
  
  // Ensure it is in uppercase
  $desiredValue = strtoupper($lastWord);
  
  // Replace specific substrings
  $desiredValue = str_replace(
      ['UP', 'MH'],
      ['Uttar Pradesh', 'Maharashtra'],
      $desiredValue
  );
  
  
  
  $stateOptions = [
      "Andhra Pradesh",
      "Assam",
      "Bihar",
      "Chhattisgarh",
      "Delhi",
      "Haryana",
      "Jammu Kashmir",
      "Jharkhand",
      "Karnataka",
      "Kerala",
      "Madhya Pradesh",
      "Maharashtra",
      "Manipur",
      "Mizoram",
      "Odisha",
      "Punjab",
      "Rajasthan",
      "Tamil Nadu",
      "Uttar Pradesh",
      "Uttarakhand",
      "West Bengal"
      // Add more states as needed
  ];
  
  $selectedState = '';
  
  if ($desiredValue) {
      $utm_medium_lower = strtolower(trim(str_replace(' ', '', $desiredValue)));
      foreach ($stateOptions as $state) {
          $state_lower = strtolower(trim(str_replace(' ', '', $state))); // Remove spaces for comparison
          if ($state_lower === $utm_medium_lower) {
              $selectedState = $state;
             
          }
      }
  }
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bachelor of Law (Five Years Law Course BBA LL.B)| Admissions Open For 2024-2025 | Vishwakarma University Pune
    </title>
    <link rel="icon" type="image/x-icon" href="./global_img/VU- LOGO.png">

    <link rel="stylesheet" href="styles/LP_style.css">
    <!---Bootstrap 5.0.2-->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'>
    </script>

    <link href='/docs/5.0/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>

    <!----Bootstrap 4.0-->

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'
        integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>


    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'
        integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'
        integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'
        integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'>
    </script>



    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap' rel='stylesheet'>


    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap' rel='stylesheet'>


    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap' rel='stylesheet'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Lato&display=swap' rel='stylesheet'>


    <!-- Fontawesome Link for Icons -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V57XNBBSS5"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-V57XNBBSS5');
    </script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>





    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
    <script type='text/javascript' src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'>
    </script>


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' />

    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' />

    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' />
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5LHH63MK');
    </script>
    <!-- End Google Tag Manager -->







</head> <?php include("google-code.php") ?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LHH63MK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id='enquire-form'></div>
    <div class='header-section'>
        <div class='container-fluid'>
            <header class='d-flex flex-wrap justify-content-around align-items-center'>
                <a href='#' class='d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none'>
                    <img src='global_img/header_logo.png' alt='website-logo' />
                </a>

                <ul class='nav nav-pills'>
                    <p style='color:rgba(111, 0, 0, 1)'>Call Us <span><a href='tel:9590300911'>+91-9590300911</a></span>
                    </p>
                </ul>
            </header>
        </div>
    </div>







    <div class='hero_section_wrapper'>
        <div class='container-fluid' style='background-image:
linear-gradient(0deg, rgba(111, 0, 0, 0.5) 0%, rgba(111, 0, 0, 0.5) 100%),
url("./global_img/BBA-LLB_img/hero_img.png");
background-repeat: no-repeat;
background-position: center;
background-size: cover;
max-width: 100%;
position: relative;'>
            <div class='hero_section row d-flex align-items-center justify-content-between'>
                <div class='col-sm-6 col-md-6'>
                    <div class='hero_bg_image'>
                        <p class='first'>Gain Legal Insights With Business Instincts</p>
                        <p class='second' style='font-size: 48px;'>Bachelor of Law </p>
                        <p class='second' style='font-size: 48px;'>(Five Years Law Course BBA LL.B)</p>
                        <p class='third'>5 Years | 10 Semesters</p>
                        <p class='fourth'>Full Time</p>
                        <p class='fifth'>Admissions open for <span>2024-2025</span></p>
                        <div class='image_container'>
                            <img src='global_img/tick.png' alt='listed lick' />
                            <img src='global_img/UGC.png' alt='UGC' style='margin-left: -13px;' />
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-md-5 hero_bg_image_inner'>

                    <div class='form'>
                        <form style='display: flex;
    flex-direction: column;
    gap: 12px;' action='registerForm.php' method='POST' onsubmit='checkForm(event)'>
                            <div class='form-group'>
                                <input type='text' class='form-control' id='name' aria-describedby='name'
                                    placeholder='Full Name' name='name' oninput='handleInput("name")'>
                                <p class='error-message' id='name-error' style='display:none;'></p>

                            </div>
                            <div class='form-group'>
                                <input type='email' class='form-control' id='email' aria-describedby='email'
                                    placeholder='Email' name='email' oninput='handleInput("email")'>
                                <p class='error-message' id='email-error' style='display:none;'></p>
                            </div>
                            <div class='form-group'>
                                <input type='number' class='form-control' id='number' aria-describedby='number'
                                    placeholder='Phone Number' name='phone' oninput='handleInput("number")'>
                                <p class='error-message' id='number-error' style='display:none;'></p>

                            </div>
                            <input type="hidden" name="cname" id="cname" value="<?php echo $cname; ?>">
                            <input type="hidden" name="course" id="course" value="<?php echo $words[0]; ?>">
                            <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
                            <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
                            <input type="hidden" name="utm_campaign" id="utm_campaign"
                                value="<?php echo $utm_campaign; ?>">

                            <div class='form-state-select'>
                            <select name='state' id='state' onchange='handleInput("state")'>
                                    <option value="" disabled>Select State</option>
                                    <?php foreach ($stateOptions as $state) : ?>
                                    <?php
        $state_lower = strtolower(trim(str_replace(' ', '', $state))); // Remove spaces for comparison
        $disabled = ($state_lower !== $utm_medium_lower) ? 'disabled' : '';
        $selected = ($state_lower === $utm_medium_lower) ? 'selected' : '';
        ?>
                                    <option value="<?php echo $state; ?>" <?php echo $disabled . ' ' . $selected; ?>>
                                        <?php echo $state; ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                                <p class='error-message' id='state-error' style='display:none;'></p>
                            </div>

                            <div class='form-city-select'>
                                <select name='city' id='city' oninput='handleInput("city")'>
                                    <option value='' disabled selected> Select City</option>
                                </select>
                                <p class='error-message' id='city-error' style='display:none;'></p>
                            </div>
                            <script>
                            function handleInput(fieldName) {
                                var inputValue = document.getElementById(fieldName).value.trim();
                                var errorElement = document.getElementById(fieldName + '-error');



                                if (inputValue !== '') {
                                    errorElement.style.display = 'none';
                                } else {
                                    errorElement.style.display = 'block';
                                    errorElement.innerHTML = 'Please enter ' + fieldName;
                                }
                            }


                            function checkForm(event) {
                                let name = document.getElementById('name').value;
                                let email = document.getElementById('email').value;
                                let number = document.getElementById('number').value;
                                let state = document.getElementById('state').value;
                                let city = document.getElementById('city').value;




                                if (name.trim() === '') {
                                    document.getElementById('name-error').style.display = 'block';
                                    document.getElementById('name-error').innerHTML = 'Please enter your name';
                                    isValid = false;
                                    event.preventDefault();
                                } else {
                                    document.getElementById('name-error').innerHTML = '';
                                    document.getElementById('name-error').style.display = 'none';
                                }

                                if (email.trim() === '') {
                                    document.getElementById('email-error').style.display = 'block';
                                    document.getElementById('email-error').innerHTML = 'Please enter your email';
                                    isValid = false;
                                    event.preventDefault();
                                } else {
                                    document.getElementById('email-error').innerHTML = '';
                                    document.getElementById('email-error').style.display = 'none';
                                }

                                if (number.trim() === '') {
                                    document.getElementById('number-error').style.display = 'block';
                                    document.getElementById('number-error').innerHTML =
                                    'Please enter your phone number';
                                    isValid = false;
                                    event.preventDefault();
                                } else if (number.length !== 10) {
                                    document.getElementById('number-error').style.display = 'block';
                                    document.getElementById('number-error').innerHTML =
                                        'Phone number should be 10 digits';
                                    isValid = false;
                                    event.preventDefault();
                                } else {
                                    document.getElementById('number-error').innerHTML = '';
                                    document.getElementById('number-error').style.display = 'none';
                                }

                                if (state.trim() === '') {
                                    document.getElementById('state-error').style.display = 'block';
                                    document.getElementById('state-error').innerHTML = 'Please select your state';
                                    isValid = false;
                                    event.preventDefault();
                                } else {
                                    document.getElementById('state-error').innerHTML = '';
                                    document.getElementById('state-error').style.display = 'none';
                                }

                                if (city.trim() === '') {
                                    document.getElementById('city-error').style.display = 'block';
                                    document.getElementById('city-error').innerHTML = 'Please select your city';
                                    isValid = false;
                                    event.preventDefault();
                                } else {
                                    document.getElementById('city-error').innerHTML = '';
                                    document.getElementById('city-error').style.display = 'none';
                                }

                                var agreeCheckbox = document.getElementById('formCheck1');
                                var checkErrorElement = document.getElementById('check-error');

                                if (agreeCheckbox) {
                                    // Check if the checkbox exists
                                    if (agreeCheckbox.checked) {
                                        checkErrorElement.style.display = 'none';
                                    } else {
                                        checkErrorElement.style.display = 'block';
                                        checkErrorElement.innerHTML = 'Please agree to the terms.';
                                        isValid = false;
                                        event.preventDefault();
                                    }
                                } else {

                                }

                                return isValid;

                            }






                            document.addEventListener('DOMContentLoaded', function() {

// Trigger city population on page load
populateCities();

document.getElementById('state').addEventListener('change', function() {
    // Trigger city population on state change
    populateCities();
});

function populateCities() {
    var state = document.getElementById('state').value;
    var cityDropdown = document.getElementById('city');
    cityDropdown.innerHTML =
        '<option value="" disabled selected>Select City</option>';
    var selectedState = [{
            "state": "Andhra Pradesh",
            "cities": ["Anantapur", "Chittoor", "East Godavari", "Guntur",
                "Kadapa", "Krishna", "Kurnool", "Nellore", "Prakasam",
                "Srikakulam", "Visakhapatnam", "Vizianagaram",
                "West Godavari"
            ]
        }, {
            "state": "Assam",
            "cities": ["Bajali", "Baksa", "Barpeta", "Biswanath",
                "Bongaigaon",
                "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji",
                "Dhubri", "Dibrugarh", "Dima Hasao", "Goalpara",
                "Golaghat",
                "Hailakandi", "Hojai", "Jorhat", "Kamrup",
                "Kamrup Metropolitan", "Karbi Anglong", "Karimganj",
                "Kokrajhar", "Lakhimpur",
                "Majuli", "Morigaon", "Nagaon", "Nalbari", "Sivasagar",
                "Sonitpur", "South Salmara-Mankachar", "Tinsukia",
                "Udalguri", "West Karbi Anglong"
            ]
        }, {
            "state": "Bihar",
            "cities": ["Araria", "Arwal", "Aurangabad", "Banka",
                "Begusarai",
                "Bhagalpur", "Bhojpur", "Buxar", "Darbhanga",
                "East Champaran",
                "Gaya", "Gopalganj", "Jamui", "Jehanabad", "Kaimur",
                "Katihar", "Khagaria", "Kishanganj", "Lakhisarai",
                "Madhepura", "Madhubani", "Munger", "Muzaffarpur",
                "Nalanda",
                "Nawada", "Patna", "Purnia", "Rohtas", "Saharsa",
                "Samastipur", "Saran", "Sheikhpura", "Sheohar",
                "Sitamarhi", "Siwan", "Supaul", "Vaishali",
                "West Champaran"
            ]
        },

        {
            "state": "Chhattisgarh",
            "cities": ["Balod", "Baloda Bazar", "Balrampur", "Bastar",
                "Bemetara",
                "Bijapur", "Bilaspur", "Dantewada", "Dhamtari",
                "Durg", "Gariaband", "Gaurela Pendra Marwahi",
                "Janjgir Champa",
                "Jashpur", "Kabirdham", "Kanker", "Kondagaon", "Korba",
                "Koriya", "Mahasamund", "Mungeli", "Raigarh",
                "Raipur", "Rajnandgaon", "Sukma", "Surajpur",
                "Surguja"
            ]
        },

        {
            "state": "Delhi",
            "cities": ["Central Delhi", "East Delhi", "New Delhi",
                "North Delhi", "North East Delhi", "North West Delhi",
                "Shahdara", "South Delhi", "South East Delhi",
                "South West Delhi", "West Delhi"
            ]
        },
        {
            "state": "Haryana",
            "cities": ["Ambala", "Bhiwani", "Charkhi Dadri", "Faridabad",
                "Fatehabad",
                "Gurugram", "Hisar", "Jhajjar", "Jind", "Kaithal",
                "Karnal", "Kurukshetra", "Mahendragarh", "Mewat",
                "Palwal",
                "Panchkula",
                "Panipat", "Rewari", "Rohtak", "Sirsa", "Sonipat",
                "Yamunanagar"
            ]
        },
        {
            "state": "Jammu Kashmir",
            "cities": ["Anantnag", "Bandipora", "Baramulla", "Budgam",
                "Doda",
                "Ganderbal", "Jammu", "Kathua", "Kishtwar", "Kulgam",
                "Kupwara",
                "Poonch", "Pulwama", "Rajouri", "Ramban", "Reasi",
                "Samba",
                "Shopian", "Srinagar", "Udhampur"
            ]
        },
        {
            "state": "Jharkhand",
            "cities": ["Bokaro", "Chatra", "Deoghar", "Dhanbad",
                "Dumka", "East Singhbhum", "Garhwa", "Giridih", "Godda",
                "Gumla", "Hazaribagh", "Jamtara", "Khunti", "Koderma",
                "Latehar", "Lohardaga", "Pakur", "Palamu",
                "Ramgarh", "Ranchi", "Sahebganj", "Seraikela Kharsawan",
                "Simdega", "West Singhbhum"
            ]
        }, {
            "state": "Karnataka",
            "cities": ["Bagalkot", "Bangalore Rural", "Bangalore Urban",
                "Belgaum", "Bellary",
                "Bidar", "Chamarajanagar", "Chikkaballapur",
                "Chikkamagaluru", "Chitradurga",
                "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag",
                "Gulbarga",
                "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal",
                "Mandya", "Mysore", "Raichur", "Ramanagara", "Shimoga",
                "Tumkur", "Udupi", "Uttara Kannada",
                "Vijayanagara", "Vijayapura", "Yadgir"
            ]
        }, {
            "state": "Kerala",
            "cities": ["Alappuzha", "Ernakulam", "Idukki", "Kannur",
                "Kasaragod", "Kollam", "Kottayam", "Kozhikode",
                "Malappuram",
                "Palakkad", "Pathanamthitta", "Thiruvananthapuram",
                "Thrissur", "Wayanad"
            ]
        },

        {
            "state": "Madhya Pradesh",
            "cities": ["Agar Malwa", "Alirajpur", "Anuppur", "Ashoknagar",
                "Balaghat",
                "Barwani", "Betul", "Bhind", "Bhopal", "Burhanpur",
                "Chachaura",
                "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas",
                "Dhar", "Dindori", "Guna", "Gwalior", "Harda",
                "Hoshangabad", "Indore", "Jabalpur", "Jhabua", "Katni",
                "Khandwa", "Khargone", "Maihar", "Mandla", "Mandsaur",
                "Morena", "Narsinghpur", "Nagda", "Neemuch", "Niwari",
                "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar",
                "Satna", "Sehore", "Seoni", "Shahdol", "Shajapur",
                "Sheopur", "Shivpuri", "Sidhi", "Singrauli",
                "Tikamgarh",
                "Ujjain", "Umaria", "Vidisha"
            ]
        }, {
            "state": "Maharashtra",
            "cities": ["Ahmednagar", "Akola", "Amravati", "Aurangabad",
                "Beed",
                "Bhandara", "Buldhana", "Chandrapur", "Dhule",
                "Gadchiroli",
                "Gondia", "Hingoli", "Jalgaon", "Jalna", "Kolhapur",
                "Latur", "Mumbai City", "Mumbai Suburban", "Nagpur",
                "Nanded",
                "Nandurbar", "Nashik", "Osmanabad", "Palghar",
                "Parbhani",
                "Pune", "Raigad", "Ratnagiri", "Sangli", "Satara",
                "Sindhudurg", "Solapur", "Thane", "Wardha", "Washim",
                "Yavatmal"
            ]
        }, {
            "state": "Manipur",
            "cities": ["Bishnupur", "Chandel", "Churachandpur",
                "Imphal East",
                "Jiribam", "Kakching", "Kamjong", "Kangpokpi", "Noney",
                "Pherzawl", "Senapati", "Tamenglong", "Tengnoupal",
                "Thoubal", "Ukhrul"
            ]
        }, {
            "state": "Mizoram",
            "cities": ["Aizawl", "Champhai", "Hnahthial", "Kolasib",
                "Khawzawl",
                "Lawngtlai", "Lunglei", "Mamit", "Saiha", "Serchhip",
                "Saitual"
            ]
        }, {
            "state": "Odisha",
            "cities": ["Angul", "Balangir", "Balasore", "Bargarh",
                "Bhadrak", "Boudh", "Cuttack", "Debagarh", "Dhenkanal",
                "Gajapati", "Ganjam", "Jagatsinghpur", "Jajpur",
                "Jharsuguda",
                "Kalahandi", "Kandhamal", "Kendrapara", "Kendujhar",
                "Khordha",
                "Koraput", "Malkangiri", "Mayurbhanj", "Nabarangpur",
                "Nayagarh", "Nuapada", "Puri", "Rayagada",
                "Sambalpur", "Subarnapur", "Sundergarh"
            ]
        },

        {
            "state": "Punjab",
            "cities": ["Amritsar", "Barnala", "Bathinda", "Faridkot",
                "Fatehgarh Sahib", "Fazilka", "Firozpur", "Gurdaspur",
                "Hoshiarpur",
                "Jalandhar", "Kapurthala", "Ludhiana", "Mansa", "Moga",
                "Mohali", "Muktsar", "Pathankot", "Patiala", "Rupnagar",
                "Sangrur", "Shaheed Bhagat Singh Nagar", "Tarn Taran"
            ]
        }, {
            "state": "Rajasthan",
            "cities": ["Ajmer", "Alwar", "Banswara", "Baran", "Barmer",
                "Bharatpur", "Bhilwara", "Bikaner", "Bundi",
                "Chittorgarh",
                "Churu",
                "Dausa", "Dholpur", "Dungarpur", "Hanumangarh",
                "Jaipur", "Jaisalmer", "Jalore", "Jhalawar",
                "Jhunjhunu", "Jodhpur", "Karauli", "Kota", "Nagaur",
                "Pali", "Pratapgarh", "Rajsamand", "Sawai Madhopur",
                "Sikar",
                "Sirohi", "Sri Ganganagar", "Tonk", "Udaipur"
            ]
        }, {
            "state": "Tamil Nadu",
            "cities": ["Ariyalur", "Chengalpattu", "Chennai", "Coimbatore",
                "Cuddalore", "Dharmapuri", "Dindigul", "Erode",
                "Kallakurichi",
                "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri",
                "Madurai", "Mayiladuthurai", "Nagapattinam", "Namakkal",
                "Nilgiris", "Perambalur", "Pudukkottai",
                "Ramanathapuram",
                "Ranipet", "Salem", "Sivaganga",
                "Tenkasi", "Thanjavur", "Theni", "Thoothukudi",
                "Tiruchirappalli", "Tirunelveli", "Tirupattur",
                "Tiruppur",
                "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore",
                "Viluppuram", "Virudhunagar"
            ]
        }, {
            "state": "Uttar Pradesh",
            "cities": ["Agra", "Aligarh", "Ambedkar Nagar", "Amethi",
                "Amroha",
                "Auraiya", "Ayodhya", "Azamgarh", "Baghpat",
                "Bahraich", "Ballia", "Balrampur", "Banda",
                "Barabanki", "Bareilly", "Basti", "Bhadohi",
                "Bijnor", "Budaun", "Bulandshahr", "Chandauli",
                "Chitrakoot",
                "Deoria", "Etah", "Etawah", "Farrukhabad", "Fatehpur",
                "Firozabad", "Gautam Buddha Nagar", "Ghaziabad",
                "Ghazipur",
                "Gonda",
                "Gorakhpur", "Hamirpur", "Hapur", "Hardoi",
                "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj",
                "Kanpur Dehat", "Kanpur Nagar", "Kasganj", "Kaushambi",
                "Kheri",
                "Kushinagar", "Lalitpur", "Lucknow", "Maharajganj",
                "Mahoba",
                "Mainpuri", "Mathura", "Mau", "Meerut", "Mirzapur",
                "Moradabad", "Muzaffarnagar", "Pilibhit", "Pratapgarh",
                "Prayagraj", "Raebareli", "Rampur", "Saharanpur",
                "Sambhal",
                "Sant Kabir Nagar", "Shahjahanpur", "Shamli",
                "Shravasti",
                "Siddharthnagar", "Sitapur", "Sonbhadra", "Sultanpur",
                "Unnao", "Varanasi"
            ]
        }, {
            "state": "Uttarakhand",
            "cities": ["Almora", "Bageshwar", "Chamoli", "Champawat",
                "Dehradun", "Haridwar", "Nainital", "Pauri",
                "Pithoragarh",
                "Rudraprayag", "Tehri", "Udham Singh Nagar",
                "Uttarkashi"
            ]
        }, {
            "state": "West Bengal",
            "cities": ["Alipurduar", "Bankura", "Birbhum", "Cooch Behar",
                "Dakshin Dinajpur",
                "Darjeeling", "Hooghly", "Howrah", "Jalpaiguri",
                "Jhargram",
                "Kalimpong", "Kolkata", "Malda", "Murshidabad",
                "Nadia", "North 24 Parganas", "Paschim Bardhaman",
                "Paschim Medinipur",
                "Purba Bardhaman", "Purba Medinipur", "Purulia",
                "South 24 Parganas", "Uttar Dinajpur"
            ]
        }
    ];
    selectedState = selectedState.find(function(s) {
        return s.state === state;
    });
    if (selectedState && selectedState.cities) {
        selectedState.cities.forEach(function(city) {
            var option = document.createElement('option');
            option.value = city;
            option.text = city;
            cityDropdown.appendChild(option);
        });
    }
}
});
                            </script>
                            <div class='form-check'>
                                <input type='checkbox' class='form-check-input' id='formCheck1' name='agree'>
                                <label class='form-check-label' for='formCheck1'>I agree
                                    to receive communication from VU, Pune through various
                                    modes.</label>
                                <p class='error-message' id='check-error' style='display:none;'></p>
                            </div>
                            <button type='submit' class='btn btn-primary' name='upload'>Apply Now</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='section_3'>
        <div class='container-fluid' style='background: #F3F3FB;
padding: 30px 100px;'>
            <img src='global_img/award.png' alt='award image'
                style='max-width: 100%;mix-blend-mode: darken;margin: 0 auto;display: flex;width: 100%;'>
        </div>
    </div>


    <div class='order_wrapper'>

        <div class='industry_connect container-fluid'>
            <h1 style='color:rgba(111, 0, 0, 1)'>Industry Connect</h1>
            <div class='row'>
                <div class='col-sm-6 col-md-6 mb-responsive'>

                    <div class='card slider_container' style="border: 1px solid rgba(111, 0, 0, 1) !important;">
                        <div class='card-body img_slider_container'>
                            <div class='marquee'>
                                <ul class='marquee-content'>
                                    <li>
                                        <img src='global_img/In_1.jpeg' alt='Image 1'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_2.jpeg' alt='Image 2'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_3.jpeg' alt='Image 3'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_6.jpeg' alt='Image 6'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_7.jpeg' alt='Image 7'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_9.jpeg' alt='Image 9'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_10.jpeg' alt='Image 10'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_13.jpeg' alt='Image 13'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_14.jpeg' alt='Image 14'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_15.jpeg' alt='Image 15'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_17.jpeg' alt='Image 17'>
                                    </li>

                                    <li>
                                        <img src='global_img/In_18.jpeg' alt='Image 18'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_19.jpeg' alt='Image 19'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_20.jpeg' alt='Image 20'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_23.jpeg' alt='Image 23'>
                                    </li>

                                    <li>
                                        <img src='global_img/In_28.jpeg' alt='Image 28'>
                                    </li>

                                    <li>
                                        <img src='global_img/In_25.jpeg' alt='Image 25'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_26.jpeg' alt='Image 26'>
                                    </li>
                                    <li>
                                        <img src='global_img/In_27.jpeg' alt='Image 27'>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-md-6 p-0'>
                    <div class='card pacakge_container'>
                        <div class='card-body'>
                            <div class='package_box' style='background-color:rgba(111, 0, 0, 1)'>
                                <p class='number'>17.75<sup>LPA*</sup></p>
                                <p class='text'>Highest Package</p>
                            </div>
                            <div class='recruiters_box' style='background-color:rgba(111, 0, 0, 1)'>
                                <p class='number'>700+</p>
                                <p class='text'>Recruiters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- industry connect slider script--->


        <script>
        const root = document.documentElement;
        const industryConnect = getComputedStyle(root).getPropertyValue('--marquee-elements-displayed');
        const ic = document.querySelector('ul.marquee-content');

        root.style.setProperty('--marquee-elements', ic.children.length);



        for (let i = 0; i < industryConnect; i++) {
            ic.appendChild(ic.children[i].cloneNode(true));
        }

        var multipleCardCarousel = document.querySelector('#carouselExampleControls');

        if (window.matchMedia('(min-width: 576px)').matches) {
            var carousels = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false
            });
            var carouselWidth = $('.carousel-inner')[0].scrollWidth;
            var cardWidth = $('.carousel-item').width();
            var scrollPosition = 0;
            $('#carouselExampleControls .carousel-control-next').on('click', function() {
                if (scrollPosition < carouselWidth - cardWidth * 3) {
                    scrollPosition += cardWidth;
                    $('#carouselExampleControls .carousel-inner').animate({
                            scrollLeft: scrollPosition
                        },
                        600
                    );
                }
            });
            $('#carouselExampleControls .carousel-control-prev').on('click', function() {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $('#carouselExampleControls .carousel-inner').animate({
                            scrollLeft: scrollPosition
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleCardCarousel).addClass('slide');
        }
        </script>





        <div class='section_4'>

            <h1 style='color:rgba(111, 0, 0, 1)'>Programme Overview</h1>
            <p>The programme is designed to produce well-rounded professionals who possess a blend of legal knowledge,
                business acumen, ethical values, and problem-solving skills, making them valuable assets in various
                sectors of the economy.</p>
            <div class='dynamic_box' style='margin-top: 35px;'>
                <div class='container' style='padding: 0 !important;'>
                    <div class='row p-0 mobile_gap'>


</body>

</html>
<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="key_advantages">
                <p>Key Advantages</p>
                <div class="row justify-content-evenly text-center align-items-center">
                    <div class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img src="./global_img/BBA-LLB_img/key_1.png" />
                        <p>Moot Court Rooms for Mock Trials</p>
                    </div>
                    <div class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img src="./global_img/BBA-LLB_img/key_2.png" />
                        <p>Advocacy Skill Training</p>
                    </div>
                    <div class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img src="./global_img/BBA-LLB_img/key_3.png" />
                        <p>Clinical Legal Aid Center</p>
                    </div>
                    <div class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img src="./global_img/BBA-LLB_img/key_4.png" />
                        <p>Skill-based Add-On Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="programme_highlights">
    <div class="container-fluid">
        <p class="programme_highlights_title" style="color:rgba(111, 0, 0, 1)">Programme Highlights</p>
        <div class="row justify-content-center align-items-stretch gap-5">
            <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/ph_1.png" />
                    <h1 class="title">Integrated Learning</h1>
                    <p class="title_body"> Learning How Legal Principles intersect with Business Practices.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/ph_2.png" />
                    <h1 class="title">Industry relevant Skills</h1>
                    <p class="title_body">Legal research, contract drafting, negotiation, dispute resolution, and
                        business strategy.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/ph_3.png" />
                    <h1 class="title">Networking</h1>
                    <p class="title_body">Legal professionals, industry experts assisting in internships, job
                        placements, and career advancement.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/ph_4.png" />
                    <h1 class="title">International Perspective</h1>
                    <p class="title_body">Exchange programmes, study tours, collaborations with foreign universities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="career_opportunity">
    <h1 style="color:rgba(111, 0, 0, 1)">Career Opportunities</h1>
    <div class="container-fluid p-1">
        <div class="row justify-content-center" style="text-align: center;align-items: center;">
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_1.png" />
                    <h1 class="title">Corporate Lawyer</h1>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_2.png" />
                    <h1 class="title">Legal Counsel</h1>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_3.png" />
                    <h1 class="title">HR Manager</h1>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_4.png" />
                    <h1 class="title">Corporate Policy Advisor</h1>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_5.png" />
                    <h1 class="title">Patent Officer</h1>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 pt-3 pb-3">
                <div class="programmer_body_container"><img src="./global_img/BBA-LLB_img/career_6.png" />
                    <h1 class="title">Business Consultant</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const gap = 16;
const carousel = document.getElementById("carousel"),
    content = document.getElementById("content"),
    next = document.getElementById("next"),
    prev = document.getElementById("prev");
let width = carousel.offsetWidth;
next.addEventListener("click", e => {
    carousel.scrollBy(width + gap, 0);
    if (carousel.scrollWidth !== 0) {
        prev.style.display = "flex";
    }
    if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
        next.style.display = "none";
    }
});
prev.addEventListener("click", e => {
    carousel.scrollBy(-(width + gap), 0);
    if (carousel.scrollLeft - width - gap <= 0) {
        prev.style.display = "none";
    }
    if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
        next.style.display = "flex";
    }
});
window.addEventListener("resize", e => (width = carousel.offsetWidth));
</script>
<link rel="stylesheet" href="path/to/owl.carousel.css">
<link rel="stylesheet" href="path/to/owl.theme.default.css">
<script src="path/to/jquery.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $(".testimonials-container").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        margin: 10,
        nav: true,
        navText: ["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: true
            },
            768: {
                items: 2
            },
        }
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<div class="modal fade videoModal" id="videoModal" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center"> <iframe id="videoIframe" width="400" height="350" src=""
                    frameborder="0" allowfullscreen="" allow="autoplay" style="width: 100%;"></iframe> </div>
        </div>
    </div>
</div>
<script>
function playVideo(videoSrc) {
    var videoIframe = document.getElementById("videoIframe");
    videoIframe.src = videoSrc;
    $("#videoModal").modal("show");
}
</script>
<div class="modal fade" id="videoModalSimple" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center"> <video width="320" height="240" controls id="simple_video"
                    src=""></video> </div>
        </div>
    </div>
</div>
<script>
function playsimpleVideo(base64Data) {
    var simpleVideo = document.getElementById("simple_video");
    simpleVideo.src = base64Data;
    $("#videoModalSimple").modal("show");
}
</script>
<div class="why_vu">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6">
                <div class="body_wrapper">
                    <div class="title" style="color:rgba(111, 0, 0, 1)"> Why VU?</div>
                    <div class="body_title"> Vishwakarma University, Pune (VU) is a natural offshoot of
                        the Vishwakarma Group of Institutions’ educational legacy
                        spanning more than 40 years. The learning model at
                        Vishwakarma University is the combination of knowing,
                        practicing, performing, and reflecting. Through a
                        contemporary curriculum and ecosystem of holistic
                        development, the university aims to prepare learners for
                        fulfilling career paths.</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="count">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-5">
                            <h1>350+</h1>
                            <p>Expert Faculty</p>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <h1>50+</h1>
                            <p>Programmes</p>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <h1>200+</h1>
                            <p>Collaborations</p>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <h1>4000+</h1>
                            <p>Students Mix</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="life_Of_vu">
    <div class="container-fluid" style="padding-left: 0 !important; padding-right: 0 !important;">
        <h1 style="color:rgba(111, 0, 0, 1)">Life @ VU</h1>
        <div class="vu_prev_next_container"><button id="vu_prev"><img src="global_img/life_of_vu_arrow.png"" style="
                    max-width: 100%;transform: rotate(180deg);" /></button><button id="vu_next"><img
                    src="global_img/life_of_vu_arrow.png" style="max-width: 100%" /></button></div>
        <div id="wrapper">
            <div id="vu_carousel">
                <div id="vu_content" class="align-items-end"> <img src="global_img/life_of_VU_1.png"
                        style="width: 330px;" />
                    <img src="global_img/life_of_VU_2.png" style="width: 330px;" /> <img width="100%" height="218px"
                        src="./global_img/youtube_thunbnail.png"
                        onclick='demo("https://www.youtube.com/embed/tcSp3Muuj0M")'></img>
                    <img src="global_img/life_of_VU_3.png" style="width: 330px;" /> <img
                        src="global_img/life_of_VU_4.png" style="width: 330px;" /> <img
                        src="global_img/life_of_VU_5.png" style="width: 330px;" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="VU_life" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center"> <iframe width="350" height="270" controls autoplay id="life_video"
                    style="max-width:100%;width:100%;">
                </iframe> </div>
        </div>
    </div>
</div>
<script>
function demo(videoUrl) {
    var video_id = document.getElementById("life_video");
    video_id.src = videoUrl;
    $("#VU_life").modal("show");
}
</script>
<script>
const vu_gap = 16;
const vu_carousel = document.getElementById("vu_carousel"),
    vu_content = document.getElementById("vu_content"),
    vu_next = document.getElementById("vu_next"),
    vu_prev = document.getElementById("vu_prev");
vu_next.addEventListener("click", e => {
    vu_carousel.scrollBy(vu_width + vu_gap, 0);
    if (vu_carousel.scrollWidth !== 0) {
        vu_prev.style.display = "flex";
    }
    if (vu_content.scrollWidth - vu_width - vu_gap <= vu_carousel.scrollLeft + vu_width) {
        vu_next.style.display = "none";
    }
});
vu_prev.addEventListener("click", e => {
    vu_carousel.scrollBy(-(vu_width + vu_gap), 0);
    if (vu_carousel.scrollLeft - vu_width - vu_gap <= 0) {
        vu_prev.style.display = "none";
    }
    if (!vu_content.scrollWidth - vu_width - vu_gap <= vu_carousel.scrollLeft + vu_width) {
        vu_next.style.display = "flex";
    }
});
let vu_width = vu_carousel.offsetWidth;
window.addEventListener("resize", e => (vu_width = vu_carousel.offsetWidth));
</script>
<div class="footer">
    <footer>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 p-0"> <img src="./global_img/footer_logo.png" alt="VU-Logo-White"></div>
                <div class="col-md-auto p-0">
                    <h4>Address</h4>
                    <p>Survey No. 2, 3, 4 Laxmi
                        Nagar,<br> Kondhwa Budruk, Pune -
                        411 048.<br> Maharashtra, India.</p>
                </div>
                <div class="col-md-3 p-auto p-0">
                    <h4>Get in Touch With Us</h4><a href="tel:9590300911">+91-9590300911</a><br><a
                        href="mailto:admissions@vupune.ac.in">admissions@vupune.ac.in</a><br>
                </div>
            </div>
        </div>
    </footer>
</div>
</div><a class="floating-button scroll" href="#enquire-form">
    <h5 class="text-center">Apply
        Now</h5>
</a>
<script>
let floatingButton = document.querySelector('.floating-button');
window.addEventListener('scroll', e => {
    floatingButton.style.display = window.scrollY > 600 ? 'flex' : 'none';
});
</script>