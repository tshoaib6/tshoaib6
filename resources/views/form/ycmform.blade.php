@extends('layouts.master')
@section('content')
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
<div class="shadow-lg p-4">
<div style="margin-bottom: 20px">
 <img src="{{ URL::to('/assets/images/yclogo.png') }}" alt="" style="display: inline-block">
<h1 style="display: inline-block; margin-left:10px; color:	#800000;">YC DATA COLLECTION FORM </h1>
</div>

<div style=" background-color:	#800000;">
    <h1 style="color: white; font-size:30px;">Basic Info</h1>
</div>
@include('errors.messages')
    <form enctype="multipart/form-data" action="{{ route('all/employee/save') }}" method="POST">
        @csrf
        <div class="col-md-4">
            <div class="form-group">
                <label class="col-form-label ">Upload Picture</label>
                <input class="form-control  @error('name') is-invalid @enderror " type="file" id="avatar" name="avatar" placeholder="Upload Picture" value="default.jpeg">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label ">First Name </label>
                    <input class="form-control  @error('name') is-invalid @enderror " type="text" id="name" name="name" placeholder="First Name" value="{{old('name')}}">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Last Name</label>
                    <input class="form-control @error('name') is-invalid @enderror " type="text" id="name" name="lname" placeholder="Last Name" value="{{old('lname')}}">

                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Cnic</label>
                    <input class="form-control @error('cnic') is-invalid @enderror " type="text" id="name" name="cnic" placeholder="Cnic" value="{{old('cnic')}}">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Birth Date</label>
                    <div class="cal-icon">
                        <input class="form-control datetimepicker @error('birthDate') is-invalid @enderror " type="text" id="birthDate" name="birthDate" value="{{old('birthDate')}}">
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="form-group">

                    <label class="col-form-label">Address</label>
                    <input class="form-control @error('address') is-invalid @enderror " type="text" id="address" name="address" placeholder="Address" value="{{old('address')}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">City </label>
                    {{-- <input class="form-control @error('city') is-invalid @enderror" type="text" id="city" name="city" placeholder="City" value="{{old('city')}}"> --}}
                    <select  class="select form-control" name="city" id="Location" required>
                        <option value="" disabled selected>Select The City</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Rawalpindi">Rawalpindi</option>

                        <option value="" disabled>Punjab Cities</option>
                        <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                        <option value="Ahmadpur East">Ahmadpur East</option>
                        <option value="Ali Khan Abad">Ali Khan Abad</option>
                        <option value="Alipur">Alipur</option>
                        <option value="Arifwala">Arifwala</option>
                        <option value="Attock">Attock</option>
                        <option value="Bhera">Bhera</option>
                        <option value="Bhalwal">Bhalwal</option>
                        <option value="Bahawalnagar">Bahawalnagar</option>
                        <option value="Bahawalpur">Bahawalpur</option>
                        <option value="Bhakkar">Bhakkar</option>
                        <option value="Burewala">Burewala</option>
                        <option value="Chillianwala">Chillianwala</option>
                        <option value="Chakwal">Chakwal</option>
                        <option value="Chichawatni">Chichawatni</option>
                        <option value="Chiniot">Chiniot</option>
                        <option value="Chishtian">Chishtian</option>
                        <option value="Daska">Daska</option>
                        <option value="Darya Khan">Darya Khan</option>
                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                        <option value="Dhaular">Dhaular</option>
                        <option value="Dina">Dina</option>
                        <option value="Dinga">Dinga</option>
                        <option value="Dipalpur">Dipalpur</option>
                        <option value="Faisalabad">Faisalabad</option>
                        <option value="Ferozewala">Ferozewala</option>
                        <option value="Fateh Jhang">Fateh Jang</option>
                        <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                        <option value="Gojra">Gojra</option>
                        <option value="Gujranwala">Gujranwala</option>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Gujar Khan">Gujar Khan</option>
                        <option value="Hafizabad">Hafizabad</option>
                        <option value="Haroonabad">Haroonabad</option>
                        <option value="Hasilpur">Hasilpur</option>
                        <option value="Haveli Lakha">Haveli Lakha</option>
                        <option value="Jatoi">Jatoi</option>
                        <option value="Jalalpur">Jalalpur</option>
                        <option value="Jattan">Jattan</option>
                        <option value="Jampur">Jampur</option>
                        <option value="Jaranwala">Jaranwala</option>
                        <option value="Jhang">Jhang</option>
                        <option value="Jhelum">Jhelum</option>
                        <option value="Kalabagh">Kalabagh</option>
                        <option value="Karor Lal Esan">Karor Lal Esan</option>
                        <option value="Kasur">Kasur</option>
                        <option value="Kamalia">Kamalia</option>
                        <option value="Kamoke">Kamoke</option>
                        <option value="Khanewal">Khanewal</option>
                        <option value="Khanpur">Khanpur</option>
                        <option value="Kharian">Kharian</option>
                        <option value="Khushab">Khushab</option>
                        <option value="Kot Addu">Kot Addu</option>
                        <option value="Jauharabad">Jauharabad</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Lalamusa">Lalamusa</option>
                        <option value="Layyah">Layyah</option>
                        <option value="Liaquat Pur">Liaquat Pur</option>
                        <option value="Lodhran">Lodhran</option>
                        <option value="Malakwal">Malakwal</option>
                        <option value="Mamoori">Mamoori</option>
                        <option value="Mailsi">Mailsi</option>
                        <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                        <option value="Mian Channu">Mian Channu</option>
                        <option value="Mianwali">Mianwali</option>
                        <option value="Multan">Multan</option>
                        <option value="Murree">Murree</option>
                        <option value="Muridke">Muridke</option>
                        <option value="Mianwali Bangla">Mianwali Bangla</option>
                        <option value="Muzaffargarh">Muzaffargarh</option>
                        <option value="Narowal">Narowal</option>
                        <option value="Nankana Sahib">Nankana Sahib</option>
                        <option value="Okara">Okara</option>
                        <option value="Renala Khurd">Renala Khurd</option>
                        <option value="Pakpattan">Pakpattan</option>
                        <option value="Pattoki">Pattoki</option>
                        <option value="Pir Mahal">Pir Mahal</option>
                        <option value="Qaimpur">Qaimpur</option>
                        <option value="Qila Didar Singh">Qila Didar Singh</option>
                        <option value="Rabwah">Rabwah</option>
                        <option value="Raiwind">Raiwind</option>
                        <option value="Rajanpur">Rajanpur</option>
                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                        <option value="Rawalpindi">Rawalpindi</option>
                        <option value="Sadiqabad">Sadiqabad</option>
                        <option value="Safdarabad">Safdarabad</option>
                        <option value="Sahiwal">Sahiwal</option>
                        <option value="Sangla Hill">Sangla Hill</option>
                        <option value="Sarai Alamgir">Sarai Alamgir</option>
                        <option value="Sargodha">Sargodha</option>
                        <option value="Shakargarh">Shakargarh</option>
                        <option value="Sheikhupura">Sheikhupura</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Sohawa">Sohawa</option>
                        <option value="Soianwala">Soianwala</option>
                        <option value="Siranwali">Siranwali</option>
                        <option value="Talagang">Talagang</option>
                        <option value="Taxila">Taxila</option>
                        <option value="Toba Tek Singh">Toba Tek Singh</option>
                        <option value="Vehari">Vehari</option>
                        <option value="Wah Cantonment">Wah Cantonment</option>
                        <option value="Wazirabad">Wazirabad</option>
                        <option value="" disabled>Sindh Cities</option>
                        <option value="Badin">Badin</option>
                        <option value="Bhirkan">Bhirkan</option>
                        <option value="Rajo Khanani">Rajo Khanani</option>
                        <option value="Chak">Chak</option>
                        <option value="Dadu">Dadu</option>
                        <option value="Digri">Digri</option>
                        <option value="Diplo">Diplo</option>
                        <option value="Dokri">Dokri</option>
                        <option value="Ghotki">Ghotki</option>
                        <option value="Haala">Haala</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Islamkot">Islamkot</option>
                        <option value="Jacobabad">Jacobabad</option>
                        <option value="Jamshoro">Jamshoro</option>
                        <option value="Jungshahi">Jungshahi</option>
                        <option value="Kandhkot">Kandhkot</option>
                        <option value="Kandiaro">Kandiaro</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Kashmore">Kashmore</option>
                        <option value="Keti Bandar">Keti Bandar</option>
                        <option value="Khairpur">Khairpur</option>
                        <option value="Kotri">Kotri</option>
                        <option value="Larkana">Larkana</option>
                        <option value="Matiari">Matiari</option>
                        <option value="Mehar">Mehar</option>
                        <option value="Mirpur Khas">Mirpur Khas</option>
                        <option value="Mithani">Mithani</option>
                        <option value="Mithi">Mithi</option>
                        <option value="Mehrabpur">Mehrabpur</option>
                        <option value="Moro">Moro</option>
                        <option value="Nagarparkar">Nagarparkar</option>
                        <option value="Naudero">Naudero</option>
                        <option value="Naushahro Feroze">Naushahro Feroze</option>
                        <option value="Naushara">Naushara</option>
                        <option value="Nawabshah">Nawabshah</option>
                        <option value="Nazimabad">Nazimabad</option>
                        <option value="Qambar">Qambar</option>
                        <option value="Qasimabad">Qasimabad</option>
                        <option value="Ranipur">Ranipur</option>
                        <option value="Ratodero">Ratodero</option>
                        <option value="Rohri">Rohri</option>
                        <option value="Sakrand">Sakrand</option>
                        <option value="Sanghar">Sanghar</option>
                        <option value="Shahbandar">Shahbandar</option>
                        <option value="Shahdadkot">Shahdadkot</option>
                        <option value="Shahdadpur">Shahdadpur</option>
                        <option value="Shahpur Chakar">Shahpur Chakar</option>
                        <option value="Shikarpaur">Shikarpaur</option>
                        <option value="Sukkur">Sukkur</option>
                        <option value="Tangwani">Tangwani</option>
                        <option value="Tando Adam Khan">Tando Adam Khan</option>
                        <option value="Tando Allahyar">Tando Allahyar</option>
                        <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                        <option value="Thatta">Thatta</option>
                        <option value="Umerkot">Umerkot</option>
                        <option value="Warah">Warah</option>
                        <option value="" disabled>Khyber Cities</option>
                        <option value="Abbottabad">Abbottabad</option>
                        <option value="Adezai">Adezai</option>
                        <option value="Alpuri">Alpuri</option>
                        <option value="Akora Khattak">Akora Khattak</option>
                        <option value="Ayubia">Ayubia</option>
                        <option value="Banda Daud Shah">Banda Daud Shah</option>
                        <option value="Bannu">Bannu</option>
                        <option value="Batkhela">Batkhela</option>
                        <option value="Battagram">Battagram</option>
                        <option value="Birote">Birote</option>
                        <option value="Chakdara">Chakdara</option>
                        <option value="Charsadda">Charsadda</option>
                        <option value="Chitral">Chitral</option>
                        <option value="Daggar">Daggar</option>
                        <option value="Dargai">Dargai</option>
                        <option value="Darya Khan">Darya Khan</option>
                        <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                        <option value="Doaba">Doaba</option>
                        <option value="Dir">Dir</option>
                        <option value="Drosh">Drosh</option>
                        <option value="Hangu">Hangu</option>
                        <option value="Haripur">Haripur</option>
                        <option value="Karak">Karak</option>
                        <option value="Kohat">Kohat</option>
                        <option value="Kulachi">Kulachi</option>
                        <option value="Lakki Marwat">Lakki Marwat</option>
                        <option value="Latamber">Latamber</option>
                        <option value="Madyan">Madyan</option>
                        <option value="Mansehra">Mansehra</option>
                        <option value="Mardan">Mardan</option>
                        <option value="Mastuj">Mastuj</option>
                        <option value="Mingora">Mingora</option>
                        <option value="Nowshera">Nowshera</option>
                        <option value="Paharpur">Paharpur</option>
                        <option value="Pabbi">Pabbi</option>
                        <option value="Peshawar">Peshawar</option>
                        <option value="Saidu Sharif">Saidu Sharif</option>
                        <option value="Shorkot">Shorkot</option>
                        <option value="Shewa Adda">Shewa Adda</option>
                        <option value="Swabi">Swabi</option>
                        <option value="Swat">Swat</option>
                        <option value="Tangi">Tangi</option>
                        <option value="Tank">Tank</option>
                        <option value="Thall">Thall</option>
                        <option value="Timergara">Timergara</option>
                        <option value="Tordher">Tordher</option>
                        <option value="" disabled>Balochistan Cities</option>
                        <option value="Awaran">Awaran</option>
                        <option value="Barkhan">Barkhan</option>
                        <option value="Chagai">Chagai</option>
                        <option value="Dera Bugti">Dera Bugti</option>
                        <option value="Gwadar">Gwadar</option>
                        <option value="Harnai">Harnai</option>
                        <option value="Jafarabad">Jafarabad</option>
                        <option value="Jhal Magsi">Jhal Magsi</option>
                        <option value="Kacchi">Kacchi</option>
                        <option value="Kalat">Kalat</option>
                        <option value="Kech">Kech</option>
                        <option value="Kharan">Kharan</option>
                        <option value="Khuzdar">Khuzdar</option>
                        <option value="Killa Abdullah">Killa Abdullah</option>
                        <option value="Killa Saifullah">Killa Saifullah</option>
                        <option value="Kohlu">Kohlu</option>
                        <option value="Lasbela">Lasbela</option>
                        <option value="Lehri">Lehri</option>
                        <option value="Loralai">Loralai</option>
                        <option value="Mastung">Mastung</option>
                        <option value="Musakhel">Musakhel</option>
                        <option value="Nasirabad">Nasirabad</option>
                        <option value="Nushki">Nushki</option>
                        <option value="Panjgur">Panjgur</option>
                        <option value="Pishin Valley">Pishin Valley</option>
                        <option value="Quetta">Quetta</option>
                        <option value="Sherani">Sherani</option>
                        <option value="Sibi">Sibi</option>
                        <option value="Sohbatpur">Sohbatpur</option>
                        <option value="Washuk">Washuk</option>
                        <option value="Zhob">Zhob</option>
                        <option value="Ziarat">Ziarat</option>
                      </select>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Country</label>
                    {{-- <input class="form-control @error('country') is-invalid @enderror" type="text" id="country" name="country" placeholder="Country" value="{{old('country')}}"> --}}
                    <select class="select form-control" id="country" name="country" class="form-control">
                        <option value="" disabled selected>Select The City</option>

                    <option value="Pakistan">Pakistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Phone No</label>
                    <input class="form-control @error('phno') is-invalid @enderror" type="text" id="phno" name="phno" placeholder="Phone Number" value="{{old('phno')}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Whatsapp No</label>
                    <input class="form-control @error('whatsappNo') is-invalid @enderror" type="text" id="whatsAppNo" name="whatsappNo" placeholder="WhatsApp Number" value="{{old('whatsappNo')}}">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Gender</label>
                    <select class="select form-control @error('gender') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="gender" value="{{old('gender')}}">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                    <input class="form-control @error('email') is-invalid @enderror " type="email" id="name" name="email" placeholder="Email" value="{{old('email')}}" >
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Martial Status</label>
                    <select class="select form-control @error('martial') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" id="gender" name="martial" value="{{old('martial')}}">
                        <option value="M">Married </option>
                        <option value="U">Unmarried</option>
                    </select>
                </div>
            </div>

            <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                <h1 style="color: white; font-size:30px; " >Qualifications </h1>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Qualifications</label>
                    <select class="select form-control @error('qualification') is-invalid @enderror" style="width: 100%;" tabindex="-1" aria-hidden="true" id="qualification" name="qualification">
                        <option value="male">Doctrate</option>
                        <option value="female">Master</option>
                        <option value="female">Bachelors</option>
                        <option value="female">Diploma</option>
                        <option value="female">HSSC/A-Level</option>
                        <option value="female">SSC/O-Level</option>
                        <option value="female">School</option>

                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Institute </label>
                    <input class="form-control @error('qu_insitute') is-invalid @enderror" type="text" id="qu_insitute" name="qu_insitute" placeholder="Educational Institute" value="{{old('qu_insitute')}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Course </label>
                    <input class="form-control @error('qu_course') is-invalid @enderror" type="text" id="qu_course" name="qu_course" placeholder="Course" value="{{old('qu_course')}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Year</label>
                    <input class="form-control @error('qu_year') is-invalid @enderror" type="text" id="qu_year" name="qu_year" placeholder="Year" value="{{old('qu_year')}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="col-form-label">Field Of Study</label>
                    <input class="form-control @error('qu_fod') is-invalid @enderror" type="text" id="qu_fod" name="qu_fod" placeholder="Field Of Study" value="{{old('qu_fod')}}">
                </div>
            </div>
            <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                <h1 style="color: white; font-size:30px; " >Isalmic Studies </h1>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Islamic Studies </label>
                    <select  class="select form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" id="fod" name="fod" value="{{old('fod')}}" >
                        <option value="1">Formal</option>
                        <option value="0" selected>Unformal</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive" id="hidden_div" style="display: none">
                <table class="table table-bordered" id="dynamic_field">
                    <tr> <th>Course</th>  <th>Institute</th> <th>Year</th></tr>
                    <tr>
                        <td><input class="form-control @error('Islamic_course.0') is-invalid @enderror" type="text" name="Islamic_course[]" placeholder="Course" class="form-control name_list"  value="{{old('Islamic_course.0')}}"/></td>
                        <td><input class="form-control @error('Islamic_institute.0') is-invalid @enderror" type="text" name="Islamic_institute[]" placeholder="Institute" class="form-control name_list " value="{{old('Islamic_institute.0')}}"/></td>
                        <td><input class="form-control @error('Islamic_year.0') is-invalid @enderror" type="date" name="Islamic_year[]" placeholder="Year" class="form-control name_list" value="{{old('Islamic_year.0')}}" /></td>

                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>

            </div>


            <div class="table-responsive">
                <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                    <h1 style="color: white; font-size:30px; " >Job Experience </h1>
                </div>
                <table class="table table-bordered" id="dynamic_job_field">
                    <tr> <th>Position</th>  <th>Institute</th> <th>From</th> <th>To</th> </tr>
                    <tr>
                        <td><input class="form-control @error('job_position.0') is-invalid @enderror"  type="text" name="job_position[]" placeholder="Position" class="form-control name_list" value="{{old('job_position.0')}}"></td>
                        <td><input class="form-control @error('job_institute.0') is-invalid @enderror" type="text" name="job_institute[]" placeholder="Institute" class="form-control name_list"  value="{{old('job_institute.0')}}"></td>
                       <td>
                        <div class="form-group">
                            <div class="cal-icon">
                                <input id="datefrom" container="body" class="form-control  @error('job_from.0') is-invalid @enderror"  type="text" placeholder="From"  name="job_from[]" value="{{old('job_from.0')}}">
                            </div>
                        </div>

                         </td>

                         <td>
                            <div class="form-group">
                                <div class="cal-icon">
                                    <input id="dateto" container="body" class="form-control @error('job_to.0') is-invalid @enderror" id="date" type="text" placeholder="From"  name="job_to[]" value="{{old('job_to.0')}}">
                                </div>
                            </div>

                             </td>

                         <td><button type="button" name="add_job" id="add_job" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>

            </div>


            <div class="table-responsive">
                <div  class="col-sm-12" style=" margin-bottom:20px; background-color:	#800000;">
                    <h1 style="color: white; font-size:30px; " >Dawah Experience</h1>
                </div>
                <table class="table table-bordered" id="dynamic_dawah_field">
                    <tr> <th>Position</th>  <th>Institute</th> <th>From</th> <th>To</th> </tr>
                    <tr>
                        <td><input class="form-control @error('dawah_position.0') is-invalid @enderror" type="text" name="dawah_position[]" placeholder="Position" class="form-control name_list" value={{old('dawah_position.0')}}></td>
                        <td><input class="form-control @error('dawah_institute.0') is-invalid @enderror" type="text" name="dawah_institute[]" placeholder="Institute" class="form-control name_list" value="{{old('dawah_institute.0')}}" /></td>
                        {{-- <td><input class="form-control @error('dawah_from.0') is-invalid @enderror" type="date" name="dawah_from[]" placeholder="From" class="form-control name_list" value="{{old('dawah_from.0')}}"/></td>
                        <td><input class="form-control @error('dawah_to.0') is-invalid @enderror" type="date" name="dawah_to[]" placeholder="To" class="form-control name_list" value="{{old('dawah_to.0')}}" /></td> --}}
                            <td>
                                <div class="form-group">
                                    <div class="cal-icon">
                                        <input id="dawahdatefrom" container="body" class="form-control  @error('dawah_from.0') is-invalid @enderror"  type="text" placeholder="From"  name="dawah_from[]" value="{{old('dawah_from.0')}}">
                                    </div>
                                </div>

                             </td>

                            <td>
                                <div class="form-group">
                                    <div class="cal-icon">
                                        <input id="dawahdateto" container="body" class="form-control @error('dawah_from.0') is-invalid @enderror" id="date" type="text" placeholder="From"  name="dawah_to[]" value="{{old('dawah_to.0')}}">
                                    </div>
                                </div>

                            </td>
                         <td><button type="button" name="add_dawah" id="add_dawah" class="btn btn-success">Add More</button></td>
                    </tr>
                </table>

            </div>

            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Number of Months Served as YC Volunteer</label>
                    <input class="form-control @error('volunteer') is-invalid @enderror "  type="text" id="volunteer" name="volunteer" placeholder="Volunteer" value="{{old('volunteer')}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label">Designation</label>
                    <input class="form-control @error('Desgination') is-invalid @enderror"  type="text" id="Desgination" name="Desgination" placeholder="Desgination" value="{{old('Desgination')}}">

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">

                    <label class="col-form-label"> YC Chapter</label>
                    <input class="form-control  @error('Chapter') is-invalid @enderror" type="text" id="Chapter"  name="Chapter" placeholder="Chapter" value="{{old('Chapter')}}">

                </div>
            </div>


        <div class="submit-section col-sm-12">
            <br>
            <button class="btn btn-primary submit-btn">Submit</button>
        </div>



    </form>


</div>
    </div>
</div>
@section('script')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet"type="text/css"/>
<script>
$(function () {
    $("#datefrom").datepicker({
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#dateto").datepicker("option", "minDate", dt);
        }
    });

    $("#dateto").datepicker({
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#datefrom").datepicker("option", "maxDate", dt);
        }
    });
});
</script>

<script>

    $(function () {
        $("#dawahdatefrom").datepicker({
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() + 1);
                $("#dawahdateto").datepicker("option", "minDate", dt);
            }
        });
        $("#dawahdateto").datepicker({
            onSelect: function (selected) {
                var dt = new Date(selected);
                dt.setDate(dt.getDate() - 1);
                $("#dawahdatefrom").datepicker("option", "maxDate", dt);
            }
        });
    });
    </script>

<script>




$(document).ready(function(){
    $("#fod").change(function(){
    var val=$("#fod").val();
        if(val==1){
           $("#hidden_div").show();
        }

       else{
        $("#hidden_div").hide();
       }


    })



})
</script>
<script>
    $("input:checkbox").on('click', function()
    {
        var $box = $(this);
        if ($box.is(":checked"))
        {
            var group = "input:checkbox[class='" + $box.attr("class") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        }
        else
        {
            $box.prop("checked", false);
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

<script>
    $(document).ready(function() {
        $('.select2s-hidden-accessible').select2({
            closeOnSelect: false
        });
    });
</script>

<script>


    $(document).on('click','.userUpdate',function()
    {
        var _this = $(this).parents('tr');
        $('#e_id').val(_this.find('.id').text());
        $('#e_name').val(_this.find('.name').text());
        $('#e_email').val(_this.find('.email').text());
        $('#e_phone_number').val(_this.find('.phone_number').text());
        $('#e_image').val(_this.find('.image').text());

        var name_role = (_this.find(".role_name").text());
        var _option = '<option selected value="' + name_role+ '">' + _this.find('.role_name').text() + '</option>'
        $( _option).appendTo("#e_role_name");

        var position = (_this.find(".position").text());
        var _option = '<option selected value="' +position+ '">' + _this.find('.position').text() + '</option>'
        $( _option).appendTo("#e_position");

        var department = (_this.find(".department").text());
        var _option = '<option selected value="' +department+ '">' + _this.find('.department').text() + '</option>'
        $( _option).appendTo("#e_department");

        var statuss = (_this.find(".statuss").text());
        var _option = '<option selected value="' +statuss+ '">' + _this.find('.statuss').text() + '</option>'
        $( _option).appendTo("#e_status");

    });

    $(document).ready(function(){
  var postURL = "<?php echo url('addmore'); ?>";
  var i=1;


  $('#add').click(function(){
       i++;
       $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="Islamic_institute[]" placeholder="Institute" class="form-control name_list" /></td><td><input type="text" name="Islamic_course[]" placeholder="Course" class="form-control name_list" /></td><td><input type="date" name="Islamic_year[]" placeholder="Year" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });


  $(document).on('click', '.btn_remove', function(){
       var button_id = $(this).attr("id");
       $('#row'+button_id+'').remove();
  });




});
</script>
<script>
$(document).ready(function(){
  var postURL = "<?php echo url('addmore'); ?>";
  var i=1;


  $('#add_job').click(function(){
       i++;
       $('#dynamic_job_field').append('<tr id="row'+i+'" class="dynamic-job-added"><td><input type="text" name="job_position[]" placeholder="Position" class="form-control name_list" /></td><td><input type="text" name="job_institute[]" placeholder="Institute" class="form-control name_list" /></td><td><input type="date" name="job_from[]" placeholder="From" class="form-control name_list" /></td><td><input type="date" name="job_to[]" placeholder="To" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });


  $(document).on('click', '.btn_remove', function(){
       var button_id = $(this).attr("id");
       $('#row'+button_id+'').remove();
  });


  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  $('#submit').click(function(){
       $.ajax({
            url:postURL,
            method:"POST",
            data:$('#add_name').serialize(),
            type:'json',
            success:function(data)
            {
                if(data.error){
                    printErrorMsg(data.error);
                }else{
                    i=1;
                    $('.dynamic-added').remove();
                    $('#add_name')[0].reset();
                    $(".print-success-msg").find("ul").html('');
                    $(".print-success-msg").css('display','block');
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                }
            }
       });
  });


  function printErrorMsg (msg) {
     $(".print-error-msg").find("ul").html('');
     $(".print-error-msg").css('display','block');
     $(".print-success-msg").css('display','none');
     $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
     });
  }
}); </script>

<script>
$(document).ready(function(){
  var postURL = "<?php echo url('addmore'); ?>";
  var i=1;


  $('#add_dawah').click(function(){
       i++;
       $('#dynamic_dawah_field').append('<tr id="row'+i+'" class="dynamic-dawah-added"><td><input type="text" name="dawah_position[]" placeholder="Postion" class="form-control name_list" /></td><td><input type="text" name="dawah_institute[]" placeholder="Institute" class="form-control name_list" /></td><td><input type="date" name="dawah_from[]" placeholder="From" class="form-control name_list" /></td><td><input type="date" name="dawah_to[]" placeholder="Till" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });


  $(document).on('click', '.btn_remove', function(){
       var button_id = $(this).attr("id");
       $('#row'+button_id+'').remove();
  });


  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  $('#submit').click(function(){
       $.ajax({
            url:postURL,
            method:"POST",
            data:$('#add_name').serialize(),
            type:'json',
            success:function(data)
            {
                if(data.error){
                    printErrorMsg(data.error);
                }else{
                    i=1;
                    $('.dynamic-added').remove();
                    $('#add_name')[0].reset();
                    $(".print-success-msg").find("ul").html('');
                    $(".print-success-msg").css('display','block');
                    $(".print-error-msg").css('display','none');
                    $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                }
            }
       });
  });


  function printErrorMsg (msg) {
     $(".print-error-msg").find("ul").html('');
     $(".print-error-msg").css('display','block');
     $(".print-success-msg").css('display','none');
     $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
     });
  }
}); </script>
@endsection
@endsection

