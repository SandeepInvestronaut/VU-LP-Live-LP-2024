<?php
$cname = '1393';
$urll = basename($_SERVER['PHP_SELF']);
$words = explode('.', $urll);

if (isset($_REQUEST["utm_source"])) {
$utm_source = $_REQUEST["utm_source"];
} else {
$utm_source = "website";
}

if (isset($_REQUEST["utm_medium"])) {
$utm_medium = $_REQUEST["utm_medium"];
} else {
$utm_medium = "website";
}

if (isset($_REQUEST["utm_campaign"])) {
$utm_campaign = $_REQUEST["utm_campaign"];
} else {
$utm_campaign = "website";
}

?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Diploma in Aviation & Airport Management(DAAM)| Admissions Open For
      2024-2025 | Vishwakarma University Pune</title>
    <link rel="icon" type="image/x-icon" href="./global_img/VU- LOGO.png">

    <link rel="stylesheet" href="styles/LP_style.css">
    <!---Bootstrap 5.0.2-->
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'
      rel='stylesheet'
      integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'
      crossorigin='anonymous'>
    <script
      src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
      integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM'
      crossorigin='anonymous'></script>

    <link href='/docs/5.0/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC'
      crossorigin='anonymous'>

    <!----Bootstrap 4.0-->

    <link rel='stylesheet'
      href='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css'
      integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm'
      crossorigin='anonymous'>

    <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'
      integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN'
      crossorigin='anonymous'></script>
    <script
      src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js'
      integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'
      crossorigin='anonymous'></script>
    <script
      src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js'
      integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'
      crossorigin='anonymous'></script>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
      href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap'
      rel='stylesheet'>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
      href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap'
      rel='stylesheet'>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
      href='https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap'
      rel='stylesheet'>

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css'>
    <script
      src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>

    <link rel='stylesheet'
      href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700'>
    <link rel='stylesheet'
      href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet'
      href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script
      src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script
      src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Lato&display=swap'
      rel='stylesheet'>

    <!-- Fontawesome Link for Icons -->
   <!-- Google Tag Manager --> <script> (function(w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5LHH63MK'); </script> <!-- End Google Tag Manager -->

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
    <script type='text/javascript'
      src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
    <script type='text/javascript'
      src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' />

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' />

    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5LHH63MK');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11117162937"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11117162937');
</script>

  </head>
  <body>
    <!-- Google Tag Manager --> <script> (function(w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', 'dataLayer', 'GTM-5LHH63MK'); </script> <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5LHH63MK"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id='enquire-form'></div>
    <div class='header-section'>
      <div class='container-fluid'>
        <header
          class='d-flex flex-wrap justify-content-around align-items-center'>
          <a href='#'
            class='d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none'>
            <img src='global_img/header_logo.png' alt='website-logo' />
          </a>

          <ul class='nav nav-pills'>
            <p style='color:#1D2337'>Call Us <span><a
                  href='tel:9590300911'>+91-9590300911</a></span></p>
          </ul>
        </header>
      </div>
    </div>

    <div class='hero_section_wrapper'>
      <div class='container-fluid'
        style='background-image:
linear-gradient(0deg, rgba(29, 35, 55, 0.6) 0%, rgba(29, 35, 1, 0.6) 100%),
url("./global_img/DAAM_Img/hero_img.png");
background-repeat: no-repeat;
background-position: center;
background-size: cover;
max-width: 100%;
position: relative;'>
        <div
          class='hero_section row d-flex align-items-center justify-content-between'>
          <div class='col-sm-6 col-md-6'>
            <div class='hero_bg_image'>
              <p class='first'>Fuel Your Passion: Soar with us! The sky's the
                limit. Get your Diploma in Aviation & Airport Management.</p>
              <p class='second' style='font-size: 48px;'>Diploma in Aviation &
                Airport Management (DAAM)</p>
              <p class='second' style='font-size: 48px;'>(Travel & Tourism)</p>
              <p class='third'>1 Year | 2 Semesters</p>
                <p class='fourth'>Full Time </p>
                <p class='fifth'>Admissions open for <span>2024-2025</span></p>
                <div class='image_container'>
                  <img src='global_img/tick.png' alt='listed lick' />
                  <img src='global_img/UGC.png' alt='UGC'
                    style='margin-left: -13px;' />
                </div>
              </div>
            </div>
            <div class='col-sm-6 col-md-5 hero_bg_image_inner'>

              <div class='form'>
                <form style='display: flex;
    flex-direction: column;
    gap: 12px;' action='registerForm.php' method='POST'
                  onsubmit='checkForm(event)'>
                  <div class='form-group'>
                    <input type='text' class='form-control' id='name'
                      aria-describedby='name' placeholder='Full Name'
                      name='name' oninput='handleInput("name")'>
                    <p class='error-message' id='name-error'
                      style='display:none;'></p>

                  </div>
                  <div class='form-group'>
                    <input type='email' class='form-control' id='email'
                      aria-describedby='email' placeholder='Email' name='email'
                      oninput='handleInput("email")'>
                    <p class='error-message' id='email-error'
                      style='display:none;'></p>
                  </div>
                  <div class='form-group'>
                    <input type='number' class='form-control' id='number'
                      aria-describedby='number'
                      placeholder='Phone Number' name='phone'
                      oninput='handleInput("number")'
                      onkeyup="limitPhoneNumber(this, 10)" maxlength="10">

                    <p class='error-message' id='number-error'
                      style='display:none;'></p>

                  </div>
                  <input type="hidden" name="cname" id="cname"
                    value="<?php echo $cname; ?>">
                  <input type="hidden" name="course" id="course"
                    value="<?php echo $words[0]; ?>">
                  <input type="hidden" name="utm_source" id="utm_source"
                    value="<?php echo $utm_source; ?>">
                  <input type="hidden" name="utm_medium" id="utm_medium"
                    value="<?php echo $utm_medium; ?>">
                  <input type="hidden" name="utm_campaign" id="utm_campaign"
                    value="<?php echo $utm_campaign; ?>">

                  <div class='form-state-select'>
                    <select name='state' id='state'
                      oninput='handleInput("state")'>
                      <option value disabled selected>Select State</option><option
                        value="Andhra Pradesh">Andhra Pradesh</option><option
                        value="Arunachal Pradesh">Arunachal Pradesh</option><option
                        value="Assam">Assam</option><option value="Bihar">Bihar</option><option
                        value="Chhattisgarh">Chhattisgarh</option><option
                        value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option
                        value="Haryana">Haryana</option><option
                        value="Himachal Pradesh">Himachal Pradesh</option><option
                        value="Jharkhand">Jharkhand</option><option
                        value="Karnataka">Karnataka</option><option
                        value="Kerala">Kerala</option><option
                        value="Madhya Pradesh">Madhya Pradesh</option><option
                        value="Maharashtra">Maharashtra</option><option
                        value="Manipur">Manipur</option><option
                        value="Meghalaya">Meghalaya</option><option
                        value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option
                        value="Odisha">Odisha</option><option value="Punjab">Punjab</option><option
                        value="Rajasthan">Rajasthan</option><option
                        value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil
                        Nadu</option><option value="Telangana">Telangana</option><option
                        value="Tripura">Tripura</option><option
                        value="Uttar Pradesh">Uttar Pradesh</option><option
                        value="Uttarakhand">Uttarakhand</option><option
                        value="West Bengal">West Bengal</option>
                    </select>
                    <p class='error-message' id='state-error'
                      style='display:none;'></p>
                  </div>

                  <div class='form-city-select'>
                    <select name='city' id='city' oninput='handleInput("city")'>
                      <option value disabled selected> Select City</option>
                    </select>
                    <p class='error-message' id='city-error'
                      style='display:none;'></p>
                  </div>
                  <script>


function limitPhoneNumber(input, maxLength) {
                                let inputValue = input.value;
                                if (inputValue.length > maxLength) {
                                    input.value = inputValue.slice(0, maxLength);
                                }
                            }

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
      document.getElementById('name-error').style.display='block';
      document.getElementById('name-error').innerHTML = 'Please enter your name';
      isValid = false;
      event.preventDefault();
  } else {
      document.getElementById('name-error').innerHTML = '';
      document.getElementById('name-error').style.display='none';
  }

  if (email.trim() === '') {
    document.getElementById('email-error').style.display='block';
      document.getElementById('email-error').innerHTML = 'Please enter your email';
      isValid = false;
      event.preventDefault();
  } else {
      document.getElementById('email-error').innerHTML = '';
      document.getElementById('email-error').style.display='none';
  }

  if (number.trim() === '') {
    document.getElementById('number-error').style.display = 'block';
    document.getElementById('number-error').innerHTML = 'Please enter your phone number';
    isValid = false;
    event.preventDefault();
} else if (number.length !== 10) {
    document.getElementById('number-error').style.display = 'block';
    document.getElementById('number-error').innerHTML = 'Phone number should be 10 digits';
    isValid = false;
    event.preventDefault();
} else {
    document.getElementById('number-error').innerHTML = '';
    document.getElementById('number-error').style.display = 'none';
}

  if (state.trim() === '') {
    document.getElementById('state-error').style.display='block';
      document.getElementById('state-error').innerHTML = 'Please select your state';
      isValid = false;
      event.preventDefault();
  } else {
      document.getElementById('state-error').innerHTML = '';
      document.getElementById('state-error').style.display='none';
  }

  if (city.trim() === '') {
    document.getElementById('city-error').style.display='block';
      document.getElementById('city-error').innerHTML = 'Please select your city';
      isValid = false;
      event.preventDefault();
  } else {
      document.getElementById('city-error').innerHTML = '';
      document.getElementById('city-error').style.display='none';
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







    document.getElementById('state').addEventListener('change', function() {
        var state = this.value;
        var cityDropdown = document.getElementById('city');
        cityDropdown.innerHTML = '<option value="" disabled selected>Select City</option>';
        var selectedState = [{"state":"Andhra Pradesh","cities":["Visakhapatnam","Vijayawada","Guntur","Nellore","Kurnool","Rajahmundry","Tirupati","Kakinada","Kadapa","Anantapur","Vizianagaram","Eluru","Ongole","Nandyal","Machilipatnam","Adoni","Tenali","Proddatur","Chittoor","Hindupur","Bhimavaram","Madanapalle","Srikakulam","Guntakal","Dharmavaram","Gudivada","Narasaraopet","Tadipatri","Tadepalligudem"]},{"state":"Arunachal Pradesh","cities":["Itanagar","Naharlagun","Pasighat","Roing","Tezu","Ziro","Tawang","Bomdila","Aalo","Khonsa","Daporijo","Anini","Yingkiong"]},{"state":"Assam","cities":["Guwahati","Dispur","Dibrugarh","Jorhat","Nagaon","Tinsukia","Silchar","Tezpur","Bongaigaon","Dhubri","Sivasagar","Goalpara","Barpeta","Karimganj","Nalbari","Morigaon","Hailakandi","Dhemaji","Kokrajhar","North Lakhimpur","Diphu","Lanka","Nongpoh","Mangaldoi","North Guwahati","Bilasipara","Namrup","Sarupathar"]},{"state":"Bihar","cities":["Patna","Gaya","Bhagalpur","Muzaffarpur","Darbhanga","Arrah","Begusarai","Katihar","Chhapra","Purnia","Siwan","Motihari","Nalanda","Hajipur","Saharsa","Bettiah","Aurangabad","Supaul","Lakhisarai","Sheikhpura","Jamui","Buxar","Dehri","Sitamarhi","Madhubani","Jehanabad","Ara","Munger","Chhapra","Danapur","Bihar Sharif","Samastipur","Begusarai","Kishanganj","Munger","Khagaria","Barh","Madhepura","Sheohar","Jamalpur","Buxar","Gopalganj","Barh","Baruni","Mokama","Sasaram","Bettiah","Bagaha"]},{"state":"Chhattisgarh","cities":["Raipur","Bhilai","Bilaspur","Korba","Durg","Rajnandgaon","Jagdalpur","Ambikapur","Dhamtari","Mahasamund","Janjgir-Champa","Kanker","Raigarh","Kawardha","Bastar","Surguja","Dantewada","Kondagaon","Narayanpur","Bijapur","Balod","Baloda Bazar","Balrampur","Mungeli","Surajpur","Balodabazar","Gariaband","Kabirdham (Kawardha)"]},{"state":"Goa","cities":["Panaji","Margao","Vasco da Gama","Mapusa","Ponda","Bicholim","Curchorem","Cuncolim","Valpoi","Sanguem","Quepem","Canacona"]},{"state":"Gujarat","cities":["Ahmedabad","Surat","Vadodara","Rajkot","Bhavnagar","Jamnagar","Junagadh","Gandhinagar","Anand","Bharuch","Porbandar","Nadiad","Morbi","Surendranagar","Gandhidham","Veraval","Navsari","Ankleshwar","Valsad","Bhuj","Palanpur","Mehsana","Godhra","Dahod","Botad","Modasa","Palitana","Palanpur","Patan","Rajpipla"]},{"state":"Haryana","cities":["Ambala","Faridabad","Gurugram","Hisar","Panipat","Karnal","Sonipat","Yamunanagar","Rohtak","Panchkula","Bhiwani","Jind","Sirsa","Thanesar","Kaithal","Rewari","Palwal","Fatehabad","Mahendragarh","Narnaul","Jhajjar","Charkhi Dadri","Tohana","Ladwa","Hansi","Narwana","Bahadurgarh","Dabwali","Samalkha"]},{"state":"Himachal Pradesh","cities":["Shimla","Mandi","Dharamshala","Kullu","Manali","Dalhousie","Chamba","Solan","Una","Bilaspur","Nahan","Palampur","Hamirpur","Sirmaur","Kangra"]},{"state":"Jharkhand","cities":["Ranchi","Jamshedpur","Dhanbad","Bokaro","Hazaribagh","Deoghar","Dumka","Giridih","Chatra","Palamu","Koderma","Sahebganj","Godda","Pakur","Latehar","Simdega","Seraikela-Kharsawan","Khunti","Gumla"]},{"state":"Karnataka","cities":["Bangalore","Mysore","Hubli","Mangalore","Belgaum","Gulbarga","Davanagere","Bellary","Shimoga","Tumkur","Raichur","Bidar","Hospet","Hassan","Bijapur","Ramanagara","Dharwad","Chitradurga","Kolar","Udupi","Bagalkot","Haveri","Gadag","Yadgir","Karwar","Chikkaballapur","Gangavathi","Madikeri","Channarayapatna"]},{"state":"Kerala","cities":["Thiruvananthapuram","Kochi","Kozhikode","Kollam","Thrissur","Alappuzha","Palakkad","Malappuram","Kannur","Kottayam","Pathanamthitta","Idukki","Ernakulam"]},{"state":"Madhya Pradesh","cities":["Bhopal","Indore","Jabalpur","Gwalior","Ujjain","Sagar","Rewa","Satna","Ratlam","Burhanpur","Khandwa","Guna","Shivpuri","Vidisha","Chhindwara","Damoh","Mandsaur","Khargone","Neemuch","Pithampur","Itarsi","Sehore","Hoshangabad","Ashoknagar","Singrauli","Betul","Datia","Narsinghpur","Raisen","Seoni"]},{"state":"Maharashtra","cities":["Mumbai","Pune","Nagpur","Nashik","Aurangabad","Solapur","Kolhapur","Thane","Amravati","Akola","Latur","Jalgaon","Dhule","Ahmednagar","Chandrapur","Parbhani","Satara","Jalna","Bhusawal","Navi Mumbai","Panvel","Ratnagiri","Sangli","Yavatmal","Osmanabad","Wardha","Palghar","Gondia","Hingoli"]},{"state":"Manipur","cities":["Imphal","Thoubal","Bishnupur","Churachandpur","Senapati","Ukhrul","Tamenglong","Kakching","Jiribam"]},{"state":"Meghalaya","cities":["Shillong","Tura","Jowai","Nongpoh","Williamnagar","Baghmara","Resubelpara","Khliehriat","Mairang","Nongstoin","Amlarem","Mawkyrwat","Mawsynram","Dawki","Rongjeng","Cherrapunji","Ampati","Nongalbibra"]},{"state":"Mizoram","cities":["Aizawl","Lunglei","Champhai","Kolasib","Serchhip","Lawngtlai","Mamit","Saiha"]},{"state":"Nagaland","cities":["Kohima","Dimapur","Mokokchung","Tuensang","Wokha","Zunheboto","Mon","Phek","Longleng","Kiphire"]},{"state":"Odisha","cities":["Bhubaneswar","Cuttack","Rourkela","Berhampur","Sambalpur","Puri","Balasore","Brahmapur","Jharsuguda","Bargarh","Jajpur","Bhadrak","Baripada","Bolangir","Angul","Dhenkanal","Koraput","Keonjhar","Rayagada","Kendrapara","Nabarangpur","Malkangiri","Nayagarh","Jagatsinghpur","Kendujhar","Sundargarh","Phulabani","Nuapada"]},{"state":"Punjab","cities":["Amritsar","Ludhiana","Jalandhar","Patiala","Bathinda","Hoshiarpur","Mohali","Pathankot","Moga","Firozpur","Batala","Ropar","Fazilka","Sangrur","Gurdaspur","Khanna","Mansa","Faridkot","Abohar","Malout","Patti","Rajpura","Kapurthala","Sunam","Phagwara","Gidderbaha","Nabha","Muktsar","Barnala"]},{"state":"Rajasthan","cities":["Jaipur","Jodhpur","Udaipur","Ajmer","Bikaner","Kota","Sikar","Alwar","Jaisalmer","Bharatpur","Pali","Hanumangarh","Barmer","Bhilwara","Chittorgarh","Sawai Madhopur","Tonk","Kishangarh","Beawar","Dhaulpur","Ganganagar","Dungarpur","Nagaur","Churu","Banswara","Baran","Sirohi","Jhunjhunu","Karauli","Bundi","Sri Ganganagar","Bilaspur","Jalore","Pratapgarh"]},{"state":"Sikkim","cities":["Gangtok","Namchi","Gyalshing","Rangpo","Singtam","Mangan","Jorethang","Ravangla","Soreng","Phuntsokling","Nayabazar","Lachung","Lachen","Rhenock","Nepalganj","Saramsa","Chungthang","Rinchenpong","Sakyong","Gyalzing","Dzongu","Melli","Pelling","Yuksom","Martam","Sombari Bazar","Rhenock"]},{"state":"Tamil Nadu","cities":["Chennai","Coimbatore","Madurai","Tiruchirappalli","Salem","Tirunelveli","Erode","Vellore","Thoothukudi","Thanjavur","Nagercoil","Dindigul","Cuddalore","Kancheepuram","Tiruvannamalai","Karur","Neyveli","Kumbakonam","Rajapalayam","Pudukkottai","Hosur","Ambur","Karaikudi","Nagapattinam","Udhagamandalam (Ooty)","Palani","Arakkonam","Pollachi","Avadi","Tirupur","Ramanathapuram"]},{"state":"Telangana","cities":["Hyderabad","Warangal","Nizamabad","Karimnagar","Khammam","Ramagundam","Mahbubnagar","Nalgonda","Adilabad","Suryapet","Jagtial","Miryalaguda","Nirmal","Kollapur","Bhongir","Kothagudem","Siddipet","Mancherial","Wanaparthy","Kamareddy"]},{"state":"Tripura","cities":["Agartala","Udaipur","Belonia","Dharmanagar","Kailasahar","Ambassa","Khowai","Santirbazar","Sabroom","Sonamura"]},{"state":"Uttar Pradesh","cities":["Lucknow","Kanpur","Agra","Varanasi","Meerut","Allahabad","Bareilly","Aligarh","Moradabad","Saharanpur","Gorakhpur","Faizabad","Jhansi","Muzaffarnagar","Mathura","Budaun","Rampur","Shahjahanpur","Firozabad","Hapur","Etawah","Mirzapur","Bulandshahr","Sambhal","Amroha","Hardoi","Farrukhabad","Hathras","Azamgarh","Basti","Fatehpur","Unnao","Jaunpur","Lakhimpur Kheri","Sitapur","Bahraich","Barabanki","Deoria","Gonda","Balrampur","Sultanpur","Bijnor","Ambedkar Nagar","Shamli","Mahoba","Banda","Chitrakoot","Ballia","Maharajganj","Jalaun","Etah","Mainpuri","Kannauj","Pratapgarh","Kaushambi","Auraiya","Kushinagar","Raebareli"]},{"state":"Uttarakhand","cities":["Dehradun","Haridwar","Rishikesh","Nainital","Mussoorie","Haldwani","Roorkee","Almora","Pithoragarh","Chamoli","Rudrapur","Kashipur","Rudraprayag","Tehri","Pauri","Bageshwar","Udham Singh Nagar","Champawat","Almora","Bhimtal","Chakrata","Dhanaulti","Jaspur","Kotdwar","Lansdowne","Munsiari","Ramnagar","Srinagar"]},{"state":"West Bengal","cities":["Kolkata","Howrah","Durgapur","Asansol","Siliguri","Darjeeling","Malda","Murshidabad","Haldia","Bardhaman","Medinipur","Bankura","Cooch Behar","Alipurduar","Jalpaiguri","Birbhum","Nadia","Purulia","North 24 Parganas","South 24 Parganas"]}];
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
    });

</script>
                  <div class='form-check'>
                    <input type='checkbox' class='form-check-input'
                      id='formCheck1' name='agree'>
                    <label class='form-check-label' for='formCheck1'>I agree
                      to receive communication from VU, Pune through various
                      modes.</label>
                    <p class='error-message' id='check-error'
                      style='display:none;'></p>
                  </div>
                  <button type='submit' class='btn btn-primary' name='upload'>Apply
                    Now</button>
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
          <h1 style='color:#1D2337'>Industry Connect</h1>
          <div class='row'>
            <div class='col-sm-6 col-md-6 mb-responsive'>

              <div class='card slider_container'
                style="border: 1px solid #1D2337 !important;">
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
                  <div class='package_box'
                    style='background-color:#1D2337'>
                    <p class='number'>17.75<sup>LPA*</sup></p>
                    <p class='text'>Highest Package</p>
                  </div>
                  <div class='recruiters_box'
                    style='background-color:#1D2337'>
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



for(let i=0; i<industryConnect; i++) {
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
  $('#carouselExampleControls .carousel-control-next').on('click', function () {
    if (scrollPosition < carouselWidth - cardWidth * 3) {
      scrollPosition += cardWidth;
      $('#carouselExampleControls .carousel-inner').animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $('#carouselExampleControls .carousel-control-prev').on('click', function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $('#carouselExampleControls .carousel-inner').animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass('slide');
}
</script>

        <div class='section_4'>

          <h1 style='color:#1D2337'>Programme Overview</h1>
          <p>The diploma programme aims to prepare students for exciting careers
            in the ever-growing aviation and airport management industries. Our
            program equips you with the essential skills and specialized
            knowledge you'll need to succeed in this dynamic field.</p><br><p>Recognizing
            the global significance of aviation, this comprehensive curriculum
            is designed to meet the evolving demands of the industry. </p>
          <div class='dynamic_box' style='margin-top: 35px;'>
            <div class='container' style='padding: 0 !important;'>
              <div class='row p-0 mobile_gap'>

              </body>
            </html>
            <div class="col-sm-12"><div class="card"><div class="card-body"><div
                    class="key_advantages"><p>Key Advantages</p><div
                      class="row justify-content-evenly text-center align-items-center"><div
                        class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img
                          src="./global_img/DAAM_Img/key_1.png" /><p>Industry
                          Collaborations</p></div><div
                        class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img
                          src="./global_img/DAAM_Img/key_2.png" /><p>Practical
                          Training</p></div><div
                        class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img
                          src="./global_img/DAAM_Img/key_3.png" /><p>Professionalism</p></div><div
                        class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img
                          src="./global_img/DAAM_Img/key_4.png" /><p>Customer
                          Relationship Management</p></div>
                          <div
                          class="col-sm-3 col-sm-3 pt-4 pb-5 p-4"><img
                            src="./global_img/DAAM_Img/key_5.png" /><p>Outcome Based Education</p></div>

                        </div></div></div></div></div></div></div></div></div><div
      class="programme_highlights"><div class="container-fluid"><p
          class="programme_highlights_title" style="color:#1D2337">Programme
          Highlights</p><div
          class="row justify-content-center align-items-stretch gap-5"><div
            class="col-sm-6 col-md-3 p-0 ph_box"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/ph_1.png" /><h1
                class="title">Mastering Airport Operations</h1><p class="title_body">Gain in-depth knowledge of how airports function.</p></div></div><div
            class="col-sm-6 col-md-3 p-0 ph_box"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/ph_2.png" /><h1
                class="title">Future-Proofing Your Skills</h1><p class="title_body">Explore upcoming trends shaping the aviation industry.</p></div></div>
                
                <div
            class="col-sm-6 col-md-3 p-0 ph_box">
            <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/ph_3.png" /><h1
                class="title">Learning by Doing</h1><p
                class="title_body">Experience practical training methods for effective knowledge retention.</p>
              </div>
              </div>
              <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/ph_4.png" /><h1
                class="title">Professional Development</h1><p class="title_body">Enhance your personality and presentation skills for career success.</p></div></div>

                <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/ph_5.png" /><h1
                class="title">Guaranteed Job Support</h1><p class="title_body">Benefit from dedicated assistance in securing your dream job in aviation.</p></div></div>

                <div class="col-sm-6 col-md-3 p-0 ph_box">
                <div
                class="programmer_body_container"><img
                  src="./global_img/DAAM_Img/ph_6.png" /><h1
                  class="title">Global Internships and Placements</h1><p class="title_body">Focus on providing opportunities to gain international work experience through internships and secure job placements.</p></div></div>
              
              
              </div></div></div></div><div
      class="career_opportunity"><h1 style="color:#1D2337">Career
        Opportunities</h1><div class="container-fluid p-1"><div
          class="row justify-content-center"
          style="text-align: center;align-items: center;"><div
            class="col-sm-6 col-md-3 pt-3 pb-3"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_1.png" /><h1
                class="title">Cabin Crew</h1></div></div><div
            class="col-sm-6 col-md-3 pt-3 pb-3"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_2.png" /><h1
                class="title">Air Traffic Controller</h1></div></div><div
            class="col-sm-6 col-md-3 pt-3 pb-3"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_3.png" /><h1
                class="title">Aircraft Dispatch Manager</h1></div></div><div
            class="col-sm-6 col-md-3 pt-3 pb-3"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_4.png" /><h1
                class="title">Air Station Manager</h1></div></div><div
            class="col-sm-6 col-md-3 pt-3 pb-3"><div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_5.png" /><h1
                class="title">Airport Terminal Duty Manager</h1></div></div>
                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
            <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_6.png" /><h1
                class="title">Airport Operation Manager</h1></div></div>

                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_7.png" /><h1
                class="title">Ground Staff</h1></div></div>

                <div
                class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_8.png" /><h1
                class="title">Airport Manager</h1></div></div>

                <div
                class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_9.png" /><h1
                class="title">Flight Stewards (Air Hostess)</h1></div></div>

                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_10.png" /><h1
                class="title">Flight Dispatcher</h1></div></div>


<div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_11.png" /><h1
                class="title">ACargo Operations Manager</h1></div></div>


<div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_12.png" /><h1
                class="title">Airport Security Manager</h1></div>
                </div>

                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_13.png" /><h1
                class="title">Aviation Safety Officer</h1></div></div>

                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_14.png" /><h1
                class="title">Passenger Service Agent</h1></div></div>

                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_15.png" /><h1
                class="title">Aviation HR Manager</h1></div></div>


                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_16.png" /><h1
                class="title">Airport Planner</h1></div></div>


                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_17.png" /><h1
                class="title">Aviation Sales and Marketing Executive</h1></div></div>


                <div
            class="col-sm-6 col-md-3 pt-3 pb-3">
                <div
              class="programmer_body_container"><img
                src="./global_img/DAAM_Img/career_18.png" /><h1
                class="title">Aviation Consultant</h1></div></div>


              </div></div></div></div><script>  const gap = 16;  const carousel = document.getElementById("carousel"),    content = document.getElementById("content"),    next = document.getElementById("next"),    prev = document.getElementById("prev");  let width = carousel.offsetWidth;  next.addEventListener("click", e => {    carousel.scrollBy(width + gap, 0);    if (carousel.scrollWidth !== 0) {      prev.style.display = "flex";    }    if (content.scrollWidth - width - gap <= carousel.scrollLeft + width) {      next.style.display = "none";    }  });  prev.addEventListener("click", e => {    carousel.scrollBy(-(width + gap), 0);    if (carousel.scrollLeft - width - gap <= 0) {      prev.style.display = "none";    }    if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {      next.style.display = "flex";    }  });  window.addEventListener("resize", e => (width = carousel.offsetWidth));</script><link
      rel="stylesheet" href="path/to/owl.carousel.css"><link rel="stylesheet"
      href="path/to/owl.theme.default.css"><script src="path/to/jquery.min.js"></script><script
      src="path/to/owl.carousel.min.js"></script><script>
  $(document).ready(function(){
      $(".testimonials-container").owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:6000,
          margin:10,
          nav:true,
          navText:["<i class='fa-solid fa-arrow-left'></i>", "<i class='fa-solid fa-arrow-right'></i>"],
          responsive:{
              0:{
                  items:1,
                  nav:false
              },
              600:{
                  items:1,
                  nav:true
              },
              768:{
                  items:2
              },
          }
      });
  });
</script><script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script><script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script><div
      class="modal fade videoModal" id="videoModal" tabindex="-1"
      aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog"> <div class="modal-content"> <div
            class="modal-body text-center"> <iframe id="videoIframe" width="400"
              height="350" src frameborder="0" allowfullscreen allow="autoplay"
              style="width: 100%;"></iframe> </div> </div> </div></div><script>function playVideo(videoSrc) {    var videoIframe = document.getElementById("videoIframe");    videoIframe.src = videoSrc;    $("#videoModal").modal("show");}</script><div
      class="modal fade" id="videoModalSimple" tabindex="-1"
      aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog"> <div class="modal-content"> <div
            class="modal-body text-center"> <video width="320" height="240"
              controls id="simple_video" src></video> </div> </div> </div></div><script>function playsimpleVideo(base64Data) {    var simpleVideo = document.getElementById("simple_video");    simpleVideo.src = base64Data;    $("#videoModalSimple").modal("show");}</script><div
      class="why_vu"><div class="container-fluid"><div
          class="row justify-content-between"><div class="col-sm-6 col-md-6"><div
              class="body_wrapper"><div class="title"
                style="color:#1D2337"> Why VU?</div><div
                class="body_title"> Vishwakarma University, Pune (VU) is a
                natural offshoot of
                the Vishwakarma Group of Institutions’ educational legacy
                spanning more than 40 years. The learning model at
                Vishwakarma University is the combination of knowing,
                practicing, performing, and reflecting. Through a
                contemporary curriculum and ecosystem of holistic
                development, the university aims to prepare learners for
                fulfilling career paths.</div></div></div><div
            class="col-sm-6 col-md-6"><div class="count"><div
                class="row text-center"><div class="col-sm-6 col-md-5"><h1>350+</h1><p>Expert
                    Faculty</p></div><div class="col-sm-6 col-md-5"><h1>50+</h1><p>Programmes</p></div><div
                  class="col-sm-6 col-md-5"><h1>200+</h1><p>Collaborations</p></div><div
                  class="col-sm-6 col-md-5"><h1>4000+</h1><p>Students Mix</p></div></div></div></div></div></div></div><div
      class="life_Of_vu"> <div class="container-fluid"
        style="padding-left: 0 !important; padding-right: 0 !important;"><h1
          style="color:#1D2337">Life @ VU</h1><div
          class="vu_prev_next_container"><button id="vu_prev"><img
              src="global_img/life_of_vu_arrow.png""
              style="max-width: 100%;transform: rotate(180deg);" /></button><button
            id="vu_next"><img src="global_img/life_of_vu_arrow.png"
              style="max-width: 100%" /></button></div>
        <div id="wrapper">
          <div id="vu_carousel">
            <div id="vu_content" class="align-items-end"> <img
                src="global_img/life_of_VU_1.png" style="width: 330px;" />
              <img src="global_img/life_of_VU_2.png" style="width: 330px;" />
              <img width="100%" height="218px"
                src="./global_img/youtube_thunbnail.png"
                onclick='demo("https://www.youtube.com/embed/tcSp3Muuj0M")'></img>
            <img src="global_img/life_of_VU_3.png" style="width: 330px;" /> <img
              src="global_img/life_of_VU_4.png"
              style="width: 330px;" /> <img src="global_img/life_of_VU_5.png"
              style="width: 330px;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="VU_life" tabindex="-1"
    aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-center"> <iframe width="350" height="270"
            controls autoplay id="life_video"
            style="max-width:100%;width:100%;">
          </iframe> </div>
      </div>
    </div>
  </div>
  <script>function demo(videoUrl) { var video_id = document.getElementById("life_video"); video_id.src = videoUrl; $("#VU_life").modal("show"); }</script>
  <script>const vu_gap = 16; const vu_carousel = document.getElementById("vu_carousel"), vu_content = document.getElementById("vu_content"), vu_next = document.getElementById("vu_next"), vu_prev = document.getElementById("vu_prev"); vu_next.addEventListener("click", e => { vu_carousel.scrollBy(vu_width + vu_gap, 0); if (vu_carousel.scrollWidth !== 0) { vu_prev.style.display = "flex"; } if (vu_content.scrollWidth - vu_width - vu_gap <= vu_carousel.scrollLeft + vu_width) { vu_next.style.display = "none"; } }); vu_prev.addEventListener("click", e => { vu_carousel.scrollBy(-(vu_width + vu_gap), 0); if (vu_carousel.scrollLeft - vu_width - vu_gap <= 0) { vu_prev.style.display = "none"; } if (!vu_content.scrollWidth - vu_width - vu_gap <= vu_carousel.scrollLeft + vu_width) { vu_next.style.display = "flex"; } }); let vu_width = vu_carousel.offsetWidth; window.addEventListener("resize", e => (vu_width = vu_carousel.offsetWidth));</script>
  <div class="footer">
    <footer>
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-5 p-0"> <img src="./global_img/footer_logo.png"
              alt="VU-Logo-White"></div>
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
<script>  let floatingButton = document.querySelector('.floating-button'); window.addEventListener('scroll', e => { floatingButton.style.display = window.scrollY > 600 ? 'flex' : 'none'; });</script>