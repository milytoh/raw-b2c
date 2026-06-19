<?php

include 'includes/protect.php';

$page_title = 'Add Worker | Admin | RAW B2C LTD';



require '../config/database.php';



if($_SERVER['REQUEST_METHOD']=="POST"){


    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $state = $_POST['state'];
    $local_government = $_POST['local_government'];

    $skill_area = trim($_POST['skill_area']);

    $experience = (int)$_POST['experience_years'];

    $skills_details = trim($_POST['skills_details']);



    $cv = null;



    // Upload CV

    if(!empty($_FILES['cv_file']['name'])){


        $uploadDir="../uploads/cv/";


        if(!is_dir($uploadDir)){
            mkdir($uploadDir,0777,true);
        }


        $fileName =
        time().'_'.basename($_FILES['cv_file']['name']);


        $target=$uploadDir.$fileName;


        $allowed=[
            'pdf',
            'doc',
            'docx'
        ];


        $ext=strtolower(
            pathinfo($fileName,PATHINFO_EXTENSION)
        );


        if(in_array($ext,$allowed)){


            move_uploaded_file(
                $_FILES['cv_file']['tmp_name'],
                $target
            );


            $cv=$fileName;

        }


    }





    $stmt=$pdo->prepare("
    INSERT INTO workers
    (
    first_name,
    last_name,
    email,
    phone,
    state,
    local_government,
    skill_area,
    experience_years,
    skills_details,
    cv_file_path
    )

    VALUES (?,?,?,?,?,?,?,?,?,?)
    ");



    $stmt->execute([

    $first_name,
    $last_name,
    $email,
    $phone,
    $state,
    $local_government,
    $skill_area,
    $experience,
    $skills_details,
    $cv

    ]);



    $_SESSION['success']="Worker registered successfully";


    header("Location: workers.php");
    exit;


}

include 'includes/header.php';
include 'includes/sidebar.php';

?>





<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">


<?php include 'includes/navbar.php'; ?>



<main class="flex-1 overflow-y-auto p-6 md:p-10">


<div class="max-w-4xl mx-auto">



<div class="mb-8">

<h1 class="text-3xl font-bold text-primary">
Add New Worker
</h1>

<p class="text-gray-500">
Register a new service worker.
</p>


</div>






<form method="POST"
enctype="multipart/form-data"
class="bg-white rounded-[28px] shadow-premium p-8 space-y-6">


<!-- Name -->
<div class="grid md:grid-cols-2 gap-5">


<div>
<label class="font-bold text-primary">
First Name
</label>

<input
required
name="first_name"
class="input"
placeholder="John">

</div>



<div>
<label class="font-bold text-primary">
Last Name
</label>

<input
required
name="last_name"
class="input"
placeholder="Doe">

</div>


</div>





<!-- Contact -->
<div class="grid md:grid-cols-2 gap-5">


<div>

<label class="font-bold text-primary">
Email
</label>

<input
required
type="email"
name="email"
class="input"
placeholder="john@email.com">

</div>




<div>

<label class="font-bold text-primary">
Phone
</label>

<input
required
name="phone"
class="input"
placeholder="08000000000">

</div>


</div>







<!-- Location -->

<div class="grid md:grid-cols-2 gap-6">



<div>

<label class="font-bold text-primary">
State
</label>


<select
name="state"
id="state"
required
class="w-full mt-2 px-4 py-3 rounded-xl border">


<option value="">
Select State
</option>


</select>


</div>





<div>

<label class="font-bold text-primary">
Local Government
</label>


<select
name="local_government"
id="local_government"
required
class="w-full mt-2 px-4 py-3 rounded-xl border">


<option value="">
Select Local Government
</option>


</select>


</div>



</div>







<!-- Skill -->


<div>


<label class="font-bold text-primary">
Skill Area
</label>


<input

required

name="skill_area"

class="input"

placeholder="Cleaning, Cooking, Laundry, Technician">


</div>








<!-- Details -->

<div>


<label class="font-bold text-primary">
Skills Details
</label>



<textarea

name="skills_details"

rows="5"

class="input"

placeholder="Describe worker skills, experience, certifications...">

</textarea>


</div>

<!-- Skill -->


<div class="grid md:grid-cols-2 gap-6">








<div>

<label class="font-bold text-primary">
Years of Experience
</label>


<input

type="number"

name="experience_years"

min="0"

required

class="input"

placeholder="5">


</div>


</div>








<!-- CV -->

<div>


<label class="font-bold text-primary">
Upload CV
</label>



<input

type="file"

name="cv_file"

accept=".pdf,.doc,.docx"

class="input">


<p class="text-xs text-gray-500 mt-2">
Allowed: PDF, DOC, DOCX
</p>


</div>








<button

type="submit"

class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:-translate-y-1 transition">


Register Worker


</button>




</form>






</div>


</main>


</div>





<script>


const locations = {
  "Abia": [
    "Aba North", "Aba South", "Arochukwu", "Bende", "Ikwuano",
    "Isiala-Ngwa North", "Isiala-Ngwa South", "Isuikwuato", "Obi Ngwa",
    "Ohafia", "Osisioma", "Ugwunagbo", "Ukwa East", "Ukwa West",
    "Umuahia North", "Umuahia South", "Umu Nneochi"
  ],

  "Adamawa": [
    "Demsa", "Fufore", "Ganye", "Gireri", "Gombi", "Guyuk", "Hong",
    "Jada", "Lamurde", "Madagali", "Maiha", "Mayo-Belwa", "Michika",
    "Mubi North", "Mubi South", "Numan", "Shelleng", "Song", "Toungo",
    "Yola North", "Yola South"
  ],

  "Akwa Ibom": [
    "Abak", "Eastern Obolo", "Eket", "Esit Eket", "Essien Udim",
    "Etim Ekpo", "Etinan", "Ibeno", "Ibesikpo Asutan", "Ibiono Ibom",
    "Ika", "Ikono", "Ikot Abasi", "Ikot Ekpene", "Ini", "Itu", "Mbo",
    "Mkpat Enin", "Nsit Atai", "Nsit Ibom", "Nsit Ubium", "Obot Akara",
    "Okobo", "Onna", "Oron", "Oruk Anam", "Udung Uko", "Ukanafun",
    "Uruan", "Urue-Offong/Oruko", "Uyo"
  ],

  "Anambra": [
    "Aguata", "Anambra East", "Anambra West", "Anaocha", "Awka North",
    "Awka South", "Ayamelum", "Dunukofia", "Ekwusigo", "Idemili North",
    "Idemili South", "Ihiala", "Njikoka", "Nnewi North", "Nnewi South",
    "Ogbaru", "Onitsha North", "Onitsha South", "Orumba North",
    "Orumba South", "Oyi"
  ],

  "Bauchi": [
    "Alkaleri", "Bauchi", "Bogoro", "Damban", "Darazo", "Dass",
    "Ganjuwa", "Giade", "Itas/Gadau", "Jama'are", "Katagum", "Kirfi",
    "Misau", "Ningi", "Shira", "Tafawa Balewa", "Toro", "Warji", "Zaki"
  ],

  "Bayelsa": [
    "Brass", "Ekeremor", "Kolokuma/Opokuma", "Nembe", "Ogbia",
    "Sagbama", "Southern Ijaw", "Yenagoa"
  ],

  "Benue": [
    "Ado", "Agatu", "Apa", "Buruku", "Gboko", "Guma", "Gwer East",
    "Gwer West", "Katsina-Ala", "Konshisha", "Kwande", "Logo", "Makurdi",
    "Obi", "Ogbadibo", "Oju", "Okpokwu", "Ohimini", "Oturkpo", "Tarka",
    "Ukum", "Ushongo", "Vandeikya"
  ],

  "Borno": [
    "Abadam", "Askira/Uba", "Bama", "Bayo", "Biu", "Chibok", "Damboa",
    "Dikwa", "Gubio", "Guzamala", "Gwoza", "Hawul", "Jere", "Kaga",
    "Kala/Balge", "Konduga", "Kukawa", "Kwaya Kusar", "Mafa", "Magumeri",
    "Maiduguri", "Marte", "Mobbar", "Monguno", "Ngala", "Nganzai", "Shani"
  ],

  "Cross River": [
    "Abi", "Akamkpa", "Akpabuyo", "Bakassi", "Bekwarra", "Biase", "Boki",
    "Calabar Municipal", "Calabar South", "Etung", "Ikom", "Obanliku",
    "Obubra", "Obudu", "Odukpani", "Ogoja", "Yakuur", "Yala"
  ],

  "Delta": [
    "Aniocha North", "Aniocha South", "Bomadi", "Burutu", "Ethiope East",
    "Ethiope West", "Ika North East", "Ika South", "Isoko North",
    "Isoko South", "Ndokwa East", "Ndokwa West", "Okpe", "Oshimili North",
    "Oshimili South", "Patani", "Sapele", "Udu", "Ughelli North",
    "Ughelli South", "Ukwuani", "Uvwie", "Warri North", "Warri South",
    "Warri South West"
  ],

  "Ebonyi": [
    "Abakaliki", "Afikpo North", "Afikpo South (Edda)", "Ebonyi",
    "Ezza North", "Ezza South", "Ikwo", "Ishiagu", "Ivo", "Izzi",
    "Ohaozara", "Ohaukwu", "Onicha"
  ],

  "Edo": [
    "Akoko-Edo", "Egor", "Esan Central", "Esan North-East",
    "Esan South-East", "Esan West", "Etsako Central", "Etsako East",
    "Etsako West", "Igueben", "Ikpoba-Okha", "Oredo", "Orhionmwon",
    "Ovia North-East", "Ovia South-West", "Owan East", "Owan West",
    "Uhunmwonde"
  ],

  "Ekiti": [
    "Ado-Ekiti", "Efon", "Ekiti East", "Ekiti South-West", "Ekiti West",
    "Emure", "Gbonyin", "Ido-Osi", "Ijero", "Ikere", "Ikole",
    "Ilejemeje", "Irepodun/Ifelodun", "Ise/Orun", "Moba", "Oye"
  ],

  "Enugu": [
    "Aninri", "Awgu", "Enugu East", "Enugu North", "Enugu South",
    "Ezeagu", "Igbo-Etiti", "Igbo-Eze North", "Igbo-Eze South", "Isi-Uzo",
    "Nkanu East", "Nkanu West", "Nsukka", "Oji River", "Udenu", "Udi",
    "Uzo-Uwani"
  ],

  "FCT": [
    "Abaji", "Abuja Municipal", "Bwari", "Gwagwalada", "Kuje", "Kwali"
  ],

  "Gombe": [
    "Akko", "Balanga", "Billiri", "Dukku", "Funakaye", "Gombe",
    "Kaltungo", "Kwami", "Nafada", "Shongom", "Yamaltu/Deba"
  ],

  "Imo": [
    "Aboh-Mbaise", "Ahiazu-Mbaise", "Ehime-Mbano", "Ezinihitte",
    "Ideato North", "Ideato South", "Ihitte/Uboma", "Ikeduru",
    "Isiala Mbano", "Isu", "Mbaitoli", "Ngor-Okpala", "Njaba",
    "Nwangele", "Nkwerre", "Obowo", "Oguta", "Ohaji/Egbema", "Okigwe",
    "Orlu", "Orsu", "Oru East", "Oru West", "Owerri Municipal",
    "Owerri North", "Owerri West"
  ],

  "Jigawa": [
    "Auyo", "Babura", "Birni Kudu", "Birniwa", "Buji", "Dutse",
    "Gagarawa", "Garki", "Gumel", "Guri", "Gwaram", "Gwiwa", "Hadejia",
    "Jahun", "Kafin Hausa", "Kaugama", "Kazaure", "Kiri Kasamma",
    "Kiyawa", "Maigatari", "Malam Madori", "Miga", "Ringim", "Roni",
    "Sule Tankarkar", "Taura", "Yankwashi"
  ],

  "Kaduna": [
    "Birnin Gwari", "Chikun", "Giwa", "Igabi", "Ikara", "Jaba", "Jema'a",
    "Kachia", "Kaduna North", "Kaduna South", "Kagarko", "Kajuru",
    "Kaura", "Kauru", "Kubau", "Kudan", "Lere", "Makarfi", "Sabon Gari",
    "Sanga", "Soba", "Zangon Kataf", "Zaria"
  ],

  "Kano": [
    "Ajingi", "Albasu", "Bagwai", "Bebeji", "Bichi", "Bunkure", "Dala",
    "Dambatta", "Dawakin Kudu", "Dawakin Tofa", "Doguwa", "Fagge",
    "Gabasawa", "Garko", "Garun Mallam", "Gaya", "Gezawa", "Gwale",
    "Gwarzo", "Kabo", "Kano Municipal", "Karaye", "Kibiya", "Kiru",
    "Kumbotso", "Kunchi", "Kura", "Madobi", "Makoda", "Minjibir",
    "Nasarawa", "Rano", "Rimin Gado", "Rogo", "Shanono", "Sumaila",
    "Takai", "Tarauni", "Tofa", "Tsanyawa", "Tudun Wada", "Ungogo",
    "Warawa", "Wudil"
  ],

  "Katsina": [
    "Bakori", "Batagarawa", "Batsari", "Baure", "Bindawa", "Charanchi",
    "Dandume", "Danja", "Dan Musa", "Daura", "Dutsi", "Dutsin-Ma",
    "Faskari", "Funtua", "Ingawa", "Jibia", "Kafur", "Kaita", "Kankara",
    "Kankia", "Katsina", "Kurfi", "Kusada", "Mai'Adua", "Malumfashi",
    "Mani", "Mashi", "Matazu", "Musawa", "Rimi", "Sabuwa", "Safana",
    "Sandamu", "Zango"
  ],

  "Kebbi": [
    "Aleiro", "Arewa Dandi", "Argungu", "Augie", "Bagudo", "Birnin Kebbi",
    "Bunza", "Dandi", "Fakai", "Gwandu", "Jega", "Kalgo", "Koko/Besse",
    "Maiyama", "Ngaski", "Sakaba", "Shanga", "Suru", "Wasagu/Danko",
    "Yauri", "Zuru"
  ],

  "Kogi": [
    "Adavi", "Ajaokuta", "Ankpa", "Bassa", "Dekina", "Ibaji", "Idah",
    "Igalamela-Odolu", "Ijumu", "Kabba/Bunu", "Kogi", "Koton Karfe",
    "Lokoja", "Mopa-Muro", "Ofu", "Ogori/Magongo", "Okehi", "Okene",
    "Olamaboro", "Omala", "Yagba East", "Yagba West"
  ],

  "Kwara": [
    "Asa", "Baruten", "Edu", "Ekiti", "Ifelodun", "Ilorin East",
    "Ilorin South", "Ilorin West", "Irepodun", "Isin", "Kaiama", "Moro",
    "Offa", "Oke Ero", "Oyun", "Pategi"
  ],

  "Lagos": [
    "Agege", "Ajeromi-Ifelodun", "Alimosho", "Amuwo-Odofin", "Apapa",
    "Badagry", "Epe", "Eti-Osa", "Ibeju-Lekki", "Ifako-Ijaiye", "Ikeja",
    "Ikorodu", "Kosofe", "Lagos Island", "Lagos Mainland", "Mushin", "Ojo",
    "Oshodi-Isolo", "Shomolu", "Surulere"
  ],

  "Nasarawa": [
    "Akwanga", "Awe", "Doma", "Karu", "Keana", "Keffi", "Kokona", "Lafia",
    "Nasarawa", "Nasarawa Eggon", "Obi", "Toto", "Wamba"
  ],

  "Niger": [
    "Agaie", "Agwara", "Bida", "Borgu", "Bosso", "Chanchaga", "Edati",
    "Gbako", "Gurara", "Katcha", "Kontagora", "Lapai", "Lavun", "Magama",
    "Mariga", "Mashegu", "Mokwa", "Munya", "Paikoro", "Rafi", "Rijau",
    "Shiroro", "Suleja", "Tafa", "Wushishi"
  ],

  "Ogun": [
    "Abeokuta North", "Abeokuta South", "Ado-Odo/Ota", "Egbado North",
    "Egbado South", "Ewekoro", "Ifo", "Ijebu East", "Ijebu North",
    "Ijebu North East", "Ijebu Ode", "Ikenne", "Imeko Afon", "Ipokia",
    "Obafemi Owode", "Odeda", "Odogbolu", "Ogun Waterside", "Remo North",
    "Sagamu"
  ],

  "Ondo": [
    "Akoko North East", "Akoko North West", "Akoko South East",
    "Akoko South West", "Akure North", "Akure South", "Ese Odo", "Idanre",
    "Ifedore", "Ilaje", "Ile Oluji/Okeigbo", "Irele", "Odigbo",
    "Okitipupa", "Ondo East", "Ondo West", "Ose", "Owo"
  ],

  "Osun": [
    "Atakunmosa East", "Atakunmosa West", "Ayedaade", "Ayedire",
    "Boluwaduro", "Boripe", "Ede North", "Ede South", "Egbeda", "Ejigbo",
    "Ife Central", "Ife East", "Ife North", "Ife South", "Ifedayo",
    "Ifelodun", "Ila", "Ilesa East", "Ilesa West", "Irepodun", "Iwo",
    "Obokun", "Odo Otin", "Ola Oluwa", "Olorunda", "Oriade", "Orolu",
    "Osogbo"
  ],

  "Oyo": [
    "Afijio", "Akinyele", "Atiba", "Atisbo", "Egbeda", "Ibadan North",
    "Ibadan North East", "Ibadan North West", "Ibadan South East",
    "Ibadan South West", "Ibarapa Central", "Ibarapa East",
    "Ibarapa North", "Ido", "Irepo", "Iseyin", "Itesiwaju", "Iwajowa",
    "Kajola", "Lagelu", "Ogbomosho North", "Ogbomosho South",
    "Ogo Oluwa", "Olorunsogo", "Oluyole", "Ona Ara", "Orelope",
    "Ori Ire", "Oyo East", "Oyo West", "Saki East", "Saki West", "Surulere"
  ],

  "Plateau": [
    "Barkin Ladi", "Bassa", "Bokkos", "Jos East", "Jos North", "Jos South",
    "Kanam", "Kanke", "Langtang North", "Langtang South", "Mangu",
    "Mikang", "Pankshin", "Qua'an Pan", "Riyom", "Shendam", "Wase"
  ],

  "Rivers": [
    "Abua/Odual", "Ahoada East", "Ahoada West", "Akuku Toru", "Andoni",
    "Asari-Toru", "Bonny", "Degema", "Eleme", "Emohua", "Etche", "Gokana",
    "Ikwerre", "Khana", "Obio/Akpor", "Ogba/Egbema/Ndoni", "Ogu/Bolo",
    "Okrika", "Omuma", "Opobo/Nkoro", "Oyigbo", "Port Harcourt", "Tai"
  ],

  "Sokoto": [
    "Binji", "Bodinga", "Dange Shuni", "Gada", "Goronyo", "Gwadabawa",
    "Illela", "Isa", "Kebbe", "Kware", "Rabah", "Sabon Birni", "Shagari",
    "Silame", "Sokoto North", "Sokoto South", "Tambuwal", "Tangaza",
    "Tureta", "Wamako", "Wurno", "Yabo"
  ],

  "Taraba": [
    "Ardo Kola", "Bali", "Donga", "Gashaka", "Gassol", "Ibi", "Jalingo",
    "Karim Lamido", "Kumi", "Lau", "Sardauna", "Takum", "Ussa", "Wukari",
    "Yorro", "Zing"
  ],

  "Yobe": [
    "Bade", "Bursari", "Damaturu", "Fika", "Fune", "Geidam", "Gujba",
    "Gulani", "Jakusko", "Karasuwa", "Machina", "Nangere", "Nguru",
    "Potiskum", "Tarmuwa", "Yunusari", "Yusufari"
  ],

  "Zamfara": [
    "Anka", "Bakura", "Birnin Magaji", "Bukkuyum", "Bungudu", "Gummi",
    "Gusau", "Isa", "Kaura Namoda", "Kiyawa", "Maradun", "Maru",
    "Shinkafi", "Talata Mafara", "Tsafe", "Zurmi"
  ]
};




const stateSelect = document.getElementById("state");

const lgaSelect = document.getElementById("local_government");


// load states

Object.keys(locations).forEach(state => {


    let option = document.createElement("option");

    option.value = state;

    option.textContent = state;


    stateSelect.appendChild(option);


});



// change state

stateSelect.addEventListener("change", function(){


    let selected = this.value;


    lgaSelect.innerHTML =
    `<option value="">Select Local Government</option>`;


    if(locations[selected]){


        locations[selected].forEach(lga=>{


            let option = document.createElement("option");


            option.value = lga;

            option.textContent = lga;


            lgaSelect.appendChild(option);


        });


    }


});



</script>




<style>

.input{

width:100%;
background:white;
border:1px solid #ddd;
border-radius:12px;
padding:12px;

}

</style>



<?php include 'includes/footer.php'; ?>