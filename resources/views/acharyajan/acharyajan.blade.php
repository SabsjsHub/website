@extends('layouts.app')

@section('title', 'मुखपृष्ठ | SABSJS')

@section('content')
<section class="max-w-7xl mx-auto px-4 py-12">

    <!-- 🌟 Decorative Heading -->
    <div class="relative text-center my-3">
        <img src="{{ asset('img/heading.png') }}" alt="Decorative Heading" class="mx-auto w-full max-w-5xl max-h-[120px] object-contain" />

        <h2 class="font-[Amita] absolute inset-0 flex items-center justify-center text-7xl sm:text-4xl font-bold text-yellow-800 tracking-wide">
            आचार्यजन
        </h2>
    </div>

    <!-- 🪔 Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @php
        $acharyas = [
        'चरम तीर्थेश भगवान महावीर',
        'भगवान महावीर पाट परम्परा',
        'पूज्य हुक्मीचन्दजी म. सा.',
        'आचार्य श्री शिवलाल जी म. सा.',
        'आचार्य श्री उदयसागरजी म. सा.',
        'आचार्य श्री चौथमलजी म. सा.',
        'आचार्य श्री श्रीलालजी म. सा.',
        'आचार्य श्री जवाहरलालजी म. सा.',
        'आचार्य श्री गणेशलालजी म. सा.',
        'आचार्य श्री नानालालजी म. सा.',
        'आचार्य श्री रामलाल जी म. सा.',
        ];
        @endphp

        @foreach ($acharyas as $index => $name)
        <div x-data="{ open: false }">
            <!-- Card -->
            <a href="javascript:void(0)" @click="open = true" class="bg-gradient-to-br from-yellow-100 via-yellow-200 to-yellow-50 border border-yellow-300 rounded-lg shadow hover:shadow-lg hover:scale-[1.02] transition-all duration-300 text-center px-6 py-8 block">
                <h3 class="text-[17px] font-semibold text-yellow-900 leading-snug">
                    {{ $name }}
                </h3>
            </a>

            <!-- Modal -->
            <div x-show="open" x-transition x-cloak class="fixed inset-0 z-50 bg-black/50 flex items-center justify-center p-4">

                <div @click.away="open = false" class="bg-white max-w-xl w-full rounded-lg shadow-lg overflow-hidden">

                    <!-- Modal Header -->
                    <div class="flex justify-between items-center px-6 py-4 border-b">
                        <h4 class="text-lg font-bold text-gray-800">
                            @if ($name === 'चरम तीर्थेश भगवान महावीर')
                            चरम तीर्थेश भगवान महावीर स्वामी का जीवन परिचय
                            @else
                            {{ $name }}
                            @endif
                        </h4>
                        <button @click="open = false" class="text-gray-500 hover:text-red-500 text-xl">&times;</button>
                    </div>



                    <!-- Modal Body -->
                    <div class="px-6 py-4 text-sm text-gray-700 overflow-y-auto max-h-[70vh]">
                        {{-- ----------------1------------ --}}

                        @if($name === 'चरम तीर्थेश भगवान महावीर')
                        <table class="table-auto w-full text-left border border-gray-200 rounded overflow-hidden">
                            <tbody class="divide-y divide-gray-200">
                                @php
                                $info = [
                                'पिता का नाम' => 'राजा सिद्धार्थ',
                                'माता का नाम' => 'रानी त्रिशला',
                                'भाई का नाम' => 'नन्दीवर्धन',
                                'बहन का नाम' => 'सुदर्शना',
                                'जन्म स्थल' => 'क्षत्रिय कुण्ड',
                                'जन्म देश' => 'पूर्व',
                                'लांछन' => 'सिंह',
                                'यक्ष' => 'मातंग (ब्रह्म शान्ति)',
                                'यक्षिणी' => 'सिद्धायिका',
                                'शरीर की ऊँचाई' => '7 हाथ',
                                'वर्ण' => 'स्वर्ण-पीला (कांचन)',
                                'च्यवन कल्याणक' => 'आश्विन सुदी 6',
                                'च्यवन नक्षत्र' => 'उत्तराफाल्गुनी',
                                'च्यवन राशि' => 'कन्या',
                                'पूर्व भव नगरी' => 'अहिछत्रा',
                                'कौनसे देवलोक से च्यवन' => 'प्राणत',
                                'तीर्थंकर नाम कर्म का भव' => 'नंदन',
                                'पूर्व भव नाम' => 'नंदन',
                                'पूर्व भव गुरु' => 'पोट्टिलक',
                                'पूर्व भव स्वर्ग' => 'प्राणत देवलोक',
                                'भव संख्या' => '27 (सत्तावीस)',
                                'गर्भकाल स्थिति' => '9 माह साढ़े सात दिन',
                                'जन्म कल्याण' => 'चैत्र शुक्ल त्रयोदशी (30 मार्च 599 ई.पू.)',
                                'बाल्यावस्था का नाम' => 'वर्धमान, वीर, ज्ञातपुत्र, महावीर',
                                'जन्म नक्षत्र' => 'उत्तरा फाल्गुनी',
                                'जन्म राशि' => 'कन्या',
                                'गण' => 'मानव',
                                'वंश' => 'इक्ष्वाकु',
                                'गोत्र' => 'काश्यप',
                                'योनि' => 'महिष',
                                'कुमार अवस्था' => '30 वर्ष',
                                'पत्नी का नाम' => 'यशोदा',
                                'पुत्री का नाम' => 'प्रियदर्शना',
                                'जंवाई का नाम' => 'जमाली',
                                'पिता की गति' => 'माहेन्द्र देवलोक',
                                'माता की गति' => 'माहेन्द्र देवलोक',
                                'दीक्षा नक्षत्र' => 'उत्तरा फाल्गुनी',
                                'दीक्षा राशि' => 'कन्या',
                                'दीक्षा नगरी' => 'क्षत्रिय कुण्ड',
                                'दीक्षा भूमि' => 'ज्ञातखण्ड वन',
                                'दीक्षा वृक्ष' => 'अशोक वृक्ष',
                                'दीक्षा दाता' => 'स्वयं',
                                'दीक्षा शिविका' => 'चन्द्रप्रभा',
                                'दीक्षा का समय' => 'मध्यान्ह (दोपहर)',
                                'दीक्षा के समय तप' => 'छट्ठ (बेला)',
                                'दीक्षा लेते ही ज्ञान' => 'चौथा मनः पर्यय',
                                'लोच' => 'पंच मुष्टि',
                                'दीक्षा के बाद पारणे का द्रव्य' => 'परमान्न-खीर',
                                'प्रथम पारणे की नगरी' => 'कोल्लाक',
                                'प्रथम आहार बहराने वाले' => 'बहुलद्विज',
                                'साधना अवधि' => 'साढ़े बारह वर्ष',
                                'प्रथम व अन्तिम उपसर्ग' => 'ग्वाले द्वारा',
                                'केवलज्ञान कल्याण' => 'वैशाख सुदी 10',
                                'केवलज्ञान नक्षत्र' => 'उत्तरा फाल्गुनी',
                                'केवलज्ञान राशि' => 'कन्या',
                                'केवलज्ञान नगरी' => 'जंम्तिका नगरी बाहर',
                                'केवलज्ञान भूमि' => 'ऋजुवालिका नदी का तट',
                                'केवलज्ञान के समय तप' => 'छट्ठ (बेला)',
                                'उत्कृष्ट तप' => 'छः माह',
                                'केवलज्ञान वृक्ष' => 'शाल वृक्ष',
                                'ज्ञान वृक्ष की ऊँचाई' => '21 धनुष',
                                'समवसरण की रचना' => '4 कोश (1 योजन)',
                                'प्रथम देशना का विषय' => 'यति धर्म, गृहस्थ धर्म, गणधर वाद',
                                'गणधर की संख्या' => '11 गणधर',
                                'प्रथम शिष्य' => 'इन्द्रभूति गौतम',
                                'प्रथम गणधर' => 'इन्द्रभूति',
                                'प्रथम शिष्या' => 'चन्दना (चन्दनबाला)',
                                'मुख्य भक्त राजा' => 'श्रेणिक',
                                'केवलज्ञानी' => '700',
                                'मनः पर्ययज्ञानी' => '500',
                                'अवधिज्ञानी' => '1300',
                                'चौदह पूर्व धारी' => '300',
                                'वैक्रिय लब्धिधारी' => '700',
                                'साधुओं की संख्या' => '14,000',
                                'साध्वियों की संख्या' => '36,000',
                                'वादी मुनि' => '1400',
                                'श्रावकों की संख्या' => '1,59,000',
                                'श्राविकाओं की संख्या' => '3,18,000',
                                'चारित्र' => 'पाँच (सामायिक, छझोपस्थापनिक, परिहार, विशुद्धि सूक्ष्म सम्पराय, यथाख्यात)',
                                'सामायिक' => 'चार (सम्यक्त्व, श्रुत, देशविरति, सर्वविरति)',
                                'प्रतिक्रमण' => 'पाँच (राइय, देवसिय, पक्खी, चौमासी, सम्वत्सर)',
                                'साढ़े बारह वर्ष में आहार दिन' => '349 दिन',
                                'तेरह अभिग्रह का पारणा' => 'कौशाम्बी में चन्दनबाला के हाथों',
                                'छद्मस्थकाल में तप' => '14 प्रकार के तप',
                                'निर्वाण कल्याणक' => 'कार्तिक कृष्ण अमावस्या',
                                ];
                                @endphp

                                @foreach($info as $label => $value)
                                <tr>
                                    <td class="py-2 px-3 font-semibold text-gray-800 w-1/2">{{ $label }}</td>
                                    <td class="py-2 px-3 text-gray-700">{{ $value }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @endif

                        {{-- //-----------------2.. --}}
                        @if ($name === 'भगवान महावीर पाट परम्परा')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">प्रभु महावीर पाट परम्परा के 82 आचार्यजन</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    @php
                                    $acharyas = [
                                    'आचार्य श्री सुधर्मा स्वामीजी म.सा.','आचार्य श्री जम्बू स्वामीजी म.सा.','आचार्य श्री प्रभव स्वामीजी म.सा.',
                                    'आचार्य श्री शयंभवाचार्यजी म.सा.','आचार्य श्री यषोभद्रजी म.सा.','आचार्य श्री संभूतिविजयजी म.सा.',
                                    'आचार्य श्री भद्रबाहुजी म.सा.','आचार्य श्री स्थूलिभद्रजी म.सा.','आचार्य श्री महागिरिजी म.सा.',
                                    'आचार्य श्री बलिसिहंजी म.सा.','आचार्य श्री सोहन स्वामी (सुहस्ती ) जी म.सा.','आचार्य श्री वीरसिंहजी.म.सा.',
                                    'आचार्य श्री सांडिल्याचार्यजी म.सा.','आचार्य श्री जीवधरजी म.सा.','आचार्य श्री आर्यसमुद्रजह म.सा.',
                                    'आचार्य श्री आर्यनंदिलजी म.सा.','आचार्य श्री नागहस्तीजी म.सा.','आचार्य श्री रेवंतगणिजी म.सा.',
                                    'आचार्य श्री सिंहगणीजी म.सा.','आचार्य श्री स्थडिलाचार्यजी म.सा.','आचार्य श्री हेमवंतजी म.सा.',
                                    'आचार्य श्री नागजीतजी म.सा.','आचार्य श्री गोविन्दाचार्यजी म.सा.','आचार्य श्री भूतदीनजी म.सा.',
                                    'आचार्य श्री छोगगणीजी म.सा.','आचार्य श्री दुःसहगणीजी म.सा.','आचार्य श्री देवर्धिागणी क्षमाश्रमणजी म.सा.',
                                    'आचार्य श्री वीरभद्राचार्यजी म.सा.','आचार्य श्री शंकरसेनाचार्या म.सा.','आचार्य श्री यषोभद्रजी म.सा.',
                                    'आचार्य श्री वीरसेनाचार्यजी म.सा.','आचार्य श्री वीरजसजी म.सा.','आचार्य श्री जयसेनाचार्यजी म.सा.',
                                    'आचार्य श्री हरिषेणजी म.सा.','आचार्य श्री जयसेनाचार्यजी म.सा.','आचार्य श्री जगमालजी म.सा.',
                                    'आचार्य श्री देवऋषिजी म.सा.','आचार्य श्री भीमऋषिजी म.सा.','आचार्य श्री कृष्णऋषिजी म.सा.',
                                    'आचार्य श्री राजऋषिजी म.सा.','आचार्य श्री देवसेनजी म.सा.','आचार्य श्री शंकरसेन द्वितीय जी म.सा.',
                                    'आचार्य श्री लक्ष्मीलाभजी म.सा.','आचार्य श्री रामऋषिजी म.सा.','आचार्य श्री पद्मऋषिजी म.सा.',
                                    'आचार्य श्री हरिसेनजी म.सा.','आचार्य श्री कुषलऋषिजी म.सा.','आचार्य श्री उपनीऋषिजी म.सा.',
                                    'आचार्य श्री जयसेनजी म.सा.','आचार्य श्री विजयसेनजी म.सा.','आचार्य श्री देवसेनजी म.सा.',
                                    'आचार्य श्री सूरसेनजी म.सा.','आचार्य श्री महासूरसेनजी म.सा.','आचार्य श्री महासेनजी म.सा.',
                                    'आचार्य श्री जीवाजी़ऋषिजी म.सा.','आचार्य श्री गजसेनजी म.सा.','आचार्य श्री मिश्रसेनजी म.सा.',
                                    'आचार्य श्री विजयसिंहजी म.सा.','आचार्य श्री शिवराजजी म.सा.','आचार्य श्री लालऋषिजी म.सा.',
                                    'आचार्य श्री ज्ञानजीऋषिजी म.सा.','आचार्य श्री भाणोजी म.सा.','आचार्य श्री रूपजी स्वामीजी म.सा.',
                                    'आचार्य श्री जीवाजीऋषिजी म.सा.','आचार्य श्री कुंवरजी म.सा.','आचार्य श्री तेजसिंहजी म.सा.',
                                    'आचार्य श्री हरजीऋषिजी म.सा.','आचार्य श्री गो धजी म.सा.','आचार्य श्री फरसरामजी म.सा.',
                                    'आचार्य श्री लोकमनजी म.सा.','आचार्य श्री महारामजी म.सा.','आचार्य श्री दौलतरा म जी म.सा.',
                                    'आचार्य श्री लालचन्दजी म.सा.','आचार्य श्री हुक्मीचन्दजी म.सा.','आचार्य श्री शिवलालजी म.सा.',
                                    'आचार्य श्री उदयसागरजी म.सा.','आचार्य श्री चौथमलजी म.सा.','आचार्य श्री श्रीलालजी म.सा.',
                                    'आचार्य श्री जवाहरलालजी म.सा.','आचार्य श्री गणेशलालजी म.सा.','आचार्य श्री नानालालजी म.सा.',
                                    'आचार्य श्री रामलालजी म.सा.',
                                    ];
                                    @endphp

                                    @foreach (array_chunk($acharyas, 3) as $rowIndex => $chunk)
                                    <tr>
                                        @foreach ($chunk as $i => $acharya)
                                        <td class="py-2 px-3 border border-gray-200 w-1/3">
                                            <span class="font-semibold">{{ $rowIndex * 3 + $i + 1 }}.</span> {{ $acharya }}
                                        </td>
                                        @endforeach
                                        @for ($i = count($chunk); $i < 3; $i++) <td class="py-2 px-3 border border-gray-200 w-1/3">
                                            </td>
                                            @endfor
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif

                        {{-- //------------3------------ --}}
                        @if ($name === 'पूज्य हुक्मीचन्दजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">महान् क्रियोद्धारक पूज्य हुक्मीचन्दजी म. सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">टोडारायसिंह</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री रतनचन्दजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती मोतीबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">चपलोत</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 9 वि.सं. 1860</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">मिगसर सुदी 2 वि.सं. 1879</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">बूंदी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरु</td>
                                        <td class="px-4 py-2">पूज्य श्री लालचन्दजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">18 साल 10 माह 23 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">मिगसर बदी 1 वि.सं. 1890</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">10 साल 11 माह 14 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">29 साल 10 माह 7 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">माघ सुदी 5 वि.सं. 1907</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">बीकानेर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">47 वर्ष 26 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">28 वर्ष 2 माह 3 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">9 वर्ष 3 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">39</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">56 वर्ष 3 माह 26 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">बैसाख सुदी 5 वि.सं. 1917</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif

                        {{-- 4-------------- --}}
                        @if ($name === 'आचार्य श्री शिवलाल जी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">परम तपस्वी आचार्य श्री शिवलालजी म.सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">धामनिया</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री टीकमदासजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती कुन्दनबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">बोडावत</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 10 वि.सं. 1867</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">मिगसर सुदी 1 वि.सं. 1891</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरु</td>
                                        <td class="px-4 py-2">मुनि दयालचन्दजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">23 वर्ष 10 माह 21 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">माघ सुदी 5 वि.सं. 1907</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">बीकानेर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">16 वर्ष 2 माह 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">40 वर्ष 25 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">बैसाख सुदी 5 वि.सं. 1917</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">49 वर्ष 3 माह 25 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">25 वर्ष 5 माह 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">16 वर्ष 8 माह 2 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा</td>
                                        <td class="px-4 py-2">57</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">66 वर्ष 11 माह 26 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 6 वि.सं. 1933</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- 5-------------- --}}
                        @if ($name === 'आचार्य श्री उदयसागरजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">वादी मानमर्दक आचार्य श्री उदयसागरजी म.सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">जोधपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री नथमलजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती जीवीबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">खींवेसरा</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">आसोज सुदी 15 वि.सं. 1876</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">चैत्र सुदी 11 वि.सं. 1908</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">बीकानेर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरू</td>
                                        <td class="px-4 py-2">मुनि हरकचन्दजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">31 वर्ष 5 माह 26 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 7 वि.सं. 1925</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">18 वर्ष 8 माह 26 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">49 वर्ष 2 माह 22 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल</td>
                                        <td class="px-4 py-2">7 वर्ष 11 माह 29 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">32</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 6 वि.सं. 1933</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">57 वर्ष 2 माह 21 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">25 वर्ष 8 माह 25 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">21 वर्ष 1 माह 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">94</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">78 वर्ष 3 माह 25 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/ अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">माघ सुदी 10 वि.सं. 1954</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- 6-------------- --}}
                        @if ($name === 'आचार्य श्री चौथमलजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">शान्तदान्त निरहंकारी आचार्य श्री चौथमलजी म.सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">पाली</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री पोखरदासजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती हीराबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">धोका</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">बैसाख सुदी 4 वि.सं. 1885</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">चैत्र सुदी 12 वि.सं. 1909</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">ब्यावर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरू</td>
                                        <td class="px-4 py-2">मुनि हरकचन्दजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">23 वर्ष 1 माह 18 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">आसोज सुदी 15 वि.सं. 1954</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">45 वर्ष 6 माह 3 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">69 वर्ष 5 माह 11 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल</td>
                                        <td class="px-4 py-2">2 माह 25 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">माघ सुदी 10 वि.सं. 1954</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">69 वर्ष 9 माह 6 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">45 वर्ष 9 माह 28 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">2 वर्ष 9 माह</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा</td>
                                        <td class="px-4 py-2">32</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">72 वर्ष 6 माह 6 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/ अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">कार्तिक सुदी 9 (10) वि.सं. 1957</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- 7....... --}}
                        @if ($name === 'आचार्य श्री श्रीलालजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">दुर्जय कामविजेता आचार्य श्री श्रीलालजी म.सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">टोंक</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री चुन्नीलालजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती चाँदबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">बम्ब</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">आषाढ़ सुदी 12, वि.सं. 1926</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">माघ बदी 7, वि.सं. 1945</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">बणोठ</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरू</td>
                                        <td class="px-4 py-2">मुनि वृद्धिचन्दजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">21 वर्ष 4 माह 19 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">कार्तिक सुदी 1, वि.सं. 1957</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">9 वर्ष 11 माह</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">31 वर्ष 3 माह 19 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल</td>
                                        <td class="px-4 py-2">8 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">कार्तिक सुदी 10 वि.सं. 1957</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">31 वर्ष 3 माह 27 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">9 वर्ष 11 माह 8 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">19 वर्ष 7 माह 24 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">157</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">51 वर्ष 11 माह 21 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/अविवाहित</td>
                                        <td class="px-4 py-2">विवाहित (मानबाई)</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">आषाढ सुदी 3 वि.सं. 1977</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">जैतारण</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- ----------8--------------- --}}
                        @if ($name === 'आचार्य श्री जवाहरलालजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">ज्योतिर्धर क्रांतदृष्टा आचार्य श्री जवाहरलालजी म.सा. का जीवन परिचय</h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">थांदला</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री जीवराजजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती नाथीबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">कवाड</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">कार्तिक सुदी 4, वि.सं. 1932</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">मिगसर सुदी 2, वि.सं. 1948</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">लीमडी-पंचमहल</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरू</td>
                                        <td class="px-4 py-2">मुनि श्रीमानजी (मगनजी)</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">16 वर्ष 28 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">चैत्र बदी 9, वि.सं. 1975</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">रतलाम</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">16 वर्ष 3 माह 22 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">42 वर्ष 4 माह 20 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल</td>
                                        <td class="px-4 py-2">2 वर्ष 3 माह 9 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">आषाढ़ सुदी 3, वि.सं. 1977</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">भीनासर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">44 वर्ष 7 माह 29 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">28 वर्ष 7 माह 1 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">23 वर्ष 5 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा</td>
                                        <td class="px-4 py-2">57</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">67 वर्ष 8 माह 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">आषाढ़ सुदी 8, वि.सं. 2000</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">भीनासर</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- ----------------9-------------- --}}
                        @if ($name === 'आचार्य श्री गणेशलालजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">
                                संयम साधना के प्रबल प्रेरक आचार्य-प्रवर श्री गणेशलालजी म.सा. का जीवन परिचय
                            </h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री सायबलालजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती इन्द्राबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">मारू</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">श्रावण बदी 3, वि.सं. 1947</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">मिगसर बदी 1, वि.सं. 1962</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरु</td>
                                        <td class="px-4 py-2">मुनि मोतीलालजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">15 वर्ष 3 माह 28 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">फाल्गुन सुदी 3, वि.सं. 1990</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">जावद</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">28 वर्ष 3 माह 17 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">43 वर्ष 7 माह 15 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल</td>
                                        <td class="px-4 py-2">9 वर्ष 4 माह 5 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">18</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">आषाढ़ सुदी 8, वि.सं. 2000</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">भीनासर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">52 वर्ष 11 माह 20 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">37 वर्ष 7 माह 22 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">19 वर्ष 6 माह 9 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा</td>
                                        <td class="px-4 py-2">9</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">72 वर्ष 5 माह 14 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/ अविवाहित</td>
                                        <td class="px-4 py-2">विवाहित (कमलाबाई)</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">माघ बदी 2, वि.सं. 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                        {{-- --------------10---------------- --}}
                        @if ($name === 'आचार्य श्री नानालालजी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">
                                समता विभूति समीक्षण ध्यान योगी धर्मपाल प्रतिबोधक आचार्य-प्रवर श्री नानालालजी म.सा. का जीवन परिचय
                            </h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">दांता</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री मोडीलालजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती शृंगार बाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">पोखरणा</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">जेठ सुदी 2, वि.सं. 1977</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">पौष सुदी 8, वि.सं. 1996</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">कपासन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरु</td>
                                        <td class="px-4 py-2">युवाचार्य श्री गणेशलालजी म.सा.</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">19 वर्ष 7 माह 6 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">आसोज सुदी 2, वि.सं. 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">22 वर्ष 8 माह 24 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">42 वर्ष 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">9</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">माघ बदी 2 वि.सं. 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">42 वर्ष 7 माह 15 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">23 वर्ष 9 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य शासनकाल</td>
                                        <td class="px-4 py-2">36 वर्ष 9 माह 29 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">59</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">कुल आयु</td>
                                        <td class="px-4 py-2">89 वर्ष 5 माह 14 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">विवाहित/ अविवाहित</td>
                                        <td class="px-4 py-2">अविवाहित</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास तिथि</td>
                                        <td class="px-4 py-2">कार्तिक बदी 3, वि.सं. 2056</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">स्वर्गवास स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('components.modals.nanalal_biography')
                        @endif
                        {{-- -------11------------ --}}
                        @if ($name === 'आचार्य श्री रामलाल जी म. सा.')
                        <div class="p-6">
                            <h4 class="text-lg font-bold text-gray-800 mb-4">
                                व्यसनमुक्ति के प्रबल प्रेरक आचार्य-प्रवर श्री रामलालजी म.सा. का जीवन परिचय
                            </h4>

                            <table class="w-full text-sm text-left text-gray-700 border border-gray-300 rounded overflow-hidden">
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">निवासी</td>
                                        <td class="px-4 py-2">देशनोक</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">पिता का नाम</td>
                                        <td class="px-4 py-2">श्री नेमचन्दजी</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">माता का नाम</td>
                                        <td class="px-4 py-2">श्रीमती गवराबाई</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">गोत्र</td>
                                        <td class="px-4 py-2">भूरा</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">जन्म तिथि</td>
                                        <td class="px-4 py-2">चैत्र सुदी 14, वि.सं. 2009</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा तिथि</td>
                                        <td class="px-4 py-2">माघ सुदी 12, वि.सं. 2031</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा स्थल</td>
                                        <td class="px-4 py-2">देशनोक</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा गुरु</td>
                                        <td class="px-4 py-2">आचार्य श्री नानेश</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">दीक्षा के समय उम्र</td>
                                        <td class="px-4 py-2">22 वर्ष 9 माह 8 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद तिथि</td>
                                        <td class="px-4 py-2">फाल्गुन सुदी 3, वि.सं. 2048</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद प्रदान स्थल</td>
                                        <td class="px-4 py-2">बीकानेर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">17 वर्ष 21 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">39 वर्ष 10 माह 10 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">युवाचार्य काल में दीक्षा (संतों की)</td>
                                        <td class="px-4 py-2">9</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद तिथि</td>
                                        <td class="px-4 py-2">कार्तिक बदी 3, वि.सं. 2056</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद स्थल</td>
                                        <td class="px-4 py-2">उदयपुर</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय उम्र</td>
                                        <td class="px-4 py-2">47 वर्ष 6 माह 4 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">आचार्य पद के समय दीक्षा पर्याय</td>
                                        <td class="px-4 py-2">24 वर्ष 6 माह 6 दिन</td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-2 font-semibold">शासनकाल में दीक्षा (संत-सती की)</td>
                                        <td class="px-4 py-2">254</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @include('components.modals.ramlal_biography')
                        @endif
                    </div>
                    <!-- Modal Footer (Optional) -->
                    <div class="px-6 py-3 border-t text-right">
                        <button @click="open = false" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded">
                            बंद करें
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <!-- 📜 निर्ग्रन्थ श्रमण संस्कृति के अद्वितीय चिराग Card -->
    <section class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white shadow-xl rounded-lg border-l-4 border-orange-500 p-6 sm:p-10">
            <!-- 🏷️ Card Heading -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-orange-700 text-center mb-6 leading-snug">
                निर्ग्रन्थ श्रमण संस्कृति के अद्वितीय चिराग - आचार्य श्री रामलाल जी म. सा. 
            </h2>

            <!-- 📖 Content Paragraphs -->
            <div class="text-gray-800 leading-relaxed text-justify text-sm sm:text-base space-y-4 max-h-[80vh] overflow-y-auto pr-2">
                <p>विश्व गुरु की उपमा से उपमित भारत प्रारम्भ से ही महापुरुषों का देश रहा है। प्रत्येक युग में किसी न किसी महापुरुष का अवतरण होता है और वे विरल आत्माएँ संसार की असारता को जानकर निरंजन-निराकार स्वरूप बनने के लिये प्रभु महावीर के शासन में प्रव्रजित होकर आत्मा से महात्मा, महात्मा से परमात्मा बनने के लिये प्रयत्नशील रहती हैं। ऐसी ही एक पुण्यात्मा आज से लगभग 69 वर्ष पूर्व राजस्थान के बीकानेर जिले के प्रसिद्ध गाँव देशनोक में माता गवरादेवी की कोख से अवतरित हुई, जिसने पिता नेमि के कुल को उज्ज्वल किया।</p>

                <p>भगवान महावीर और गौतम बुद्ध की माताओं ने अद्भुत अपूर्व स्वप्न देखे थे। ऐसे ही माता गवराबाई ने अर्द्धरात्रि में एक शुभ स्वप्न देखा कि किसी अदृश्य शक्ति ने उनकी गोद में एक दीप्तिमंत बालक को लाकर रख दिया। नौ माह बाद जिस बालक का जन्म हुआ वह पहले जयचंद बाद में रामलाल बना। उसके बाद साधुमार्गी परम्परा के हुक्मगच्छ का नौवां पट्टनायक बनकर आचार्य श्री रामलालजी म.सा. अथवा रामेश के रूप में धर्म प्रभावना के पुनीत कार्य में संलग्न हैं।</p>

                <p>आचार्य श्री नानेश ने मुनि रामलालजी को अपने पास रखकर उन्हें दीक्षा के योग्य बनाने का कार्य प्रारम्भ किया। मुनि रामलालजी ने आचार्यश्री के सानिध्य में रहकर आगम शास्त्रों का गहन अध्ययन किया।</p>

                <p>सरदारशहर चातुर्मास में आचार्यश्री के पास रहकर ज्ञानार्जन करते रहे। शीघ्र दीक्षा के लिए आतुर राम बीदासर, देशनोक, नोखा, गंगाशहर, भीनासर आदि स्थानों पर संबंधियों से दीक्षा में सहयोगी बनने का निवेदन करता घूमता रहा। अंत में मातुश्री एवं भ्राताश्री से आज्ञापत्र प्राप्त करने जदिया जाना पड़ा। राम की दीक्षा हेतु उत्कृष्ट भावना देखकर उन्होंने आज्ञापत्र पर हस्ताक्षर कर दिये। इसके उपरान्त शेष औपचारिकताएँ भी पूर्ण हो गई। माघ शुक्ला 12, वि.सं. 2031 को देशनोक में मुमुक्षु राम का दीक्षा कार्यक्रम सम्पन्न हो गया।</p>

                <p>दीक्षा के बाद मुनि रामलालजी के अलग विहार कराने का प्रसंग बना, परन्तु आचार्यश्री ने उन्हें अपने पास ही रखने का निर्णय किया। यह निर्णय मात्र संयोग नहीं था बल्कि भावी उत्तराधिकारी के प्रशिक्षण का भाग था। मुनि राम की प्रतिभा और विशेषताओं को देखते हुए उन्हें आचार्यश्री ने विशेष संरक्षण में रखा।</p>

                <p>जोधपुर चातुर्मास के दौरान उनका अध्ययन और अधिक प्रखर हुआ। पूज्य गुरुदेव ने कई महत्त्वपूर्ण कार्य विद्यार्थी मुनि राम पर छोड़ दिये। उनके अद्वितीय ज्ञान और प्रतिभा को देखते हुए आचार्य श्री नानेश ने 22 सितंबर, 1990 को उन्हें मुनिप्रवर पद से विभूषित किया और युवाचार्य घोषित किया।</p>

                <p>युवाचार्य बनने के बाद, आचार्य श्री नानेश ने स्वयं पुष्टि की कि रामेश लगभग 20 वर्षों से उनके साथ रहकर समर्पण, निष्पक्षता और परंपरा-निष्ठा प्रदर्शित करते रहे हैं। उन्होंने उन्हें उत्तराधिकारी घोषित किया और उस रत्न को तराश कर चतुर्विध संघ के मुकुट में जड़ दिया।</p>

                <p>कार्तिक बदी 3, वि.सं. 2056 को आचार्य श्री नानेश के महाप्रयाण के पश्चात युवाचार्य रामेश को आचार्य पद की चादर ओढाई गई। आचार्य बनने के बाद उन्होंने समाज-सुधार एवं संस्कार सुधार कार्यक्रमों को आगे बढ़ाया।</p>

                <p>चित्तौड़गढ़ के आसपास के गाँवों के बावरियों ने आकर अपनी पीड़ा बताई। आचार्यदेव ने उन्हें सात्विक जीवन के तीन सूत्रीय मंत्र दिए और 132 बावरियों को सिरीवाल से विभूषित किया।</p>

                <p>आपके 22 वर्षों के आचार्यत्व काल में लगभग 254 दीक्षाएँ हुई। जहाँ भी आप विराजते हैं, वहाँ एक लघु भारत का निर्माण हो जाता है।</p>

                <p>आपका सुशासन जन-जन के लिए कल्याणकारी सिद्ध हो — यही मंगलकामना है।</p>
            </div>
        </div>
    </section>



</section>
@endsection
